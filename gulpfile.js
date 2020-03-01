//gulp プラグインの読み込み
const gulp = require("gulp");
//Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass");

const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");

gulp.task("default",function(){
	//style.cssファイルを監視
	return gulp.watch("./sass/**/*.scss",function() {
		return(

			gulp
			.src("./sass/**/*.scss")
			.pipe(
				sass({
					outputStyle:"expanded"
				})
					.on("error",sass.logError)
				)
			.pipe(postcss([
				autoprefixer({
					browsers:["last 2 versions","ie >= 11","Android >= 4"],
					cascade: false
				})
				]))
		    .pipe(gulp.dest("./css"))
		    
		);
	});
});
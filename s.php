
	<?php  





//js//

function myscripts(){
	wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js' );
	wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.4.1', true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'yycountdown.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery.yycountdown.min.js');
	wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/lib/assets/js/owl.carousel.js' );
	wp_enqueue_script( 'owl.app.js', get_template_directory_uri() . '/lib/assets/js/owl.app.js' );
	wp_enqueue_script( 'daiary.js',get_template_directory_uri() . '/js/daiary.js' );
}


//css//
wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.3' );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css' );
wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css' );
wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css' );
wp_enqueue_style( 'daiary.css',get_template_directory_uri() . '/css/daiary.css' );



























	function my_scripts() {
  	


  	
}
	add_action( 'wp_enqueue_scripts', 'my_scripts' );


	function my_bootstrap_style() {

		

		
}

	add_action( 'wp_enqueue_scripts', 'my_bootstrap_style' );


	//home.phpのみのスクリプト読み込み設定
	function my_countdown_scripts(){
		if(is_home()){
			
			
			}
}
	add_action( 'wp_enqueue_scripts' , 'my_countdown_scripts' );


//スライダーcssとjsを読み込み
	function my_owl_scripts() {

	
}

	add_action( 'wp_enqueue_scripts' , 'my_owl_scripts' );

// CSSファイルのエンキュー

	function my_styles() {
		if(is_page('outdoor')){
	
		}
	}
	add_action( 'wp_enqueue_scripts', 'my_styles' );

		function daiary_style(){
		if(is_page('daiary')){
		   


	}
}
	add_action( 'wp_enqueue_scripts' , 'daiary_style' );?>

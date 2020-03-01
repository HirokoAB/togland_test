setInterval("goFlash()",9000);

function goFlash() {
    $('.keybox').addClass('vertical_sec');
    setTimeout("removeFlash()",500);
}

function removeFlash() {
    $('.keybox').removeClass('vertical_sec');
}

//吹き出しの記述　クエリですが//
$(function () {
  $('.key').hover(function() {
    $(this).next('p').show();
  }, function(){
    $(this).next('p').hide();
  });
});



// function cover_image(){

// 	var ww = $(window).width();

// 	if (ww < 400){
// 		var elem = document.createElement("img");

	
// 		elem.src = "assets/img/yoko_guide.jpg";
// 		elem.style.position = "absolute";
// 		elem.className = "cover";

// 		document.getElementById("cover_img").appendChild(elem);

// 	}else if(ww > 300){
// 		var box = document.getElementById("cover_img");
// 		var box = box.parentNode;
// 		box.removeChild(box);
// 	}
// }
// $(document).ready(function(){
// 	cover_image()
// });
// $(window).resize(function(){
// 	cover_image()
// });

function add_flash(){
	var ww = $(window).width();
	if(ww < 400){
		$('.icon').addClass('flash');
	}
}
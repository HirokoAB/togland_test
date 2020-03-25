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



function add_flash(){
	var ww = $(window).width();
	if(ww < 400){
		$('.icon').addClass('flash');
	}
}
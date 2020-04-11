setInterval("goFlash()",100);

function goFlash() {
    $('.keybox').addClass('vertical_sec');
    setTimeout("removeFlash()",100);
}

function removeFlash() {
    $('.keybox').removeClass('vertical_sec');
}



function add_flash(){
	var ww = $(window).width();
	if(ww < 400){
		$('.icon').addClass('flash');
	}
}
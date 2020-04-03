// $('.cat-9').css('background', 'Yellow');


// var property = window.getComputedStyle($('.cat-9 > .diary_date')[0], '::before').getPropertyValue('background-color');
// console.log(property);
// var color = 'rgba(12,12,12)';
// property = color;

// console.log(property);  // 疑似要素取得

//bootstrapカードレイアウト のDOM

$(".card-body").children('p').addClass('card-text');

$(".group-1").children('.card').addClass('col-6');
$(".group-3").children('.card').addClass('col-4');
$('.diary_cat-8').css('background', '#78d600');
$('.diary_cat-9').css('background', '#45c1ff');
$('.diary_cat-10').css('background', '#ff5ec1');
$('.diary_cat-11').css('background', '#ff8c21');
$('.diary_cat-11').css('background', '#fed300');


$(function(){

  //thumbnailにカラムを設定
  $(this).find('.thumbnail').addClass('col-12');
  //タブ内のカラムを設定する記述
  // var sample = $(this).find('.diary-content-1').find('.row').children();
  // $( sample ).wrapAll('<div class="col-12" />');
  // var sample = $(this).find('.diary-content-2').find('.row').children();
  // $( sample ).wrapAll('<div class="col-12 diary-box" />');
  // var sample = $(this).find('.diary-content-3').find('.row').children();
  // $( sample ).wrapAll('<div class="col-12 diary-box " />');
  // var sample = $(this).find('.diary-content-4').find('.row').children();
  // $( sample ).wrapAll('<div class="col-12 diary-box " />');
  // var sample = $(this).find('.diary-content-5').find('.row').children();
  // $( sample ).wrapAll('<div class="col-12 diary-box " />');

  




});



var diary_img = $('.to_wrap');

for( var img of diary_img ){
  $(img).wrapAll('<div id="wrapper"><div></div></div>');
}


console.log(diary_img);


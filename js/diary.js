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
$('.diary_cat-9').css('background', 'blue');
$('.diary_cat-10').css('background', 'green');
$('.diary_cat-11').css('background', '#ED0909');


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

$(window).on('load', function(){
  //ページ全体が読み込まれた時の処理

  var hieght = "0";
      $(".diary-thumbnail").each(function(){
        var height = $(".diary-thumbnail").width()*0.61;
        console.log( height );
        $(".diary-thumbnail").css( 'height' , height );

      });
    });

  // $(function(){
  //     var height = "";
  //     $(".diary-thumbnail *").each(function(){
  //         if ($(this).height() > height ) {
  //             height = $(this).width()*0.5;
  //             console.log('lkjhgj');
  //         }
  //     });
  //     $(".diary-thumbnail").css( 'height' , height );
  // })



// var property = window.getComputedStyle($('.card-title')[0], '::before').getPropertyValue('background-color');
//   var sheets = document.styleSheets,
//     sheet = sheets[10];
//     console.log(property);
//     console.log(sheets);
//     console.log(sheet);


//   $(function() {

//     if($(".card-title").parent().hasClass('diary_cat-9')) {   // Webkit
//       sheet.insertRule('.diary-content-1 .card-title::before{ background:yellow }', sheet.cssRules.length);
//     }
//     else if (sheet.addRule) {  // IE
//       sheet.addRule('.diary-content-1 .card-title::before{ background:yellow }', -1);
//     }

//     console.log(sheet.cssRules.length);
//   });
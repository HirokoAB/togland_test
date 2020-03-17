// $('.cat-9').css('background', 'Yellow');


// var property = window.getComputedStyle($('.cat-9 > .daiary_date')[0], '::before').getPropertyValue('background-color');
// console.log(property);
// var color = 'rgba(12,12,12)';
// property = color;

// console.log(property);  // 疑似要素取得

//bootstrapカードレイアウト のDOM

$(".card-body").children('p').addClass('card-text');

$(".group-1").children('.card').addClass('col-6');
$(".group-3").children('.card').addClass('col-4');
$('.daiary_cat-9').css('background', 'blue');
$('.daiary_cat-10').css('background', 'green');
$('.daiary_cat-11').css('background', 'red');


var property = window.getComputedStyle($('.card_title')[0], '::before').getPropertyValue('background-color');
var sheets = document.styleSheets,
  sheet = sheets[sheets.length - 1];
  console.log(sheets);
  console.log(property);

$(function() {

  if (".card-body").children('div').hassClass('daiary_cat-9') {	// Webkit
    sheet.insertRule('.card_title::before' , 'background-color:' + property + '"yellow" }', sheet.cssRules.length);
  }
  else if (sheet.addRule) {  // IE
    sheet.addRule('.card_title::before', 'background-color:' + property + '"yellow"', -1);
  }
});


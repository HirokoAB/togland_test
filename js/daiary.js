// $('.cat-9').css('background', 'Yellow');


// var property = window.getComputedStyle($('.cat-9 > .daiary_date')[0], '::before').getPropertyValue('background-color');
// console.log(property);
// var color = 'rgba(12,12,12)';
// property = color;

// console.log(property);  // 疑似要素取得

//bootstrapカードレイアウト のDOM

$(".daiary_content").children('p').addClass('card-text');

$(".group-3").children('.card').wrap('<div class=col-4 + card-wrap-4 >');
$(".group-6").children('.card').wrap('<div class=col-4 + card-wrap-4 >')


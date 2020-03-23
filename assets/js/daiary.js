// $('.cat-9').css('background', 'Yellow');


var property = window.getComputedStyle($('.cat-9 > .diary_date')[0], '::before').getPropertyValue('background-color');
console.log(property);
var color = 'rgba(12,12,12)';
property = color;








console.log(property);  // 疑似要素取得



git 
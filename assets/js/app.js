//メニューのハンバーガー
// jQuery(function($) {

//   //ドロワーメニュー
//   $('.js-hamburger').on('click', function(){
//     let isActive = $(this).hasClass('on');
//     toggleDrower(isActive);
//   });

//   //ハンバーガーメニューでドロップダウン
//   function toggleDrower(isActive) {
//     $('.js-hamburger')
//     if (isActive) {
//       $('#drower-bg').fadeOut(600);
//     } else {
//       $('#drower-bg').fadeIn(600);
//     }
//     $('.js-hamburger').toggleClass('on');
//     $('.js-drower').toggleClass('on');
//   }

// });


//スライダーのJS
 $(document).ready(function() {
 
   $("#slider1").owlCarousel();
 
 });
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////イベントカウントダウンのjs//////////////////////
////////////////////////////////////////////////////////////

 $('#timer').yycountdown({
  //カウントダウン開始日時
   endDateTime   : '2020/3/28 10:00:00',  //カウントダウン終了日時
   unit          : {d: '日', h: '時間', m: '分', s: '秒'},  //カウントダウン単位
	 complete      : function(_this){  //カウントダウン完了時のコールバック
                 _this.find('.yycountdown-box').css({color:'blue'});
                   }
 });
//カウントダウンの表示を整えるためにDOM操作
const parent = document.getElementById("yy-box");



 //yyのレイアウトを整えるためにdivタグで囲む

$('#yy-box').find('#yy-day , #yy-hour,.yyc-hou-text,.yyc-day-text').wrapAll('<div class="flex yy_upper">');
$('#yy-box').find('.yyc-min , .yyc-min-text,.yyc-sec,.yyc-sec-text').wrapAll('<div class="flex yy_btm">');










//yy-dayの外側にfixlemのdivタグをつける
// fixrap.outerHTMl = "<div>" + fixrap.outerHTML + "</div>";
// console.log(fixrap.outerHTML);
// fixrap.insertBefore(a.firstChild);









//fixするためのdivタグを作成
// const fixelem = document.createElement('div');
//fixするためのクラスを追加
// fixelem.classList.add("fix");





/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////indexのjs///////////////////////
////////////////////////////////////////////////////////////
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

//  var ww = $(window).width();

//  if (ww < 400){
//    var elem = document.createElement("img");

  
//    elem.src = "assets/img/yoko_guide.jpg";
//    elem.style.position = "absolute";
//    elem.className = "cover";

//    document.getElementById("cover_img").appendChild(elem);

//  }else if(ww > 300){
//    var box = document.getElementById("cover_img");
//    var box = box.parentNode;
//    box.removeChild(box);
//  }
// }
// $(document).ready(function(){
//  cover_image()
// });
// $(window).resize(function(){
//  cover_image()
// });

// function add_flash(){
//   var ww = $(window).width();
//   if(ww < 400){
//     $('.icon').addClass('flash');
//   }
// }


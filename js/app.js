// $(document).ready(function(e) {
//   $('img[usemap]').rwdImageMaps();
// });


//スライダーのJS
 $(document).ready(function() {
 
   $("#slider1").owlCarousel();
 
 });

// $(function(){
//     $('.owl-carousel').owlCarousel({
//             items: 4,   //表示する項目数
//             responsive : {　//レスポンシブ対応
//             // ブレイクポイント 0以上
//             0 : {
//                 items : 1,
//             },
//             // ブレイクポイント 480以上
//             480 : {
//                 items : 2,
//             },
//             // ブレイクポイント 768以上
//             768 : {
//                 items : 2,
//             }
//         }
//         })
// });

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




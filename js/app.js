
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////イベントカウントダウンのjs//////////////////////
////////////////////////////////////////////////////////////

// ※※※※３月６日（金）イベント中止にあたりyyカウントダウンのコードコメントアウト※※※※※  //
// 再度稼働する為には40行目から48行目の一列目 スラッシュ２本　"//"　を削除
// endDateTime の日時を変更すると再度カウントダウン開始になる
// カウント開始は設定した当日から
//
// $('#timer').yycountdown({
//  endDateTime   : '2020/3/28 10:00:00',  //カウントダウン終了日時
//  unit          : {d: '日', h: '時間', m: '分', s: '秒'},  //カウントダウン単位
//  complete      : function(_this){  //カウントダウン完了時のコールバック
//                 _this.find('.yycountdown-box').css({color:'blue'});
//                   }
// });



//カウントダウンの表示を整えるためにDOM操作
const parent = document.getElementById("yy-box");

//yyのレイアウトを整えるためにdivタグで囲む
$('#yy-box').find('#yy-day , #yy-hour,.yyc-hou-text,.yyc-day-text').wrapAll('<div class="flex yy_upper">');
$('#yy-box').find('.yyc-min , .yyc-min-text,.yyc-sec,.yyc-sec-text').wrapAll('<div class="flex yy_btm">');


//indexTOPページの宝箱の点滅を設定するコード
function goFlash() {
    $('.keybox').addClass('vertical_sec');
    setTimeout("removeFlash()",500);
}

function removeFlash() {
    $('.keybox').removeClass('vertical_sec');
}

//indexTOPのマップの高さを取得するためのコード
//マップペースの高さをとって,about_containerのマージンにする

$(function(){
    var biggestHeight = "0";
    $(".map_base *").each(function(){
        if ($(this).height() > biggestHeight ) {
            biggestHeight = $(this).height()
        }
    });
    $(".about_container").css( 'margin-top' , biggestHeight );
})



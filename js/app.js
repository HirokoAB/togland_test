function get_map_height(){

    $(document).ready(function(){
      var biggestHeight = "0";
      $(".map_base *").each(function(){
          if ($(this).height() > biggestHeight ) {
              biggestHeight = $(this).height()
          }
      });
      $(".main-contant").css( 'margin-top' , biggestHeight );
      });
  }

$(window).resize( get_map_height );

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

  //indexTOPのマップの高さを取得するためのコード
  //マップペースの高さをとって,about_containerのマージンにする


// TOPから記事一覧へ遷移する際のスムーススクロール
jQuery(function(){
   jQuery('a[href^="#here"]').click(function() {
      var speed = 800;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#here" || href == "" ? 'html' : href);
      var position = target.offset().top;
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});





  //カウントダウンの表示を整えるためにDOM操作
  const parent = document.getElementById("yy-box");

  //yyのレイアウトを整えるためにdivタグで囲む
  $('#yy-box').find('#yy-day , #yy-hour,.yyc-hou-text,.yyc-day-text').wrapAll('<div class="flex yy_upper">');
  $('#yy-box').find('.yyc-min , .yyc-min-text,.yyc-sec,.yyc-sec-text').wrapAll('<div class="flex yy_btm">');

 
  /////////////////////////////////////////////////////////////
  /////////////////モバイル端末のメニューの記述////////////////////
  ////////////////////////////////////////////////////////////


        var h = '<div class="menu_under">' 
      +'<div class="title-box">' 
      + '<div  class="flex title">' 
      + '<h2 style="font-size:1.5rem;color:black;" class="contents_subtitle subtitle">'
      + 'Naturepark contents list'
      + '</h2>'
      + '<p>'
      + 'ネイチャーパークの施設一覧'
      + '</p>'
      + '</div>'
      + '</div>'
      + '<ul class="content-list">'
      + '<a href="https://www.m-kankou.jp/kamiwari-camp/">'
      + '<li>神割キャンプ場'
      + '</li>'
      + '</a>'
      +'<a href="https://www.tamipack.jp/">'
      + '<li>'
      + 'たみ子の海パック'
      + '</li>'
      + '</a>'
      + '<li>'
      + '<a href="https://www.pref.miyagi.jp/soshiki/sz-seinen/">'
      + '志津川自然の家'
      + '</li>'
      + '</a>'
      + '<li>'
      + '<a href="https://www.facebook.com/yamagakko/">'
      + '波谷の森山学校'
      + '</li>'
      + '</a>'
      + '<li>'
      + '<a href="https://www.town.minamisanriku.miyagi.jp/index.cfm/8,0,39,390,html" alt="南三陸町ネイチャーセンターホームページへ遷移" target="_blank" />'
      + '南三陸町ネイチャーセンター'
      + '</li>'
      + '</a>'
      + '<li>'
      + '<a href="http://kawatouminovisitorcenter.jp/umi/index.html" alt="海のビジターセンターホームページへ遷移" target="_blank" />'
      + '南三陸・海のビジターセンター'
      + '</li>'
      + '</a>'
      + '<a href="https://o-eels.org/" alt="おきなくらイールズホームページへ遷移" target="_blank" />'
      + '<li>'
      + 'おきなくらExperience Explorer Leaders'
      + '</li>'
      + '</a>'
      + '</ul>'
      + '</div>';
      console.log(h);

  console.log('hogehoge');
  document.getElementById('nav-content').insertAdjacentHTML("beforeend",h);





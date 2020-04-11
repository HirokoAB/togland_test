
<?php  
/*
Template Name: page-access
:*/
?>


<?php  get_header();?>




<section class="page_access_container container">
  <div class="row main justify-content-center"> 
          <div class="title-box title access_main_title">
            <h2 class="access_subtitle subtitle">ネイチャーパークを訪れる</h2>
          </div>              
    <div class="col-md-8 access_upper">
 
          <p>戸倉地区は仙台から車で約1時間30分ほど、気仙沼市内から約１時間ほどのところに位置しています。公共交通機関をご利用の際には、本数が限られておりますので乗り継ぎ便のお時間を充分にご確認の上、所要時間に余裕を持ってお越しください。なお、施設によっては駐車場がない場合もございますので、あらかじめご了承ください。</p>
      </div>
  </div>


        <div class="row access_middle justify-content-center">
          <div class="col-md-8 bd_u">

            <div class="title-box title">
              <h2 class="access_subtitle subtitle kocha_title">こちらはいかがですか？</h2>
            </div>
        <div class="row justify-content-center">
          <p class="col-md-8 ">
        戸倉地区が位置する南三陸町とお隣の石巻市旧河北町と旧北上町、登米市旧津山町を通る県道197 号線・国道398号線沿いのドライブガイドです。三陸道が開通してから、通る機会が少なくなった一般道の魅力が詰まっています。この機会に下道をゆっくり観光しながらお越しください。
          </p> 
      
          <div class="access_kocha col-md-4"> 
            <div class="card" >
                 <img src="<?php echo get_template_directory_uri(); ?>/img/kotcha.jpg" alt="南三陸町戸倉地区までの交通手段を表したイラスト">
                <div class="card-body">
                <h5 class="card-title">こっちゃも寄らいんでば</h5>
                <a href="<?php echo get_template_directory_uri(); ?>/img/koccha.pdf" class="btn" target="_blank">ダウンロード</a>
              </div>
            </div> 
            </div>
      </div>
      </div>
      </div> 


        <div class="bk-color car">
            <div class="title-box title">
                <h2 class="access_subtitle subtitle">車でお越しの場合</h2>
            </div>
            <div class="row justify-content-center">
            <div class="col-xs-8">
                <img class="col-12"src="<?php echo get_template_directory_uri(); ?>/img/car_map.png" alt="南三陸町戸倉地区までの交通手段を表したイラスト">
            </div>
            </div>   
        
      </div>


        <div class="bk-color public">
            <div class="title-box title">
                <h2 class="access_subtitle subtitle">公共交通機関を利用する場合</h2>
            </div>
            <div class="row  justify-content-center">
            <div class="col-xs-8">
                <img class="col-12" src="<?php echo get_template_directory_uri(); ?>/img/public_map.png" alt="南三陸町戸倉地区までの交通手段を表したイラスト">
            </div>
            <div class="access_li">
              <h5 class="access_subtitle subtitle ac_link">詳細な時刻に関しましては以下のリンク先にてご確認ください</h5>

            <ul class="link-li">
              <li><a href="http://www.jreast.co.jp/"　target="_blank">JR東日本WEBサイト</a></li>
              <li><a href="https://www.jreast.co.jp/railway/train/brt/pdf/data_kesennuma.pdf" target="_blank">BRT時刻表</a></li>
              <li><a href="https://www.town.minamisanriku.miyagi.jp/index.cfm/7,6734,c,html/6734/5.pdf" target="_blank">南三陸町町内バス時刻表</a></li>
            </ul>      
        </div>
      </div>
      </div>
      
      




      <div class="row access_under">

           <div class="title-box title">
            <h2 class="access_subtitle subtitle g_map">GoogleMap</h2>
          </div>
          
              <div class="col-12">

                <iframe src="https://www.google.com/maps/d/embed?mid=13S1IgYvGb4SYbzbMfU2rWJl2v2UzwlZw" width="1100" height="660"></iframe>


<!--  -->
          </div>   



<div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p>HOME</p>
  </a>
</div>


</section>
    
    
    

<?php  get_footer();?>
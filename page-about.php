
<?php  
/*
Template Name: page-about
*/
?>


<?php  get_header();?>




<section class="page_about_container container">
  <div class="row"> 
          <div class="title-box title about_main_title">
            <h2 class="about_subtitle subtitle">戸倉ネイチャーパークとは？</h2>
          </div>              
    <div class="col-md-8 offset-md-2">
 
      <div class="about_upper">

          <p>戸倉ネイチャーパーク(公園)と言っても、そこにはすべり台やジャングルジムといった遊具はありません。南三陸町戸倉地域をそう呼ぼうとしているだけです。しかし遊具はなくても、たくさんの自然の魅力があります。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/toguramap.svg" alt="">
          <p>海からは牡蠣やワカメ、ギンザケなどの恵みがあるとともに、シベリアから越冬にやってきたコクガンが漂い、空には同じく飛来した勇猛なオオワシが舞い、川には秋サケが産卵に回遊し遡上します。森には潮風に育まれたたくましい木が育ち、その森のビタミンが海の豊穣をつくり上げます。これらの魅力的な自然は、宝物と言ってふさわしいものです。その宝物を探しに、町の公園に訪れるようにぜひみなさんに来て欲しい。</p>
      </div>
    </div>
  </div>


        <div class="row about_rower">
          <div id="about_owl" class="owl-carousel owl-theme owl-loaded col-12">
              <div class="owl-stage-outer">
                  <div class="owl-stage">
                      <div class="owl-item event-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/about_img_1.JPG" alt="" >
                      </div>
                      <div class="owl-item event-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/about_img_2.JPG" alt="" >
                      </div>
                      <div class="owl-item event-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/about_img_3.JPG" alt="" >
                      </div>
                      <!-- <div class="owl-item event-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/altimet.jpg" alt="" >
                      </div>  -->  
                </div>
            </div>
          </div>  
        </div>


      <div class="row">
        <p class="col-md-8 offset-md-2 mg-t_5">実は戸倉エリアには、この自然と豊かにふれあう機会をつくっているさまざまな活動や施設があります。そこを訪ねることが宝物の発見につながります。ワクワクしますよね、まさにエリア全体が自然を楽しめる公園のようなのです。なので自然公園＝ネイチャーパークと呼ぶことにしました。TOPページの宝探しの地図を手に、ぜひ戸倉ネイチャーパークにお越しください。心踊らせましょう。
        </p>
      </div>

  <div class="row about_middle">
           <div class="title-box title">
                <h2 class="about_subtitle subtitle">遊びが学びにかわる場所って？</h2>
           </div>
          <div class="col-md-9 bk-color">
            <div class="row">
                <p class="col-md-10 mg-t_5">
              戸倉ネイチャーパークのもう一つのコンセプトです。ネイチャーパークで自然と親しみ遊んでいると、地域の人と話をしていると、いつの間にか何かを学んでいる、そんな場所にしたいと思っています。人は、過ごした時間が”学べた””何かをつかんだ”時間になった時に、深い充実感を持つのではないでしょうか。戸倉ネイチャーパークがそんな場所になったらいいなと、みんなで向かう方向を表した言葉だととらえてください。
                </p> 
            </div>   
          </div>
  </div>


  <div class="row about_row">
     <div class="title-box title mg-r">
            <h2 class="about_subtitle subtitle">TOGURA NATURE PARK TIMESとは?</h2>
          </div>

        <div class="col-md-9 offset-md-3 bk-color">  
        <div class="row justify-content-end">
          <p class="col-md-10 mg-t_5">
          南三陸町戸倉地域、ネイチャーパークの中のいろいろな動きをみなさまにお届けするweb新聞です。2020年4月ゆるーりとtake-offします。ちょっとした生活情報からもちろんイベント情報などなど、ネイチャーパークが動いているなということをみなさんに知ってもらいたく発信していきます。しかーし、エリア内の動きを100%つかんで発信することは難しく、少々偏りが発生するかもしれないことを、先んじて了承をいただきたくお願い申し上げます。
          </p> 
        </div>   
    </div>
</div>

<div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p>HOME</p>
  </a>
</div>


</section>
    
    
    

<?php  get_footer();?>
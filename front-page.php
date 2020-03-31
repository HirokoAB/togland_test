<?php  get_header();?>

<body>
	<main>
			<div class="main_container">
				<section>
						<div class="">
						
							<div class="map_container">
								<div  type="image/svg+xml" style="z-index:0;" class="map map_base">
									<img class="base_img" src="<?php echo get_template_directory_uri(); ?>/img/map_base.png"  usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示する地図のベース画像"/>
								</div>
								<div  type="image/svg+xml" style="z-index:1;" class="map map eagle shake">
									<img class=""src="<?php echo get_template_directory_uri(); ?>/img/eagle.png" alt="戸倉ネイチャーパークトップページに表示しているサイトオオワシのイラスト">	
								</div>
								<div  type="image/svg+xml" style="z-index:2;" class="map keybox flash" id="">
									<img class="key_1" src="<?php echo get_template_directory_uri(); ?>/img/treasure.png" usemap="#tgitem" alt="" />
								</div>
								<!-- <div class="map_disc"><p>宝箱の中に何か秘密が隠れているかもしれない</p></div>
								</div> -->	
							</div>


						<map name="tgitem">
							<area onFocus="this.blur();"  shape="rect" coords="66,243,223,354" href="https://www.m-kankou.jp/kamiwari-camp/" alt="神割キャンプ場ホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="292,276,438,365" href="https://www.tamipack.jp/" alt="たみ子の海パックホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="460,206,613,312" href="https://www.pref.miyagi.jp/soshiki/sz-seinen/" alt="志津川自然の家ホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="745,162,898,260" href="https://www.facebook.com/yamagakko/" alt="波伝の森山学校ホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="797,282,987,374" href="https://www.town.minamisanriku.miyagi.jp/index.cfm/8,0,39,390,html" alt="南三陸町ネイチャーセンターホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="528,428,726,522" href="http://kawatouminovisitorcenter.jp/umi/index.html" alt="海のビジターセンターホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="565,567,753,678" href="https://o-eels.org/" alt="おきなくらイールズホームページへ遷移" target="_blank" />
							<area onFocus="this.blur();" shape="rect" coords="565,567,753,678" href="#" alt="漁業体験" target="__blank" />
							<area onFocus="this.blur();" shape="rect" coords="278,577,429,674" href="#" alt="釣り体験" target="_blank" />
							<area onFocus="this.blur();" shape="poly" coords="25,541,28,540,165,488,220,513,228,588,231,653,201,676,94,685,34,635,26,545,26,545" href="<?php echo get_permalink( HOME );?> "alt="" target="_blank"/>
						</map>
				</section>
						<!-- </div>はfooterに準備 -->
				<div class="main-contant">

				<div class="row"> 
					<div class="col-lg-12">

				<section class="diary">
					<div class="row">
						<div class="col-lg-9">
							<div class="diary-container">
								
								<div class="diary-title-box flex title-box">
									<div class="diary-title_upper title flex">
										<div  class="flex title">	
										<h2 class="diary_subtitle subtitle">NaturePark Diary</h2>
										<p>ネイチャーパークの日々の出来事をゆるりとご報告</p>
										</div>
									</div>	
									
									<div class="link-to-archive">
										<a href="<?php echo get_permalink( diary );?> "><p><strong>→ 一覧ページはこちら</strong></p></a>
									</div>
								</div>	


								<div class="diary-content">
									<div class="row no-gutters fea-box">

									<?php get_template_part('content','featured'); ?>

									</div>

									
								</div>
							
								<div class="diary-content-1">

									<?php get_template_part('content','diary'); ?>
									
								</div>
							</div>
						</div>

					
						<div class="col-lg-3 aside">
							<div class="page_container">
								<div class="row content_box">
								<div class="page-title-box title-box">
									<div  class="flex title">	
											<h2 class="page_subtitle subtitle">戸倉地区	の四季歴</h2>
									</div>
								</div>
									
									<ul class="content_list">
										<li class="card"><img class="card-img-top"src="<?php echo get_template_directory_uri(); ?>/img/banner_nature.png" alt="">
											<p class="card-text">地域の自然と人の営みを表した生活四季歴です。自然と人の営みの繋がりををひと目で見ていただけます。</p>
										</li>
										</ul>
								<div class="page-title-box title-box">
									<div  class="flex title">	
											<h2 class="page_subtitle subtitle">海を支える人たち</h2>
									</div>
								</div>	
								<ul class="content_list">	
										<li class="card"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/banner_ryousi.png" alt="">
											<p class="card-text">海の恵みをもたらしてくれるイケメン漁師さんたちを名鑑に。</p>
										</li>
								</ul>
								<div class="page-title-box title-box">
									<div  class="flex title">	
											<h2 class="page_subtitle subtitle">地元の人が知る戸倉の魅力</h2>
									</div>
								</div>	
								<ul class="content_list">			
										<li class="card"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/page_thumbnail.png" alt="">
											<p>地元の人が知る戸倉の情報を南三陸町内の宮司さんが地図にしました。手書きの柔かなイラスト が素敵な地図です</p>
										</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
							


						<!-- <div class="link_container container">
							<h2 class="link_subtitle subtitle">関係団体の皆様</h2>
							<p>戸倉ネイチャーパークを盛り上げていく団体の皆様</p>
							<div class="row flex">
								<div class="col-12 content_box">
									<ul class="link_list col-10 flex">
										<li><img src="<?php echo get_template_directory_uri(); ?>/img/link_banner.png" alt=""></li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/img/link_banner.png" alt=""></li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/img/link_banner.png" alt=""></li>
									</ul>
									<div class="flex">
										<img src="" alt="">
										<img src="" alt="">
									</div>
								</div>
							</div> -->
						</div>
				</section> 
			</div><!-- メインコンテナの一番した -->

	</main>
			

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> -->

<script>
$(document).ready(function(){
    $(window).resize();
});
$('img[usemap]').rwdImageMaps();
//         $(document).ready(function(e) {
//   $('img[usemap]').rwdImageMaps();
// });


</script>

</body>
<?php get_footer();?>


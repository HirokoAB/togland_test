<?php  get_header();?>

<body>
	<main>
			<div class="main_container contaier"　style="z-index: ">
				<section>
						
						<div class="map_wrappar row">
						
							<div class="map_container col-12">
								<div  type="image/svg+xml" style="z-index:0;" class="map map_base">
									<img class="base_img" src="<?php echo get_template_directory_uri(); ?>/img/map_base.png"  usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示する地図のベース画像"/>
								</div>
								<div  type="image/svg+xml" style="z-index:1;" class="map map eagle shake">
									<img class=""src="<?php echo get_template_directory_uri(); ?>/img/eagle.png" alt="戸倉ネイチャーパークトップページに表示しているサイトオオワシのイラスト">	
								</div>
								<div  type="image/svg+xml" style="z-index:2;" class="map keybox flash" id="">
									<img class="key_1" src="<?php echo get_template_directory_uri(); ?>/img/treasure.png" usemap="#tgitem" alt="" />
								</div>
							</div>
						</div>

						<map name="tgitem">
							<area onFocus="this.blur();" shape="rect" coords="66,243,223,354" href="https://www.m-kankou.jp/kamiwari-camp/" alt="神割キャンプ場ホームページへ遷移" target="_blank" />
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
						<!-- </div> -->
				<section>
						<div class="about_container container">
							<h2 class="about_subtitle subtitile">戸倉ネイチャーパークとは？</h2>
							<!-- TOP真ん中の記述の上段raw -->
							<div class="row">
								<div class="col-12">
									<div class="col-5 about_left flex">
										<p class="abnp_article">戸倉ネイチャーパーク(公園)と言っても、そこにはすべり台やジャングルジムといった遊具はありません。南三陸町戸倉地域をそう呼ぼうとしているだけです。しかし遊具はなくても、たくさんの自然の魅力があります。
										海からは牡蠣やワカメ、ギンザケなどの恵みがあるとともに、シベリアから越冬にやってきたコクガンが漂い、空には同じく飛来した勇猛なオオワシが舞い、川には秋サケが産卵に回遊し遡上します。森には潮風に育まれたたくましい木が育ち、その森のビタミンが海の豊穣をつくり上げます。これらの魅力的な自然は、宝物と言ってふさわしいものです。その宝物を探しに、町の公園に訪れるようにぜひみなさんに来て欲しい。実は戸倉エリアには、この自然と豊かにふれあう機会をつくっているさまざまな活動や施設があります。そこを訪ねることが宝物の発見につながります。ワクワクしますよね、まさにエリア全体が自然を楽しめる公園のようなのです。なので自然公園＝ネイチャーパークと呼ぶことにしました。上の宝探しの地図を手に、ぜひ戸倉ネイチャーパークにお越しください。心踊らせましょう。</p>
									</div>
									<div class="col-5 about_right">
										<img src="" alt="">
										<p class="guide_to_np">ネイチャーパークへ行ってみる</p>
									</div>
								</div>
							</div>	
							<!-- 戸倉ネイチャーパークについての説明のスライダーの記述 -->
							<div class="aboout_rower row">
								<div class="owl-carousel owl-theme owl-loaded col-12 margin-auto">
								    <div class="owl-stage-outer">
								        <div class="owl-stage">
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/altimet.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">アルティメット</div>
								            	</div> -->
											</div>
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/tent.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">テント展示会</div>
								            	</div> -->
											</div>
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/kupp.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">KUBB</div>
								            	</div> -->
											</div>
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/baum.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">バームクーヘン作り</div>
								            	</div> -->
											</div>
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/naturegame.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">ネイチャーゲーム</div>
								            	</div> -->
											</div>
								            <div class="owl-item event-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/smork.jpg" alt="" >
								            	<!-- <div class="mask">
								            		<div class="caption">薫製教室</div>
								            	</div> -->
											</div>
								        </div>
								 	</div>	
								</div>
							</div>
						</div>
				</section>

				<section>
						<div class="page_container container">
							<h2 class="link_subtitle sub_title"></h2>
							<p></p>					
							<div class="row">
								<ul class=" content_list col-12">
									<li><img src="" alt="">
										<p>地域の自然と人の営みを表した生活四季歴です。自然と人の営みの繋がりををひと目で見ていただけます</p>
									</li>
									<li><img src="" alt="">
										<p>海の恵みをもたらしてくれるイケメン漁師さんたちを名鑑に。</p>
									</li>
									<li><img src="" alt="">
										<p>地元の人が知る戸倉の情報を南三陸町内の宮司さんが地図にしました。手書きの柔かなイラスト が素敵な地図です</p>
									</li>
								</ul>
							</div>
						</div>
				</section>
						<!-- ここにダイアリーの一覧を挿入 -->
				<section>
						<div class="link_container container">
							<h2 class="link_subtitle subtitle">関係団体の皆様</h2>
							<p>戸倉ネイチャーパークを盛り上げていく団体の皆様</p>
							<div class="row">
								<div class="col-12">
									<ul class="link_list col-10">
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
									</ul>
									<div class="flex">
										<img src="" alt="">
										<img src="" alt="">
									</div>
								</div>
							</div>
						</div>
				</section> 
			</div><!-- メインコンテナの一番した -->

	</main>
			

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> -->

<script>
        $(document).ready(function(e) {
  $('img[usemap]').rwdImageMaps();
});


</script>

</body>
<?php get_footer();?>


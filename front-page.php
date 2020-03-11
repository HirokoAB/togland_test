<?php  get_header();?>

<body>
	<main>
		<section>
			<div class="video_wrappar">
			
				<div class="map_container">
						<div  type="image/svg+xml" style="z-index: 1" class="map map_base">
							<img class="base_img" src="<?php echo get_template_directory_uri(); ?>/img/map_base.png"  usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示する地図のベース画像"/>
						</div>
						<div  type="image/svg+xml" style="z-index: 2" class="map map eagle shake">
							<img class=""src="<?php echo get_template_directory_uri(); ?>/img/eagle.png" alt="戸倉ネイチャーパークトップページに表示しているサイトオオワシのイラスト">	
						</div>
						<div  type="image/svg+xml" style="z-index:7" class="map keybox flash" id="">
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
					</div>
			

			</div>
	</section> 
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


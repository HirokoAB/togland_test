<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index_style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="戸倉ネイチャーパーク,南三陸町戸倉,戸倉,自然体験,遊びが学びに変わる場所,あそびがまなびにかわるばしょ,">
	<title>戸倉ネイチャーパーク</title>

</head>
<body>
	<main>
		<section>
			<div class="video_wrappar">
			
				<div class="map_container">
						<div  type="image/svg+xml" style="z-index: 1" class="map map_base">
							<img class="base_img" src="<?php echo get_template_directory_uri(); ?>/img/map_base.svg" usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示する地図のベース画像" />
						</div>
						<div  type="image/svg+xml" style="z-index: 2" class="map map eagle shake">
							<img class=""src="<?php echo get_template_directory_uri(); ?>/img/map_eagle.svg" alt="戸倉ネイチャーパークトップページに表示しているサイトオオワシのイラスト">	
						</div>
						<div  type="image/svg+xml" style="z-index: 3" class="map">
							<img class="horizontal" src="<?php echo get_template_directory_uri(); ?>/img/map_description.svg" alt="戸倉ネイチャーパークトップページに表示している体験スポットの説明">
						</div>
						<div  type="image/svg+xml" style="z-index: 4" class="map label">
							<img class="horizontal" src="<?php echo get_template_directory_uri(); ?>/img/map_label.svg" alt="戸倉ネイチャーパークトップページに表示している体験スポットの説明">
						</div>
						<div  type="image/svg+xml" style="z-index: 5"  class="map item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/map_item.svg" usemap="#tgitem" alt="戸倉ネイチャーパークトップページに表示している体験スポットのイラスト">
						</div>
						<div  type="image/svg+xml" style="z-index: 6" class="map keybox" id="">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_keybox.svg" usemap="#tgitem" alt="" />
							<img class="guide flash" src="<?php echo get_template_directory_uri(); ?>/img/guide_2.svg" alt="戸倉ネイチャーパークトップページに表示している同じサーバー上で公開しているサイトへ遷移する宝箱の画像">
						</div>
						<div  type="image/svg+xml" style="z-index: 7" class="map compass" id="">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_compass.svg" usemap="" alt="" />
						</div>
					</div>
				</div>

					<map name="tgitem">
					  <area onFocus="this.blur();" shape="rect" coords="64,70,78,86" href="https://www.tamipack.jp/" alt="たみ子の海パックホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="50,92,85,108" href="#" alt="釣り体験" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="91,108,121,134" href="https://o-eels.org/" alt="おきなくらイールズホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="143,90,179,100" href="#" alt="漁業体験" target="__blank" />
					  <area onFocus="this.blur();" shape="rect" coords="142,66,167,79" href="https://m-inuwashi.jp/" alt="南三陸町ネイチャーセンターホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="124,38,148,55" href="https://www.facebook.com/yamagakko/" alt="波伝の森山学校ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="105,71,134,81" href="http://kawatouminovisitorcenter.jp/umi/index.html" alt="海のビジターセンターホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="24,67,52,82" href="https://www.m-kankou.jp/kamiwari-camp/" alt="神割キャンプ場ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="87,59,115,71" href="https://www.pref.miyagi.jp/soshiki/sz-seinen/" alt="志津川自然の家ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="3,104,52,148" href="<?php echo get_permalink( HOME );?> "alt="" target="_blank"/>
					</map>
					</div>
			

			</div>
	</section>

	</main>
	<aside>


	</aside>












<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
<script>
        $('img[usemap]').rwdImageMaps();
</script>

</body>


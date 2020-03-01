<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index_style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>今ここ</title>

</head>
<body>
	<main>
		<section>
			<div class="cover_img"></div>
			<div class="video_wrappar">

				<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 841.89 595.276">
				  <defs>
				    <style>
				      .cls-1 {
				        fill: none;
				      }
				    svg{
				        width:auto;
				        height:auto;
				      }
				    </style>
				  </defs>
				  <title>アセット 2</title>
				  <g id="レイヤー_2" data-name="レイヤー 2">
				    <g id="hotspot">
				      <g>
				        <image class="cls-1"  xlink:href="svg/svg/map_overitem_up_2.svg" />
				        <circle class="cls-2" cx="150.833" cy="288.483" r="31.252"/>
				        <circle class="cls-2" cx="277.532" cy="298.91" r="31.252"/>
				        <circle class="cls-2" cx="404.164" cy="256.029" r="31.252"/>
				        <circle class="cls-2" cx="541.951" cy="184.512" r="31.252"/>
				        <circle class="cls-2" cx="472.895" cy="292.043" r="31.252"/>
				        <circle class="cls-2" cx="608.14" cy="277.473" r="31.252"/>
				        <circle class="cls-2" cx="651.921" cy="371.639" r="31.252"/>
				        <circle class="cls-2" cx="281.161" cy="412.4" r="31.252"/>
				        <circle class="cls-2" cx="400.216" cy="473.805" r="31.252"/>
				      </g>
				    </g>
				  </g>
				</svg>

			
				<div class="map_container">
						<div  type="image/svg+xml" class="map map_base">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_base.svg"  alt="" />
						</div>
						<div  type="image/svg+xml" class="map main_title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/map_title.svg">	
						</div>
						<div  type="image/svg+xml" class="map sub_title">
							<img class=""src="<?php echo get_template_directory_uri(); ?>/img/map_sub_title.svg">	
						</div>
						
						<div  type="image/svg+xml"  class="map map_base">
						<div class="map_content ">
						<div  type="image/svg+xml" class="map index ">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_index.svg">
						</div>
						<div  type="image/svg+xml" class="map label vertical">
							<img class="horizontal" src="<?php echo get_template_directory_uri(); ?>/img/map_label.svg">
						</div>
						<div  type="image/svg+xml" class="map label_sec vertical_sec">
							<img class="holizontal_sec"src="<?php echo get_template_directory_uri(); ?>/img/map_lavel_2.svg">S
						</div>
						<div  type="image/svg+xml"  class="map item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/map_overitem.svg"  alt="ネイチャーパークスッポット名">
						</div>
						<div  type="image/svg+xml" style="z-index:96;"class="map item icon">
							<img  class="item_dwn"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_dwn.svg"  alt="ネイチャーパークスッポット名">
						</div>
						<div  type="image/svg+xml" style="z-index:97;"class="map item icon">
							<img class="item_up"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_up.svg"  alt="ネイチャーパークスッポット名">
						</div>
						<div  class="map item icon " style="z-index:97;">
							<img class="item_up_2"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_up_2.svg"  alt="ネイチャーパークスッポット名">
						</div>
						
						<div  type="image/svg+xml" class="map keybox" id="">
							<img class="key" src="<?php echo get_template_directory_uri(); ?>/img/map_keybox.svg"  alt="" />
							<img class="guide flash" src="<?php echo get_template_directory_uri(); ?>/img/guide_2.svg" alt="">
						</div>	
						<div  type="image/svg+xml" class="map eagle shake">
							<img  src="<?php echo get_template_directory_uri(); ?>/img/map_eagle.svg">
						</div>
						<div  type="image/svg+xml" class="map compass">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_compass.svg">
						</div>


					</div>
			
      <!-- <video src="<?php echo get_template_directory_uri(); ?>/img/bk_sky5.mp4"  autoplay muted loop playsinline ></video> -->

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


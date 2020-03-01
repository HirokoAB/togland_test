
<?php  /*
Template Name: page-content
*/
?>



<?php 
get_header();
 ?>

	<section class="page-content container">
		<div class="low page-list">
			<!-- <ul class="page-list"> -->
				<ul class="list_upper flex">
					<li class="content-list-first"><a href="<?php echo get_permalink( issue );?> "alt="" target="_blank"/><img src="<?php echo get_template_directory_uri(); ?>/img/left.png" alt="">こっちゃもよラインでば</a></li>
					<li class="content-list-second"><a href="">戸倉っこマップ<img src="<?php echo get_template_directory_uri(); ?>/img/right.png" alt=""></a></li>
				</ul>

				<!-- <div class="flex img_sec">
					<img src="<?php echo get_template_directory_uri(); ?>/img/md_img.png" alt="">
				</div> -->

				<div class="content-illust flex">
					<h3 class="title_fst">戸倉のこと</h3>
					<h3 class="title_sec">もっと知る？</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/img/mid_back.png" alt="">
					<img class="tako" src="<?php echo get_template_directory_uri(); ?>/img/tako.png" alt="">
					<img class="matsu" src="<?php echo get_template_directory_uri(); ?>/img/matsu.png" alt="">
					<img class="kamome" src="<?php echo get_template_directory_uri(); ?>/img/kamome.png" alt="">
					<img class="owashi" src="<?php echo get_template_directory_uri(); ?>/img/oowashi.png" alt="">
					<img class="kokugan" src="<?php echo get_template_directory_uri(); ?>/img/kokugan.png" alt="">
					<img class="ginzake" src="<?php echo get_template_directory_uri(); ?>/img/ginzake.png" alt="">
				</div>

				<ul class="list_down flex">
					<li class="content-list-third"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/left.png" alt="">漁師名鑑</a></li>
					<li class="content-list-forth"><a href="">フェノロジーカレンダー<img src="<?php echo get_template_directory_uri(); ?>/img/right.png" alt=""></a></li>
				</ul>
		</div>	
			
		


	</section>
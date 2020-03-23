<?php  /*
Template Name: page-404
*/
?>
<?php 
get_header(); ?>

<section>
	<div class="non_container">
		<div class="row test justify-content-md-center flex">
			<div class="non_box">
				<div class="non-message">
				<p>I'm Sorry...</p>	
				<p>このページは<br>準備中です</p>
				<b><p class="link-to-top"><a href="<?php echo home_url(); ?>">トップページへ</a></p></b>
				</div>
				<div class="non-img">
				<!-- <img class="back" src="<?php echo get_template_directory_uri(); ?>/img/mid_back.png" alt=""> -->
				<img class="kokugan" src="<?php echo get_template_directory_uri(); ?>/img/kokugan.png" alt="">
				<img class="tako" src="<?php echo get_template_directory_uri(); ?>/img/tako.png" alt="">
				</div>
				
		</div>
	</div>
</div>	

</section>
<?php 
get_footer(); ?>
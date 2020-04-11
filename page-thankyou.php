<?php  /*
Template Name: page-thankyou
*/
?>
<?php 
get_header(); ?>

<section>
	<div class="non_container">
		<div class="row test justify-content-md-center flex">
			<div class="non_box">
				<div class="thankyou-message">
				<p class="thk_p">お問い合わせいただき<br>ありがとうございました</p>	
				<p>内容を確認次第担当から<br>ご連絡させていただきます</p>
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
<p style="font-size:6px;">イラストレーション：Yumiko Hatakeyama</p>	

</section>
<?php 
get_footer(); ?>
<?php  
/*
Template Name: page-ask
*/
?>


<?php  get_header();?>


<div class="contact_container row">
	<div class="contact-title-box title-box">
		<div  class="title">	
				<h2 class="page_subtitle title">ネイチャーパークに関するお問い合わせ</h2>
				<p class="subtitle">以下の内容をご記入の上送信ボタンを押してください</p>
		</div>
	</div>

	<div class="contact_form col-md-8 offset-md-2">
		
		<?php echo do_shortcode('[contact-form-7 id="401" title="Contact form 1"]'); ?>

	</div>	
</div>




<?php  get_footer();?>




<?php  
/*
Template Name:page
*/
?>
<?php  get_header();?>

<body>	
<header id="header">
			<!-- <ul class="">
				<li>ホーム</li>
				<li>お問い合わせ</li>
			</ul>
			<div id="toggle"class="js-hamburger hamburger"><span></span>
			</div> -->
</header>
<div id="wrapper">
<main>
<section>
	<div class="page">	
		<div class="img_box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_white_3.svg" alt="">
				<div id="timer" class="container">
					<div>
						<div class="timer_title">開催まであと</div>
					</div>
				</div>
		</div>
	</div>
	
	<!-- メインのコンテンツ -->
	<div class="container">	
		<div class="row content upper-conteiner">
			<div class="sub-title">
				<p><h1>Event Photo<br>こんなことやります</h1></p>
			</div>

			<div class="col-12 slider-box">
				<!-- スライダーの記述 -->
				<div class="owl-carousel owl-theme owl-loaded col-10 margin-auto">
				    <div class="owl-stage-outer">
				        <div class="owl-stage">
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/altimet.jpg" alt="" ></div>
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/tent.jpg" alt="" ></div>
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/kupp.jpg" alt="" ></div>
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/baum.jpg" alt="" ></div>
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/naturegame.jpg" alt="" ></div>
				            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/smork.jpg" alt="" ></div>
				        </div>
				 	</div>	
				    <!-- <div class="owl-dots"> -->
<!-- 				        <div class="owl-dot active"><span></span></div> -->
<!-- 				        <div class="owl-dot"><span></span></div>
				        <div class="owl-dot"><span></span></div> -->
				    <!-- </div> -->
				</div>
			</div>
		</div>

			<!-- ブログコンテンツの表示 	-->
		<div class="row content blog-content">
			<div class="sub-title">
		 		<p><h1>INFOMATION<br>毎日更新中!!!!!!</h1></p>
		 	</div>

			<div class="col-12">
				<div class="col-10 margin-auto">
				 		<?php get_template_part('loop' , 'blog'); ?>
				 	<div class="see-more text-right text-six">
						<a href="<?php echo get_permalink( BLOG );?>"><p><i class="fas fa-map-signs"><span class="mgn-3"></span></i>SEE MORE BLOG! ブログの一覧 ▶︎</p></a>
					</div>	
				</div>
			</div>	
		</div>

	</div>			
</section>



</main>
<?php  get_footer();?>
<?php get_header(); ?>

<article style="padding-top: 50px; padding-bottom:100px;" class="single-base">
	<div class="container">
		<div class="row"_>
			<div class="col-sm-12 base margin-auto" style="margin-top:0px;">
				<div class="col-sm-10 margin-auto">




					<?php if(have_posts()): the_post(); ?>
							

							<div class="single_img">
			                	<?php the_post_thumbnail(''); ?>
			              	</div>
			              	<div class= " single-upper flex align-center">
			              		<!--タイトルを取得-->
			                    <h1><?php the_title(); ?></h1>
			                    <!--投稿日を取得-->
			                    <span class="post-date">
			                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
			                    </span>
			                </div>

			                <hr>

			                
			                <!-- 本文取得 -->
			              	<div class="single-content">
								<?php the_content(); ?>
			              	</div>

			        <?php endif;?>
							<div class="text-center nav-box nav-upper">
				              <span class="pre_text" >
				                <?php previous_post_link('%link','< 前へ'); ?>
				              </span>
				              <span class="next_text">  
				                    <?php next_post_link('%link','次へ >'); ?>
				              </span>
				          	</div>
				          	
				          	<div class="text-center nav-box link-archive">
								<a href="<?php echo get_permalink( BLOG );?>"><i class="fas fa-tree"></i><span class="mgn-3"></span>ブログの一覧へ</a>
							</div>		
				</div>
			</div>
		</div>
	</div>

	
</article>

<?php get_footer(); ?>


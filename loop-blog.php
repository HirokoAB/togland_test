
	<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;  ?>
	<?php $loop  = new WP_Query(array(
	"post_type" => "outdoor",
    "paged" => $paged,
    "posts_per_page" => 4,
    "post_status" => "publish"
  	));?>


<!-- ここから記事取得のループ -->

	<?php 
	if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>


        <div class="blog-container">
        	<div class="post-title">
        		<h2><i class="fas fa-campground"></i><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        	</div>

        	<div class="post-date">
                <p><?php the_time("Y-m-d"); ?></p>
            </div>

            <div class="post-excerpt">
		        <p><?php the_excerpt() ?></p>
	        </div>

	        <div class="post-more">
				<a class="more-link" href="<?php the_permalink() ?>">続きを読む
				</a>
			</div>

	        <div class="post-thumbnail">
	            <?php if (has_post_thumbnail()): ?>
	                <?php the_post_thumbnail(''); ?>
	            <?php else: ?>
	                <img src="<?php echo get_template_directory_uri(); ?>" alt="">
	            <?php endif; ?>
	        </div>
		</div>
	        	

    
    <?php endwhile; ?>

    <?php endif; ?>



     

	


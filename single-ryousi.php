<?php  
/*
Template Name: sigle-fisherman
*/
?>

<?php get_header(); ?>

<!-- <?php $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1 ;  ?>
    <?php $loop  = new WP_Query(array(
        "post_type" => "ryousi",
        "posts_per_page" => 1,
        "paged" => $paged,
        "post_status" => "publish"
      ));
      query_posts($loop);

      ?> -->

   <div class="row">
   <li class="col-md-3 col-6 　fisherman_img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $cfs->get( 'ryousi_img' ); ?>" alt=""/></a>
                <p class="fisherman_name"><?php echo $cfs->get( 'ryousi_name' ) ?></p>
                    <div class="mask">
                      <p class="caption"><?php echo $cfs->get( 'ryousi_name' ) ?></p>
                    </div>
            </li>
	</div>





<?php  get_footer();?>




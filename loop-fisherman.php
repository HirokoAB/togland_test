
<?php $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1 ;  ?>
    <?php $loop  = new WP_Query(array(
        "post_type" => "ryousi",
        "posts_per_page" => 6,
        "paged" => $paged,
        "post_status" => "publish"
      ));
      query_posts($loop);

      ?>

<?php
          if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>

   <li class="col-md-3 col-6 fisherman_img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $cfs->get( 'ryousi_img' ); ?>" alt=""/></a>
                <p class="fisherman_name"><?php echo $cfs->get( 'ryousi_name' ) ?></p>
                    <div class="mask">
                      <p class="caption"><?php echo $cfs->get( 'ryousi_name' ) ?></p>
                    </div>
            </li>

             <?php endwhile; ?>

             <?php endif; ?>





<?php $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1 ;  ?>
    <?php $loop  = new WP_Query(array(
        "post_type" => "ryousi",
        "posts_per_page" => 20,
        "paged" => $paged,
        "post_status" => "publish"
      ));
      query_posts($loop);

      ?>

<?php
          if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>

   <li class="col-6 col-md-3 fisherman_img">
              <img src="<?php echo $cfs->get( 'ryousi_img' ); ?>" alt=""/>
                <p class="fisherman_name"><?php echo $cfs->get( 'ryousi_name_e' ) ?></p></a>
                    <a href="<?php the_permalink(); ?>"><div class="mask">
                      <p class="caption"><?php echo $cfs->get( 'ryousi_ship' ) ?></p>
                    </div></a>
            </li>

             <?php endwhile; ?>

             <?php endif; ?>




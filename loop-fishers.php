
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
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $cfs->get( 'ryousi_img' ); ?>" alt=""/></a>
                <p class="fisherman_name"><?php echo $cfs->get( 'ryousi_name' ) ?></p>
                    <div class="mask">
                      <p class="caption"><?php echo $cfs->get( 'ryousi_ship' ) ?></p>
                    </div>



                    <p class="fisherman_name"><?php echo $cfs->get( 'ryousi_name_e' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_birth' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_fav' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_year_of_ex' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_food' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_ship' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_f_method' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_catch' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_inspire' ) ?></p>

<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_another_job' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_crisis' ) ?></p>

<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_happy' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_excite' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_good' ) ?></p>

<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_hard' ) ?></p>
<p class="fisherman_name"><?php echo $cfs->get( 'ryousi_sea' ) ?></p>
            </li>

             <?php endwhile; ?>

             <?php endif; ?>










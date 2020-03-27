<?php  
/*
Template Name: sigle-fisherman
*/
?>

<?php get_header(); ?>


<?php  CFS()->get('ryousi_img'); ?>

<li class="col-md-3 col-6 fisherman_img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo CFS()->get('ryousi_img'); ?>" alt=""/></a>

<!--                 <p class="fisherman_name"><?php echo $test["ryousi_name"] ?></p>
                    <div class="mask">
                      <p class="caption"><?php echo $test["ryousi_ship"] ?></p>
                    </div> -->
            </li>



<?php  get_footer();?>




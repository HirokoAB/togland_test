<?php  /*
Template Name: Archive-outdoor
*/
?>

<?php get_header(); ?>
<main>

      
    <?php $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1 ;  ?>
    <?php $loop  = new WP_Query(array(
        "post_type" => "outdoor",
        "posts_per_page" => 6,
        "paged" => $paged,
        "post_status" => "publish"
      ));
      query_posts($loop);

      ?>
   <div class="container">
      <div class="row">
        <div class="col-10 margin-auto base">
          <h1 class="text-center text-six archive-title">ブログ記事一覧</h1>

          <?php
          if($loop->have_posts() ): while($loop->have_posts()) : $loop->the_post();?>
            <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="archive-box">
              <div class="archive-container">
              <div class="post-thumbnail">
                <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(''); ?>
                  <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-.jpg" alt="">
                <?php endif; ?>
                
              </div>

              <div class="archive-row">
              <div class="archive-upper">
                <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <div class="post-date">
                  <p><?php the_time("Y-m-d"); ?></p>
                </div>
              </div> 

              <hr>

              <div class="post-lower">
                  <div class="post-entry">
                    <p><?php the_excerpt() ?></p>
                  </div>
                  <br>
                  <div class="post-more">
                    <a class="more-link" href="<?php the_permalink() ?>">続きはこちら</a>
                  </div>
              </div>
            </div>
            </div>

              <?php endwhile; ?>


            <?php echo '<div class="text-center">'.paginate_links(array(
                                                'total' => $loop -> max_num_pages
                                              )); ?>

              <?php endif; ?>

            <div class="list-btn">
              <a href="<?php echo get_permalink( HOME );?> ">TOPへ</a>
            </div>

        </div>
      </div>
    </div>
  </div>

</main>


<?php get_footer(); ?>

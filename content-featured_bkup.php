
<?php  /*
Template Name: Archive-featured
*/
?>





    <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => '2',
        'post_type' => 'diary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                'terms' => 'featured'
                                    )
                             ) 
    );?>

<section class="boshu boshu_flex">
  <h3 class="boshu_head">こちらの記事がおすすめです</h3>
    <div class="boshu_content">
  <!-- サブループを作成渡す配列は上記の内容 -->
  <?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>
              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>

                  <div id="post-<?php the_ID(); ?> boshu-<?php echo $the_query->current_post + 1; ?>" <?php post_class('flex boshu_container'); ?>>
                       
                      <div class="post-thumbnail">
                          <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(''); ?>
                          <?php else: ?>
                              <img src="<?php echo get_template_directory_uri(); ?>" alt="">
                          <?php endif; ?>
                      </div>
                      
                      <span class="boshu_cat">
                        <!-- タームdiary_catの中の$postの中からIDの項目を取り出し,namesの項目だけ -->
                        <?php $term = wp_get_post_terms($post->ID,"diary_cat", array("fields"=>"names") ); ?>
                        <!-- <?php echo $term[0] ; ?> -->
                      </span> 
                      

                      <span class="boshu_date">
                        <time><?php echo get_the_date( 'Y/m/d' ); ?></time>
                      </span>
                       <div class=boshu_title> 
                      <?php the_title( '<h1><a href="'.esc_url( get_permalink() ).'">','</a><h1>' ); ?>
                     <!--  <?php the_content(); ?> -->
                      </div>
                    
                    </div>

      <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
          
                  <p>今のところ何の募集もないのです</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sui.png" alt="">
        
      <?php endif; ?>
   </div>   

</section>




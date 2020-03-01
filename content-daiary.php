<?php  /*
Template Name: Archive-daiary
*/
?>




<div class="daiary-content">
      
        <h3 class="upper_heading flex">この話題に注目</h3>
 
  <div class="daiary_loop flex row"> 
    <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 10,
        'post_type' => 'daiary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(
                                'taxonomy' =>'daiary_cat',
                                'field' => 'slug',
                                'terms' => array('yamasato','umisato','kurasi')
                                    )
                             ) 
    );?>

  <!-- サブループを作成渡す配列は上記の内容 -->
  <?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>
        <?php $pos_c = 1;?>
        <?php  echo '<div class="group-1 flex">'; ?>

    <!-- 

        <?php echo '<?php get_template_part'.'('.'"'.'content'."'".","."'".'boshu'."'".')'.'; ?>';?> -->


              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>
                <?php if ($pos_c === 3){
                  echo '</div>'."\n".'<div class="flex-group flex">'."\n"."<div class=".'"'."group-$pos_c flex".'"'." >";
                } elseif ( $pos_c === 8 ||$pos_c === 9 ) {
                        echo '</div>'."\n"."<div class=".'"'."group-$pos_c flex".'"'." >"; 
                      }; ?>
                  <div class="flex">
                   <?php $term = wp_get_post_terms($post->ID,"daiary_cat", array("fields"=>"ids") ); ?> 
                  <div id="post-<?php the_ID(); ?> info-<?php echo $the_query->current_post + 1; ?>" <?php post_class("cat-$term[0]"); ?>>
                   <!-- タームdaiary_catの中の$postの中からIDの項目を取り出し,namesの項目だけ -->
                        <?php $term = wp_get_post_terms($post->ID,"daiary_cat", array("fields"=>"ids") ); ?>  
                      <!-- <span class="daiary_cat-<?php echo $term[0] ; ?>"></span> --> 
                      

                      <div class="daiary_date flex">
                        <time><?php echo get_the_date( 'Y/m/d' ); ?></time>
                      </div>
                        
                      <?php the_title( '<h1 class="daiary_title clear-fix"><a href="'.esc_url( get_permalink() ).'">','</a></h1>' ); ?>
                      
                      <div class="daiary_content">
                      <?php the_content('...'); ?>
                      </div>
                   </div>   

                      <div class="post-thumbnail">
                          <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(); ?>
                          <?php else: ?>
                              <img src="<?php echo get_template_directory_uri()."/img/dango.png"; ?>" alt="" class="sub_thumbnail">
                          <?php endif; ?>
                      </div>

                      <?php $pos_c++; ?>
                    
                    </div>

      <?php endwhile; ?>
      
      <div class="daiary-icon-single flex">
        <img src="<?php echo get_template_directory_uri()."/img/daiay_cont.png"; ?>" alt="">
        <p>ダイヤリーをもっと見る</p>
      </div>

        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
          
                  <p>まだ投稿はありません</p>
        
      <?php endif; ?>

  </div>

</div>




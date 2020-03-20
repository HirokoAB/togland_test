
   <?php $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1 ;  ?>
  <!-- サブループを作成渡す配列は上記の内容 -->
    <?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>
        
              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>

          <div class="article-container"> 

          <?php if (has_post_thumbnail()): ?>
          
                <?php the_post_thumbnail( '' , array( "class" => "diary-thumbnail col-12","id" => 'diary-thumbnail' ) ); ?>

            <?php else: ?>
<!--                 <img src="<?php echo get_template_directory_uri()."/img/daiay_cont.png"; ?>" alt="" class="card-img">  -->         
            
          <?php endif; ?>



          <?php
            $term = wp_get_post_terms($post->ID,"diary_cat", array("fields"=>"ids") );
            $cat = wp_get_post_terms($post->ID,"diary_cat", array("fields"=>"names") );

           if($term[0] === 13 ){

            $id = $term[1];
            $name = $cat[1];   
          }else{
            $id = $term[0];
            $name = $cat[0];
          } ;?>

          <div>
              <p class="diary_cat-<?php echo $id ?> diary_cat"><?php echo $name ; ?></p>
          </div>

          <div class="lower">
            <div class="lower-upper">
              <div class="diary_title">
                <?php echo mb_substr($post->post_title, 0, 50); ?>
              </div>
            <p class="diary-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('yy.m.d'); ?></p>
            </div>

          <div class="card-text">
            <?php the_content() ;?>
          </div>

          </div>
  
            
          </div>  
        <?php endwhile; ?>

        <?php echo '<div class="text-center">'.paginate_links(array(
                                                                    'total' => $the_query -> max_num_pages
                                                                    )); ?></div>


      
        <?php wp_reset_postdata(); ?> 



      
      			<?php else: ?>
          
                  <p>まだ投稿はありません</p>
        
      <?php endif; ?>



     

	


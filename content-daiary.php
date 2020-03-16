<?php  /*
Template Name: Archive-daiary
*/
?>



 

    <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 6,
        'post_type' => 'daiary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(
                                'taxonomy' =>'daiary_cat',
                                'field' => 'slug',
                                'terms' => array('yamasato','umisato','kurasi','atsumare')
                                    )
                             ) 
    );?>

  <!-- サブループを作成渡す配列は上記の内容 -->
  <?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>
        <?php $pos_c = 1;?>
        <?php  echo '<div class="group-1 row">'; ?>

              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>

                  <?php if ($pos_c === 3 ||$pos_c === 5 ){
                  echo '</div>'."\n"."\n"."<div class=".'"'."group-$pos_c row".'"'." >";
                      }; ?>

        <div class="col-lg-6">
				<div class="card">
          <div class="row no-gutters">
            <div class="card-left col-sm-5">

    						<?php if (has_post_thumbnail()): ?>
    					    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '' , array( 'class' => 'card-img') ); ?></a>
    					    <?php else: ?>

    					        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri()."/img/daiay_cont.png"; ?>" alt="" class="card-img"></a>           
    				<?php endif; ?>
            </div>

            <div class="card-right col-sm-7" >
                  <div class="card-body">
                  <div class="daiary_cat-<?php echo $term[0]  ; ?> title-wrappar">
    					    <?php the_title( '<h5 class="card-title"><a href="'.esc_url( get_permalink() ).'">','</a></h5>' ); ?>
                  </div>

                  <div class="card-text">
                  <?php the_excerpt('...'); ?>
                  </div>
                  <p class="daiary-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('yy.m.d'); ?></p>

    					</div>

    				</div>

      </div>

        <?php $pos_c++; ?>
                    
    </div>
    </div>

<?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
          
                  <p>まだ投稿はありません</p>
        
      <?php endif; ?>
</div>


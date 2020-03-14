<?php  /*
Template Name: Archive-daiary
*/
?>



 
<div class="row"> 
    <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 8,
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


              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>

				<div class="card col-4" >

						<?php if (has_post_thumbnail()): ?>
					    	<?php the_post_thumbnail( '' , array( '','class' => 'card-img-top' ) ); ?>
					    <?php else: ?>

					        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri()."/img/dango.png"; ?>" alt="" class="card-img-top"></a>        
				<?php endif; ?>

        <?php $term = wp_get_post_terms($post->ID,"daiary_cat", array("fields"=>"ids") ); ?>
        <?php $term_n = wp_get_post_terms($post->ID,"daiary_cat", array("fields"=>"names") ); ?>  
        <span class="daiary_cat-<?php echo $term[0] ; ?>"　></span><?php echo $term_n[0]; ?>

				 	<div class="card-body">

              <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
					    <?php the_title( '<h5 class="card-title"><a href="'.esc_url( get_permalink() ).'">','</a></h5>' ); ?>

					    
              <?php the_excerpt(); ?>

					</div>

				</div>

<?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
          
                  <p>まだ投稿はありません</p>
        
      <?php endif; ?>
</div>







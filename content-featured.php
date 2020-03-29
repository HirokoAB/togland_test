<?php  /*
Template Name: Archive-featured
*/
?>

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

<!-- サブループを作成渡す配列は上記の内容 -->
  <?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>


		<?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>    

<div class="col-lg-6">
 <div class="card">

      <?php if (has_post_thumbnail()): ?>
        <div id="wrapper">
          <div>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '' , array( 'class' => 'card-img-top') ); ?></a>
          </div>
      </div>
    	<?php else: ?>
<!-- 
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri()."/img/daiay_cont.png"; ?>" alt="" class="card-img-top"></a> -->
    	
    	<?php endif; ?>


      <div class="card-body">
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

                  <div class="diary_cat-<?php echo $id ?> title-wrappar">

        <?php the_title( '<h5 class="card-title"><a href="'.esc_url( get_permalink() ).'">','</a></h5>' ); ?>
      </div>


        <div class="card-text">
          <?php the_excerpt('...'); ?>
        </div>

        <!-- <p class="diary-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('yy.m.d'); ?></p> -->

      </div>
  </div>
 </div>

   <?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
		

        
      <?php endif; ?>






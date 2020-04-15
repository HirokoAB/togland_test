 <?php $args =  array(
        'posts_per_page' => 32,
        'post_type' => 'diary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(

                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                'terms' => array('satoumi','satoyama','kurasi','atsumare','kikaku'),

                                    )
                             ) 
    );?>

    
<?php $post_array = Array(); ?>
<?php $the_query = new WP_Query($args); ?>
     <!-- ここから記事取得のルサブループ -->
      <?php if( $the_query->have_posts() ): ?>
        
              <?php while ( $the_query->have_posts()) : ?>
                <?php $the_query->the_post();?>

                <?php 
                $ids = get_the_ID();       
                array_push( $post_array , $ids ); 
                ; ?>

                 <?php endwhile; ?>

               <?php endif; ?>
      <?php wp_reset_postdata(); ?> 



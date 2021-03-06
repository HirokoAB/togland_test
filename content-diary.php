<?php  /*
Template Name:Content-diary
*/
?>

  <?php include('loop_ids.php'); ?>



    <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 8,
        'post_type' => 'diary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                'terms' => array('satoumi','satoyama','kurasi','atsumare','kikaku')
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



              <?php 
                $answer = array_search( get_the_ID(), $post_array );

                if( floor ( $answer / 8 ) == 0 ){

                      $pagenum_link = '';
                      
                      }else{
                        $pagenum = floor( $answer / 8 ) + 1 .'/';
                        $pagenum = '/page/'. $pagenum;

                      }
                
                ?>


                  <?php if ($pos_c % 2 !== 0 ){
                  echo '</div>'."\n"."\n"."<div class=".'"'."group-$pos_c row".'"'." >";
                      }; ?>

        <div class="col-sm-6 col-6 diary-box">
				<!-- <div class="card"> -->
          <div class="row no-gutters">
            <div class="card-left col-sm-5">

    						<?php if (has_post_thumbnail()): ?>
                  <div id="wrapper">
                    <div class="filter">
    					    	<a href="<?php echo esc_url( home_url( '/' ). $pagenum .'diary' ); ?>#post-<?php the_ID(); ?>">

                      <?php the_post_thumbnail( '' , array( 'class' => 'card-img') ); ?></a>
                    
                    </div>
                  </div>
    					    <?php else: ?>

    					        <!-- <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri()."/img/daiay_cont.png"; ?>" alt="" class="card-img"></a> -->           
    				<?php endif; ?>
            </div>

            <a href="<?php echo esc_url( home_url( '/' ).'diary' ); ?>#post-<?php the_ID(); ?>"></a>

            <div class="card-right col-sm-7" >
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

                  <a href="<?php echo esc_url( home_url( '/' ).'diary' ); ?>#post-<?php the_ID(); ?>"><div class="diary_cat-<?php echo $id ?> title-wrappar">
                    
    					    <?php the_title( '<h5 class="card-title">','</h5>' ); ?>
                  </div>
                </a>

                  <div class="card-text">
                  <?php the_excerpt('...'); ?>
                  <p class="diary-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('yy.m.d'); ?></p>
                  </div>


                 

    					</div>

    				</div>

      </div>

        <?php $pos_c++; ?>
                    
    <!-- </div> -->
    </div>

<?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>    
      
      <?php else: ?>
          
                  <p>まだ投稿はありません</p>
        
      <?php endif; ?>
</div>


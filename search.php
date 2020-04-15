<!-- search.php 抜粋 -->
<?php get_header(); ?>

<?php
include('loop_ids.php');
?>




<div id="contents"　class="search_container" style="margin-top:110px;"> 
 

        
        <!-- 検索ワードを出力 -->
        <div class="row">
       
        <h2 class="subtitle title offset-lg-2">検索結果：<?php the_search_query(); ?></h2>
    </div>

        </div>

        

        <?php if(have_posts()): ?>

         
        <?php while(have_posts()): the_post(); ?>
        
        <div class="search_results row align-items-start">
            <div class="col-lg-1 col-md-2 offset-lg-2">
                <p class="diary-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('yy.m.d'); ?></p>

        </div>

<div class="col-md-8">


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
        <a id="post-<?php the_ID(); ?>"class="diary_cat-<?php echo $id ?>"></a>
     </div>

    <h3><a href="<?php echo esc_url( home_url( '/' ).'diary' ); ?>#post-<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
    <div class="excerpt">
    <?php the_excerpt(); ?>
    <p><a href="<?php echo esc_url( home_url( '/' ).'diary'. $pagenum ); ?>#post-<?php the_ID(); ?>">続きを読む</a></p>

    </div>
</div>

</div><!-- end of .excerpt -->
<?php endwhile; ?>



 <?php echo '<div class="text-center">'.paginate_links(); ?>

 <div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ).'diary' ); ?>">
    <p>戻る</p>
  </a>
</div>




 
<!-- 検索ワードに該当する記事がない場合の処理-->
<?php else: ?>
<!-- 検索ワードを出力-->
<div class="search_results row justify-content-center flex-column align-items-center">
  <div class="col-md-6">
<h2 class="not_found">該当の記事が見つかりませんでした</h2>
</div>
<div class="col-md-4"> 
<p class="mg-0 research">再検索</p>
<?php get_search_form(); ?>
</div>

<div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ).'diary' ); ?>">
    <p>戻る</p>
  </a>
</div>


<?php endif;  ?>
</div><!-- end of .search_results -->



<div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p>HOME</p>
  </a>
</div>


</div><!-- end of #content --> 

<?php get_footer(); ?>







































    
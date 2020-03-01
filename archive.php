<?php  /*
Template Name: Archive
*/
?>

<?php get_header(); ?>
<!-- サブクエリに渡す配列を作成 -->
  <!-- <?php $args =  array( 
      'posts_per_page' =>,
      'post_type' =>,
  );?> -->


<!-- サブループを作成渡す配列は上記の内容 -->
<?php $the_query = new WP_Query($args); ?>



<!-- ここから記事取得のルサブループ -->
<?php if( $the_query->have_posts() ): ?>
  <?php while ( $the_query->have_posts()) : ?>
    <?php $the_query->the_post();?>

    <!-- ここに処理を書く -->

  <?php endwhile; ?>

  
  <!-- ループの処理をメインと同じ内容に戻す -->
  <?php wp_reset_postdata(); ?>    
    
  <?php else: ?>

    <!-- 　投稿がない場合の処理 -->    
    <p>まだ投稿はありません</p>
      
<?php endif; ?>





<?php get_footer(); ?> 

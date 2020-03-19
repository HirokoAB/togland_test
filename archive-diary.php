<?php  /*
Template Name: 
Archive-diary
*/
?>


<?php get_header(); ?>
<div class="row">



<div class="main archive-diary-container col-9">

<?php $args =  array( 
        'posts_per_page' =>10,
        'post_type' => 'diary',
        'order' => 'DESC',
        "paged" => $paged,
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                 'terms' => array('satoumi','satoyama','kurasi','atsumare')
                                    )
                             ) 
    );?>


<?php
include('loop-diary.php');
?>



</div>



<div class="side col-2">

  <?php the_post(); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    
    <?php get_search_form(); ?>
    
    <h2>月別アーカイブ:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
    
    <h2>カテゴリー別アーカイブ:</h2>
    <ul>
       <?php wp_list_categories(array(
    'taxonomy' => 'diary_cat', // タクソノミーの指定
    'title_li' => '', // リストの外側に表示されるタイトルを非表示
  )); ?>
    </ul> 
</div>













  








</div><!-- endofpage -->
    


<?php get_footer(); ?> 



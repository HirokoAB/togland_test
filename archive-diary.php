<?php  /*
Template Name: 
Archive-diary
*/
?>


<?php get_header(); ?>
<div class="row">



<div class="main archive-diary-container col-lg-7 ml-auto">

<?php $args =  array( 
        'posts_per_page' =>8,
        'post_type' => 'diary',
        'order' => 'DESC',
        "paged" => $paged,
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                 'terms' => array('satoumi','satoyama','kurasi','atsumare','kikaku')
                                    )
                             ) 
    );?>

<?php
include('loop-diary.php');
?>


</div>



<div class="side col-lg-2 offset-lg-1">


  <!--  <?php the_post(); ?> -->

    <div class="bk_g">  
    <?php get_search_form(); ?>
    </div>
    
   <!--  <h6>カテゴリー別</h6>
    <ul> -->
       <!-- <?php wp_list_categories(array(
    'taxonomy' => 'diary_cat', // タクソノミーの指定
    'title_li' => '', // リストの外側に表示されるタイトルを非表示
  )); ?> -->
    </ul> 
</div>


</div>




<!-- endofpage -->
    


<?php get_footer(); ?> 



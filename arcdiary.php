<?php  /*
Template Name: ive-diary
*/
?>


<?php get_header(); ?>

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

<?php if(is_page()){

  echo'固定ページ';

}else if( is_post()){

  echo'ちがう';
}

   ?>





<?php get_footer(); ?> 



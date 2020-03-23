 <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 6,
        'post_type' => 'diary',
        'order' => 'DESC',
        "paged" => $paged,
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                'terms' => array('boshu')
                                    )
                             ) 
    );?>

<?php
include('loop-diary.php');
?>

 <!-- サブクエリに渡す配列を作成 -->
    <?php $args =  array( 
        'posts_per_page' => 10,
        'post_type' => 'diary',
        'order' => 'DESC',
        'tax_query' => array(
                              array(
                                'taxonomy' =>'diary_cat',
                                'field' => 'slug',
                                'terms' => array('kurasi')
                                    )
                             ) 
    );?>

<?php
include('loop-diary.php');
?>

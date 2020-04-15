<?php get_header(); ?>

<?php
include('loop-diary.php');
?>

<?php
$terms = get_terms('atsumare');
var_dump($terms);

foreach ( $terms as $term ) {
echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
}

 // 現在使用しているテンプレートファイル名を表示
  global $template; // テンプレートファイルのパスを取得
  $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
  echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示

?>


<?php get_footer(); ?>
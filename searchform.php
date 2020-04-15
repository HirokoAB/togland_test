
<!-- searchform.php -->


<form method="get" action="<?php echo home_url('/'); ?>" class="search-form">
<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
  <input type="hidden" value="post" name="post_type" id="post_type">
<input class="search_img"type="image" src="<?php echo get_template_directory_uri(); ?>/img/search-icon.svg" alt="検索ボタン" />
</form>



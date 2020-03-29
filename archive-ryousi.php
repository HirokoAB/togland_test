<?php  
/*
Template Name: Archive-ryousi
*/
?>
<?php  get_header();?>


<div class="fisherman_container container">
  <div class="row">
    <ul class="photo_box col-8">
      <div class="row no-gutters">
    
    <?php
include('loop-fisherman.php');
?>
    </ul>
    
    <div class="disdription_box col-4">
      <h2 class="fisherman_title title sub_titile">
        漁師名鑑
      </h2>
      <p>
        戸倉地区の海の恵みを支える漁師の皆さん。豊穣の海は彼らに支えられています。
        クリックすると画像が拡大します。漁師さんについてのインタビューも必読。
      </p>
      <div class="page_nation">
        <p class=""><b><a href="">フェノロジーカレンダーへ</a></b></p>
      </div>
    </div>
  </div>
</div>

<?php  get_footer();?>
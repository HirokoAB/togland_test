<?php  
/*
Template Name: Archive-ryousi
*/
?>
<?php  get_header();?>


<div class="fisherman_container container">
  <div class="row">

  <?php if(wp_is_mobile()): ?>

      <div class="disdription_box col-md-4">
      <h2 class="fisherman_title title sub_titile">
        漁師名鑑
      </h2>
      <p>
        戸倉地区の豊穣の海を支える漁師の皆さんに、インタビューをしてみました。どんな漁業を営んでいますか？好きな食べ物は？など。クリックすると詳細画面に遷移します。是非チェックしてみてください。(順不同)
      </p>
      <!-- <div class="page_nation">
        <p class=""><b><a href="">フェノロジーカレンダーへ</a></b></p>
      </div> -->
    </div>

    <ul class="photo_box">
      <div class="row no-gutters">


    
    <?php
include('loop-fisherman.php');
?>
    </ul>


    <?php else :?>

    <ul class="photo_box col-md-8">
      <div class="row no-gutters">
    
    <?php
include('loop-fisherman.php');
?>
    </ul>
    
    <div class="disdription_box col-md-4">
      <h2 class="fisherman_title title sub_titile">
        漁師名鑑
      </h2>
      <p>
        戸倉地区の海の恵みを支える漁師の皆さん。豊穣の海は彼らに支えられています。
        クリックすると詳細ページへ遷移します。
      </p>
      <div class="page_nation">
        <p class=""><b><a href="">フェノロジーカレンダーへ</a></b></p>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>

<?php  get_footer();?>
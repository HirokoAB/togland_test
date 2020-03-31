
<?php  
/*
Template Name: page-Phenology
*/
?>


<?php  get_header();?>




<section class="phenology_container container">
  <div class="phenology_container container">
  <div class="row">
    <div class="photo_box col-8">
      

      <a href="<?php echo get_template_directory_uri(); ?>/img/phenorogie_2.jpg" data-lightbox="test" data-title="クリックすると表示される画像"/>
      <img class=""src="<?php echo get_template_directory_uri(); ?>/img/phenorogie_2.jpg" alt="フェノロジーカレンダー2枚目">
      </a>

      <a href="<?php echo get_template_directory_uri(); ?>/img/phenorogie.jpg" data-lightbox="test" data-title="クリックすると表示される画像"/>
      <img class=""src="<?php echo get_template_directory_uri(); ?>/img/phenorogie.jpg" alt="フェノロジーカレンダー">
      </a>
      
    </div>


    
    <div class="disdription_box col-4">
      <h2 class="phenology_title title sub_titile">
        フェノロジーカレンダー
      </h2>
      <p>
  地域の自然と人の営みを表した生活四季歴です。自然と人の営みの繋がりををひと目で見ていただけます。
      </p>
      <div class="link-to-home">
        <p class=""><b><a href="">フェノロジーカレンダーへ</a></b></p>
      </div>
    </div>
  </div>
</div>

<div class="link-to-home">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p>HOME</p>
  </a>
</div>

</section>

<a href="common/images/photo01.jpg" data-lightbox="sample" data-title="サンプル画像01"/>
<img src="common/images/thumb01.jpg" alt="">
</a>
    
    
    

<?php  get_footer();?>
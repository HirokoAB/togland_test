
<?php  
/*
Template Name: page-Phenology
*/
?>


<?php  get_header();?>




<section class="phenology_container container">
  <div class="phenology_container container">
  <div class="row">
    <h2 class="phenology_title title sub_titile">
        戸倉 里海・里山カレンダー
      </h2>
      <p>
  戸倉地区の自然と人の営みを表した生活季節暦です。縦の列がひと月を表しており、横の行が漁業や林業などの年間の作業、祭事の実施時期や渡り鳥たちの飛来時期を表しています。ほんものがB１サイズなので、大きすぎてこのWEBでは細かいことろまでは見られません。南三陸・海のビジターセンターに展示していますのでぜひ見におこしください。
      </p>


    <div class="photo_box col-md-6">
      

      <a href="<?php echo get_template_directory_uri(); ?>/img/phenorogie_s.jpg" data-lightbox="test" data-title="戸倉地区の生活季節歴　1枚目"/>
      <img class=""src="<?php echo get_template_directory_uri(); ?>/img/phenorogie_s.jpg" alt="フェノロジーカレンダー2枚目">
      </a>
    </div>
  
    <div class="photo_box col-md-6">
      <a href="<?php echo get_template_directory_uri(); ?>/img/phenorogie_1_s.jpg" data-lightbox="test" data-title="戸倉地区の生活季節歴　2枚目"/>
      <img class=""src="<?php echo get_template_directory_uri(); ?>/img/phenorogie_1_s.jpg" alt="フェノロジーカレンダー">
      </a>
      
    </div>
  </div>
  </div>

    <div class="link-to-home">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <p>HOME</p>
      </a>
    </div>

</section>


<?php  get_footer();?>
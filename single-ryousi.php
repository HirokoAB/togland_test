<?php  
/*
Template Name: sigle-fisherman
*/
?>

<?php get_header(); ?>



   <div class="row single_fish">
   <div class="col-md-7 fm_img">
      <img src="<?php echo $cfs->get( 'ryousi_img' ); ?>" alt=""/>
    </div>

    <dl class="col-md-5">


      <dt>お名前</dt><dd class="fm_name"><?php echo $cfs->get( 'ryousi_name' ) ?></dd>      
      <dt>生年月日</dt><dd class="fm_birth"><?php echo date( 'Y年 m月 d日',strtotime($cfs->get ('ryousi_birth'))  ) ?></dd>
      <dt>趣味</dt><dd class="fm_fav"><?php echo $cfs->get( 'ryousi_fav' ) ?></dd>
      <dt>漁師歴</dt><dd class="fm_ex"><?php echo $cfs->get( 'ryousi_year_of_ex' ) ?>年</dd>
      <dt>好きな食べ物</dt><dd class="fm_food"><?php echo $cfs->get( 'ryousi_food' ) ?></dd>
      <dt>船の名前</dt><dd class="fm_ship"><?php echo $cfs->get( 'ryousi_ship' ) ?></dd>
      <dt>漁獲方法</dt><dd class="fm_method"><?php echo $cfs->get( 'ryousi_f_method' ) ?></dd>
      <dt>主な漁獲物・生産物</dt><dd class="fm_catch"><?php $fishes = $cfs->get( 'ryousi_catch' );
                                        foreach ( $fishes as $fish ){
                                         echo '<dd>'. $fish . '</dd>'
                                                                  ; } ?>
      <dt>漁師になったきっかけ</dt><dd class="fm_inspire"><?php echo $cfs->get( 'ryousi_inspire' ) ?></dd>
      <dt>漁師以外にやってみたい職業</dt><dd class="fm_job"><?php echo $cfs->get( 'ryousi_another_job' ) ?></dd>
      <dt>今までで1番ヤバいと思ったこと</dt><dd class="fm_crisis"><?php echo $cfs->get( 'ryousi_crisis' ) ?></dd>
      <dt>今までで1番うれしかったこと</dt><dd class="fm_happy"><?php echo $cfs->get( 'ryousi_happy' ) ?></dd>
      <dt>最近ドキドキワクワクしたこと</dt><dd class="fm_excite"><?php echo $cfs->get( 'ryousi_excite' ) ?></dt>
      <dt>漁師になってよかったと思うこと</dt><dd class="fm_good"><?php echo $cfs->get( 'ryousi_good' ) ?></dd>
      <dt>漁師になって辛いと思うこと</dt><dd class="fm_hard"><?php echo $cfs->get( 'ryousi_hard' ) ?></dd>
      <dt>最後に・・・海は好きですか？</dt><dd class="fm_sea"><?php echo $cfs->get( 'ryousi_sea' ) ?></dd>
  <dl>

        

	</div>


  <div class="text-center nav-box nav-upper">
    <span class="pre_text" >
      <?php previous_post_link('%link','前へ'); ?>
    </span>
    <span class="next_text">  
          <?php next_post_link('%link','次へ'); ?>
    </span>
  </div>

                    





<?php  get_footer();?>




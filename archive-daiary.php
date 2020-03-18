<?php get_header(); ?> 

<?php  /*
Template Name: Archive-daiary
*/
?>



							<!-- 情報整理のためタブを挿入 -->

							<!-- 上部タブのリスト -->

							<!-- 4個分のタブ -->
						  <ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a href="#all-archive" class="nav-link active" data-toggle="tab">すべてのダイアリー</a>
						    </li>
						    <li class="nav-item">
						      <a href="#umisato-archive" class="nav-link" data-toggle="tab">里海ダイアリー</a>
						    </li>
						    <li class="nav-item">
						      <a href="#satoyama-archive" class="nav-link" data-toggle="tab">里山ダイアリー</a>
						    </li>
						    <li class="nav-item">
						      <a href="#photo4" class="nav-link" data-toggle="tab">タブ4</a>
						    </li>
						  </ul>

						  <!-- 写真部分 -->
						  <div class="tab-content">

						    <div id=all-archive class="diary-content-1 tab-pane active">
						      <?php get_template_part('content','daiary'); ?>
						    </div>
						    <div id="umisato-archive" class="diary-content-1 tab-pane">
						    	<?php get_template_part('content','featured'); ?> 
						    </div>
						    <div id="photo3" class="diary-content-1 tab-pane">

						    </div>
						    <div id="photo4" class="tab-pane">
						      <!-- <img src="images/photo4.jpg" class="img-fluid" alt=""/> -->
						    </div>
						  </div>

<?php get_footer(); ?> 



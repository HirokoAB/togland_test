</div><!-- メインコンテンツ最下部のdivタグ -->
<footer>
	<div class="footer_container  container">

			<!-- <div class=""> -->
			<div class="footer_upper row">

					<div class="footer_logo"><h1>TOGURA NATUREPARK TIMES</h1></div>
						<div class="sns_box">
							<p>シェアはこちらから</p>
							<div class="sns_logo">
							<div class="fb_share" data-href="https://togland.jp/">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftogland.jp%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="<?php echo get_template_directory_uri().'/img/f_logo_RGB-Blue_58.png' ;?>" alt=""></a></div>
  							<div>
							<a href="https://twitter.com/share?url=https://togland.jp" target="_blank"><img class="twitter_img" src="<?php echo get_template_directory_uri().'/img/Twitter_Social_Icon_Circle_Color.png' ;?>" alt=""></a>
						</div>
						</div>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							
						</div>

		</div>

			<menu class="footer_menu row">
				<div class="col-md-5 col-md-offset-2 offset-md-2 row">
					<div class="col-6">
				<li class="">
					<p><a class=font_origin  href="<?php echo get_permalink(  );?>">戸倉ネイチャーパークとは</a></p>

				</li>

				
				<li>
					<p>▼NatureParkDiary</p>
					<menu>
						<li><a href="<?php echo get_permalink( diary );?>" >ダイアリー一覧</a></li>
<!-- 						<li><a href="">海里ダイアリー</a></li>
						<li><a href="">山里ダイアリー</a></li>
						<li><a href="">暮らしのダイアリー</a></li>
						<li><a href="">こんな体験、あんな企画</a></li>
						<li><a href="">募集あれこれ</a></li> -->
					</menu>
				</li>
				</div>

				<div class="col-6">
				<li class="">
					<p>▼ネイチャーパークの魅力</p>
					<menu>
						<li><a href="<?php echo esc_url( home_url() )."/phenology"; ?>">戸倉里海里山カレンダー</a></li>
						<li><!-- <a href="<?php echo esc_url( home_url() )."/ryousi"; ?>"> -->漁師名鑑<!-- </a> --></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/img/togurakkomap.pdf">戸倉っこマップ</a></li>
					</menu>
				</li>


				<li>
					<a href="<?php echo get_permalink( ACCESS );?>" ><p>▼ネイチャーパークを訪れる</p></a>
					<menu>
						<li><a href="<?php echo get_template_directory_uri(); ?>/img/koccha.pdf" target="_blank">こっちゃもよらいんでば</a></li>
					</menu>
				</li>
			</div>
			</div>
			<div class="col-md-3">
				<li>
					<p>お問い合わせ先</p>
					<menu>
					<li>南三陸・海のビジターセンター</li>
					<li>〒986-0781<br>宮城県本吉郡南三陸町戸倉字坂本21-1</li>
					<li>center@kawatouminovisitorcenter.jp</li>
					<li><a href="tel:0226-25-7622">電話：0226-25-7622</a></li>
				</menu>
				</li>
			</div>
				
			</menu>

		</div>
		
		
	</div>
	
</footer>
</div>
<?php wp_footer(); ?>	
</body>
</html>
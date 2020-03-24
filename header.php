<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/teh8fnv.css">
	
	
<?php wp_head(); ?>
	<title>遊びがまなびに変わる場所戸倉ネイチャーパークWEBサイト</title>
</head>

<body>
	<header>
		
		<?php if(wp_is_mobile() ): ?>

		<div class="mobile_header_container">
			<h2 class="main_sub_title">住んでよし訪れてよしの戸倉地区WEB新聞</h2>
			<div class="header_image"><h1 class="mobile_main_title">
				TOGURA NATURE PARK TIMES
			</h1></div>
<div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <?php wp_nav_menu( array(
      								'container' => false,
      								) ); ?>
      
 </div>
			

			
		</div>





			<?php else :?>



	<div class="header_container">
		<div class="">	
		<div class="header-right">
			<?php 
			$date = new DateTime('now');
			echo $date->format('Y年m月d日'); ?>
		</div>	
		 <h3 class="main_sub_title">住んでよし訪れてよしの戸倉地区WEB新聞</h3>			
	    <div class="main_title"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/tg-np-logo.svg" usemap="" alt="" /></div>
	    <?php wp_nav_menu( $args ); ?>
    </div>
    </div>
<?php endif; ?>
	</header>
<div class="np-container container" data-w-ff="1100"> 		


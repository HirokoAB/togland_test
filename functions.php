<?php  


////////////////////////////////////////////////////////////////////////
///////////////////////////JS・CSSの読み込み設定////////////////////////////
////////////////////////////////////////////////////////////////////////


// JSファイルのエンキュー///

function myscripts(){
		wp_enqueue_script( 'jquery.min.js','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1', true);
		wp_enqueue_script( 'popper.js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',array(),'1.14.7', true );
		wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js', array('popper.js'), '1.0.0', true );
		wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js',array(),
    		false,
    		true );

	if(is_home() || is_post_type_archive( 'outdoor')){
			wp_enqueue_script( 'jquery-1.10.2.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery-1.10.2.min.js',array(),
    		false,
    		true);
    		wp_enqueue_script( 'jquery.yycountdown.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery.yycountdown.min.js',array(),
    		false,
    		true);
			wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/lib/assets/js/owl.carousel.js',array(),
    		false,
    		true);
			wp_enqueue_script( 'owl.app.js', get_template_directory_uri() . '/lib/assets/js/owl.app.js',array(),
    		false,
    		true);


	}elseif(is_post_type_archive( 'diary' )){
			// wp_enqueue_script( 'jquery.min.js',get_template_directory_uri	().'/lib/assets/js/jquery.min.js');
			wp_enqueue_script( 'diary.js',get_template_directory_uri() . '/js/diary.js',
			array(),
    		false,
    		true
   			 );
	}elseif(is_page('228')){

			wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/lib/assets/js/owl.carousel.js',array(),
    		false,
    		true);
    		wp_enqueue_script( 'about.js', get_template_directory_uri() . '/js/about.js',array(),
    		false,
    		true);
    }elseif(is_page('399')){

			wp_enqueue_script( 'jq', "https://code.jquery.com/jquery-1.12.4.min.js",array(),
    		false,
    		true);
    		wp_enqueue_script( 'lightbox.js', "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js",array(),
    		false,
    		true);
    		
	// }elseif(is_page( 277 )){
	// 		// wp_enqueue_script( 'jquery.min.js',get_template_directory_uri	().'/lib/assets/js/jquery.min.js');
	// 		wp_enqueue_script( 'fisherman.js',get_template_directory_uri() . '/js/fisherman.js',
	// 		array(),
 //    		false,
 //    		true
 //   			 );
}};
add_action( 'wp_enqueue_scripts' , 'myscripts' );



// CSSファイルのエンキュー///


function mystyle(){

	
			wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
			wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css' );
			wp_enqueue_style( 'header.css', get_template_directory_uri() . '/css/header.css' );
			wp_enqueue_style( 'footer.css', get_template_directory_uri() . '/css/footer.css' );
			wp_enqueue_style( '404.css', get_template_directory_uri() . '/css/404.css' );

	if(is_home() || is_page( 14 ) || is_singular('outdoor')) {
			wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css' );
			wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css' );
			wp_enqueue_style( 'outdoor_style.css', get_template_directory_uri() . '/css/outdoor_style.css', array(), '1.0.3' );
	}elseif(is_post_type_archive('diary')){
			wp_enqueue_style( 'archive-diary.css',get_template_directory_uri() . '/css/archive-diary.css' );
	}elseif(is_page('192')){
			wp_enqueue_style( 'content.css',get_template_directory_uri() . '/css/content.css' );
	}elseif(is_page('196')){
			wp_enqueue_style( 'content.css',get_template_directory_uri() . '/css/page-issue.css' );			
	}elseif(is_front_page ()){
		   wp_enqueue_style( 'index_style.css',get_template_directory_uri() . '/css/index_style.css' );
		   wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css' );
		   wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css' );
		   wp_enqueue_style( 'diary.css',get_template_directory_uri() . '/css/diary.css' );
	}elseif(is_singular('diary')){
			wp_enqueue_style( 'single-diary.css',get_template_directory_uri() . '/css/single-diary.css' );

	}elseif(is_post_type_archive('ryousi')){
			wp_enqueue_style( 'fisherman.css',get_template_directory_uri() . '/css/fisherman.css' );
	}elseif(is_singular('ryousi')){
			wp_enqueue_style( 'single_fisherman.css',get_template_directory_uri() . '/css/single_fisherman.css' );
	}elseif(is_page('228')){
			wp_enqueue_style( 'about.css',get_template_directory_uri() . '/css/about.css' );
			wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css' );
			wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css' );
			wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/css/animate.css' );

	}elseif(is_page('226')){
			wp_enqueue_style( 'contact.css',get_template_directory_uri() . '/css/contact.css' );
	}elseif(is_page('399')){
			wp_enqueue_style( 'lightbox.css',get_template_directory_uri() . '/css/phenorogie.css'  );
			wp_enqueue_style( 'phenorogie.css','https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css' );
	}elseif(is_page('232')){
			wp_enqueue_style( 'access.css',get_template_directory_uri() . '/css/access.css' );	
	}elseif(is_search()){
			wp_enqueue_style( 'search.css',get_template_directory_uri() . '/css/search.css' );
	}else{
		var_dump('なんか違うみたいです!!');
	}
};
add_action( 'wp_enqueue_scripts' , 'mystyle' );


////////////////////////////////////////////////////////////////////////
//////////////////カスタム投稿タイプのアウトドアに関する記述/////////////////////
////////////////////////////////////////////////////////////////////////

function create_post_type() {
	register_post_type( 'outdoor', // 投稿タイプ名の定義
	array(
		'labels' => array(
		'name' => __( "アウトドア", "custom-post-type-ui"  ), // 表示する投稿タイプ名
		'singular_name' => __( 'アウトドア' ),
		'all_items' => __( "アウトドア一覧", "custom-post-type-ui" ),
		),
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'public' => true,
		'menu_position' => 6,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'outdoor_ivent' ),
		)
	);
}
	add_action( 'init', 'create_post_type' );



//////////////////////////////////////////
////////カスタム投稿タイプに関する記述//////////
/////////////////////////////////////////


function create_pts_diary() {

	/**
	 * Post Type: ダイアリー.
	 */

	register_post_type( "diary", array(
		"label" =>"ダイアリー",
		"labels" => array(
							"name" => "ダイアリー", 
							"singular_name" =>  "ダイアリー",
							"all_items" =>  "ダイアリー一覧",
							"add_new" => "ダイアリーの追加",
							"edit_item" =>"ダイアリーの編集"
						),
		"discription" => "ダイアリーを投稿するためのオリジナル投稿タイプ",
		"delete_with_user" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"menu_position" => 5,
		"has_archive" => true,
		"public" => true,
		"publicly_queryable" => true,
		"query_var" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,		
		"show_in_rest" => true,
		"supports" => array( "title", "editor", "thumbnail","page-attributes","author","excerpt" ),
		"taxonomies" => array("diary_cat")
		)
	);

	register_taxonomy(
		"diary_cat",
		"diary",
		array(
				"label" => "ダイアリーのカテゴリー",
				"labels" => array(
									"popular_items" => "よく使うカテゴリー",
									"edit_item" => "カテゴリを編集",
									"add_new_item" => "カテゴリを追加",
								 ),
				"public" => true,
				"publicly_queryable" => true,
				"hierarchical" => true,
				"show_ui" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"query_var" => true,
				"show_admin_column" => true,
				"show_in_rest" => true,
				"rest_base" => "diary_cat",
				"show_in_quick_edit" => false,
		)
	);
add_rewrite_rule('diary/([^/]+)/?$', 'index.php?diary_cat=$matches[1]', 'top');

}
add_action( 'init', 'create_pts_diary');


//漁師名鑑の表示順序を変更する記述

function twpp_change_sort_order( $query ) {

	if ( is_admin() ||  $query->is_main_query() ) {

    return;
  }
  if ( $query->is_post_type_archive('ryousi') ) {


  	 $query->set( 'order', 'ASC' );
     $query->set( 'orderby', 'date' );

  }
}
add_action( 'pre_get_posts', 'twpp_change_sort_order' );


// 	function cptui_register_my_cpts_slider() {

// 	/**
// 	 * Post Type: スライダー画像の新規投稿.
// 	 */

// 	$labels = array(
// 		"name" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
// 		"singular_name" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
// 		"menu_name" => __( "画像変更", "custom-post-type-ui" ),
// 		"all_items" => __( "スライダー一覧", "custom-post-type-ui" ),
// 		"add_new_item" => __( "スライダー新規追加", "custom-post-type-ui" ),
// 		"new_item" => __( "新規スライダー", "custom-post-type-ui" ),
// 		"view_item" => __( "一覧を表示", "custom-post-type-ui" ),
// 		"search_items" => __( "スライダー投稿画像の検索", "custom-post-type-ui" ),
// 		"not_found" => __( "画像の投稿はまだありません", "custom-post-type-ui" ),
// 		"not_found_in_trash" => __( "ゴミ箱内には何もありません", "custom-post-type-ui" ),
// 	);

// 	$args = array(
// 		"label" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
// 		"labels" => $labels,
// 		"description" => "TOP画面のスライダー画像を変更するためのUI",
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"show_ui" => true,
// 		"delete_with_user" => false,
// 		"show_in_rest" => true,
// 		"rest_base" => "",
// 		"rest_controller_class" => "WP_REST_Posts_Controller",
// 		"has_archive" => true,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"exclude_from_search" => false,
// 		"capability_type" => "post",
// 		"map_meta_cap" => true,
// 		"hierarchical" => false,
// 		"rewrite" => array( "slug" => "slider", "with_front" => true ),
// 		"query_var" => true,
// 		"supports" => array( "title", "revisions","thumbnail","editor" ),
// 	);

// 	register_post_type( "slider", $args );
// }

// add_action( 'init', 'cptui_register_my_cpts_slider' );





//////////////////サムネイルに関する記述//////////////////////////////////

   	

add_theme_support('post-thumbnails');
add_image_size('top-thumbnail', 400, 700);



//thumbnailに付くクラスを削除する	
// function image_tag_delete( $html ){
// $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
// $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
// $html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
// $html = preg_replace( '/<a href=".+">/', '', $html );
// $html = preg_replace( '/<\/a>/', '', $html );
// return $html;
// }
// add_filter( 'image_send_to_editor', 'image_tag_delete', 10 );
// add_filter( 'post_thumbnail_html', 'image_tag_delete', 10 );


/////////////////読み込まれる画像のサイズを指定///////////////////////////////

function resize_at_upload( $file ) {
 
	if ( $file['type'] == 'image/jpeg' OR $file['type'] == 'image/gif' OR $file['type'] == 'image/png') {
 
		$w =700;
		$h = 0;
 
		$image = wp_get_image_editor( $file['file'] );
 
		if ( ! is_wp_error( $image ) ){
			$size = getimagesize( $file['file'] );
 
			if ( $size[0] > $w || $size[1] > $h ){
				$image->resize( $w, $h, false );
				$final_image = $image->save( $file['file'] );
			}
		}
	}
 
	return $file;
 
}
 
add_action( 'wp_handle_upload', 'resize_at_upload' );



//本文中の画像切り取りのためにクラスを付与///
add_filter('get_image_tag_class', function($class){
  return $class . ' to_wrap';
});



/////////////////タイトルに表示される文字数の設定//////////////////////////////////


add_filter('the_title', 'my_the_title', 10, 2);
function my_the_title($title, $id) {
    $title = mb_strimwidth($title, 0, 40, "…","UTF-8");
    return $title;
}



/////////////////抜粋に表示される文字数の設定//////////////////////////////////

function twpp_change_excerpt_length( $length ) {
  $length = 69;

  if ( is_category('diary') || is_tax('diary') ) {
    $length = 27;
  } 

  return $length; 
}

add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );


////////////////////////moreタグの設定////////////////////////////////////
function new_excerpt_more($more){
    global $post;
    return ' ...';
}
add_filter('excerpt_more','new_excerpt_more',9999);




//カスタム投稿のタクソノミーとタームをURLに反映させる
// function myUrlRewrite($rules){
// $myRule = array();
// $myRule['tpdiary/([^/]+)/?$'] = 'index.php?diary_cat[1]';
// $myRule['tpdiary/([^/]+)/([^/]+)?$'] = 'index.php?diary_cat[2]';
// return array_merge( $myRule, $rules );
// }
// add_action('rewrite_rules_array', 'myUrlRewrite' );

// function myPostTypeLink($link, $post ) {
// if ( $post->post_type == 'diary' ) {
// if ( $cats = get_the_terms( $post->ID, 'tpdiary' ) ) {	
// $link = str_replace( '%tpdiary%', current( $cats )->slug, $link );
// }
// }
// return $link;
// }
// add_filter('post_type_link', 'myPostTypeLink', 10, 2 );
// add_filter('post_link', 'myPostTypeLink', 10, 2 );




//カテゴリーの選択を1つに制限

//コードはネット参照
//うまく動作していないのでもう一度確認が必要
add_action( 'admin_print_footer_scripts', 'limit_category_select' );
function limit_category_select() {
;?>
	<script type="text/javascript">
		jQuery(function($) {
			// 投稿画面のカテゴリー選択を制限
			var categorydiv = $( '#categorydiv input[type=checkbox]' );
			categorydiv.click( function() {
				$(this).parents( '#categorydiv' ).find( 'input[type=checkbox]' ).attr('checked', false);
				$(this).attr( 'checked', true );
			});
			// クイック編集のカテゴリー選択を制限
			var inline_edit_col_center = $( '.inline-edit-col-center input[type=checkbox]' );
			inline_edit_col_center.click( function() {
				$(this).parents( '.inline-edit-col-center' ).find( 'input[type=checkbox]' ).attr( 'checked', false );
				$(this).attr( 'checked', true );
			});
			$( '#categorydiv #category-pop ul > li:first-child, #categorydiv #category-all ul > li:first-child, .inline-edit-col-center ul.category-checklist > li:first-child' ).before( '<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>' );
		});
	</script>

<?php
}

///////////////////////////////////////
// カスタムボックスの追加
///////////////////////////////////////
add_action('admin_menu', 'add_redirect_custom_box');
if ( !function_exists( 'add_redirect_custom_box' ) ):
function add_redirect_custom_box(){

  //リダイレクト
  add_meta_box( 'singular_redirect_settings', 'リダイレクト', 'redirect_custom_box_view', 'post', 'side' );
  add_meta_box( 'singular_redirect_settings', 'リダイレクト', 'redirect_custom_box_view', 'page', 'side' );
}
endif;

///////////////////////////////////////
// リダイレクト
///////////////////////////////////////
if ( !function_exists( 'redirect_custom_box_view' ) ):
function redirect_custom_box_view(){
  $redirect_url = get_post_meta(get_the_ID(),'redirect_url', true);

  echo '<label for="redirect_url">リダイレクトURL</label>';
  echo '<input type="text" name="redirect_url" size="20" value="'.esc_attr(stripslashes_deep(strip_tags($redirect_url))).'" placeholder="https://" style="width: 100%;">';
  echo '<p class="howto">このページに訪れるユーザーを設定したURLに301リダイレクトします。</p>';
}
endif;

add_action('save_post', 'redirect_custom_box_save_data');
if ( !function_exists( 'redirect_custom_box_save_data' ) ):
function redirect_custom_box_save_data(){
  $id = get_the_ID();
  //リダイレクトURL
  if ( isset( $_POST['redirect_url'] ) ){
    $redirect_url = $_POST['redirect_url'];
    $redirect_url_key = 'redirect_url';
    add_post_meta($id, $redirect_url_key, $redirect_url, true);
    update_post_meta($id, $redirect_url_key, $redirect_url);
  }
}
endif;

//リダイレクトURLの取得
if ( !function_exists( 'get_singular_redirect_url' ) ):
function get_singular_redirect_url(){
  return trim(get_post_meta(get_the_ID(), 'redirect_url', true));
}
endif;

//リダイレクト処理
if ( !function_exists( 'redirect_to_url' ) ):
function redirect_to_url($url){
  header( "HTTP/1.1 301 Moved Permanently" );
  header( "location: " . $url  );
  exit;
}
endif;

//URLの正規表現
define('URL_REG_STR', '(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)');
define('URL_REG', '/'.URL_REG_STR.'/');

//リダイレクト
add_action( 'wp','wp_singular_page_redirect', 0 );
if ( !function_exists( 'wp_singular_page_redirect' ) ):
function wp_singular_page_redirect() {
  //リダイレクト
  if (is_singular() && $redirect_url = get_singular_redirect_url()) {
    //URL形式にマッチする場合
    if (preg_match(URL_REG, $redirect_url)) {
      redirect_to_url($redirect_url);
    }
  }
}
endif;


//検索フォームのカテゴリを指定する
function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'diary');
  }
return $query;
}
add_filter('pre_get_posts','SearchFilter');




// $parent_term_id = $parent_term[ '2 ' ]; // ターム ID（数値）を取得
// wp_insert_term(
//   '商品入荷のお知らせ', // ターム名
//   'お知らせ', // タクソノミー
//   array(
//     'description'=> 'Inform from Staff.',
//     'parent'=> $parent_term_id
//   )
// );


//固定ページの定義//
define('BLOG', 14);
define('HOME',84);
define('issue',196);
define('diary',174);
define('ABOUT',228);
define('ABOUT',228);









;?>





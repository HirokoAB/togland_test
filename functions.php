<?php  



/**

* サムネイルの設定

*/
   	add_theme_support('post-thumbnails');

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
//////カスタム投稿タイプのUIに関する記述//////
/////////////////////////////////////////


function create_pts_daiary() {

	/**
	 * Post Type: ダイアリー.
	 */

	register_post_type( "daiary", array(
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
		"taxonomies" => array("daiary_cat","umisato","itonami",
			"boshu"),
		)
	);

	register_taxonomy(
		"daiary_cat",
		"daiary",
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
				"rewrite" => array( 'slug' => 'tpdaiary',),
				"show_admin_column" => true,
				"show_in_rest" => true,
				"rest_base" => "dairy_cat",
				"show_in_quick_edit" => false,
		)
	);

}
add_action( 'init', 'create_pts_daiary');


////////////////////////////////////////////////////////////////////////
///////////////////////////JS・CSSの読み込み設定////////////////////////////
////////////////////////////////////////////////////////////////////////


// JSファイルのエンキュー///

function myscripts(){

		wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js', array(), '1.0.0', true );

	if(is_home() || is_post_type_archive( 'outdoor' )){
			wp_enqueue_script( 'jquery-1.10.2.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery-1.10.2.min.js',array(),
    		false,
    		true);
    		wp_enqueue_script( 'jquery.yycountdown.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery.yycountdown.min.js',array(),
    		false,
    		true);
    		wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js',array(),
    		false,
    		true );
			wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/lib/assets/js/owl.carousel.js',array(),
    		false,
    		true);
			wp_enqueue_script( 'owl.app.js', get_template_directory_uri() . '/lib/assets/js/owl.app.js',array(),
    		false,
    		true);


	}elseif(is_page( 'daiary' ) || is_post_type_archive( 'daiary' )){
			wp_enqueue_script( 'jquery.min.js',get_template_directory_uri	().'/lib/assets/js/jquery.min.js');
			wp_enqueue_script( 'daiary.js',get_template_directory_uri() . '/js/daiary.js',
			array(),
    		false,
    		true
    		 );
		}

};
add_action( 'wp_enqueue_scripts' , 'myscripts' );


// CSSファイルのエンキュー///


function mystyle(){

	
			wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
			wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css' );

	if(is_home() || is_page( 14 ) || is_singular('outdoor')){
			wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css' );
			wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css' );
			wp_enqueue_style( 'outdoor_style.css', get_template_directory_uri() . '/css/outdoor_style.css', array(), '1.0.3' );


	}elseif(is_post_type_archive( 'daiary' )){
			wp_enqueue_style( 'daiary.css',get_template_directory_uri() . '/css/daiary.css' );
	}elseif(is_page('192')){
			wp_enqueue_style( 'content.css',get_template_directory_uri() . '/css/content.css' );
	}elseif(is_page('196')){
			wp_enqueue_style( 'content.css',get_template_directory_uri() . '/css/page-issue.css' );			
	}
	// else{
	// 	var_dump('なんか違うみたいです!!');
	// }
};
add_action( 'wp_enqueue_scripts' , 'mystyle' );





























//抜粋の削除
function new_excerpt_more($more){
    global $post;
    return '';
}
add_filter('excerpt_more','new_excerpt_more',9999);
//抜粋の文字数の指定
function custom_excerpt_length( $length ) {
     return 110; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




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

//カスタム投稿のタクソノミーとタームをURLに反映させる
function myUrlRewrite($rules){
$myRule = array();
$myRule['tpdaiary/([^/]+)/?$'] = 'index.php?daiary_cat[1]';
$myRule['tpdaiary/([^/]+)/([^/]+)?$'] = 'index.php?daiary_cat[2]';
return array_merge( $myRule, $rules );
}
add_action('rewrite_rules_array', 'myUrlRewrite' );

function myPostTypeLink($link, $post ) {
if ( $post->post_type == 'daiary' ) {
if ( $cats = get_the_terms( $post->ID, 'tpdairy' ) ) {
$link = str_replace( '%tpdairy%', current( $cats )->slug, $link );
}
}
return $link;
}
add_filter('post_type_link', 'myPostTypeLink', 10, 2 );
add_filter('post_link', 'myPostTypeLink', 10, 2 );





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








;?>

















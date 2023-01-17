<?php

/**
 *
 * wordpress テーマ 機能有効化
 *
*/
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action('after_setup_theme', 'my_setup');

/**
 *
 * CSS, Javascriptなどの読み込み
 *
 */
function my_script_init() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&family=Noto+Sans+JP:wght@400;500;700&display=swap');
    // Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), 8, 'all');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), 8, true);
    // main css
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('css/style.css')), 'all');
    // main javascript
    wp_enqueue_script('main-javascript', get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 *
 * アーカイブページ（記事一覧ページ）の追加
 *
 */

function post_has_archive($args, $post_type) {
    if('post'== $post_type) {
      $args['rewrite'] = true;
      $args['label'] = 'お知らせ';
    }
    return $args;
  }

  add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/**
 *
 * breadcrumb　カスタマイズ
 *
 */
// タイトルの書き換え
function my_bcn_breadcrumb_title( $title, $this_type, $this_id ) {
	if (is_page('news')) {
		$title = 'ニュース';
	}
	return $title;
};
add_filter( 'bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3 );

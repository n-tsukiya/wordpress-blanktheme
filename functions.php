<?php
// CSSのキャッシュを切りたい時にバージョンを上げる
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


function tokos_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// メニューを使用する際に使用
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'tokos' ),
	// 	)
	// );

	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// 画像のコンテンツ幅のベース
	if ( !isset( $content_width ) ) {
    $content_width = 640;
	}
}
add_action( 'after_setup_theme', 'tokos_setup' );


function tokos_widgets_init() {
	register_sidebar( array(
			'name'          => 'サイドバー',
			'id'            => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		)
	);
}
add_action( 'widgets_init', 'tokos_widgets_init' );


// titleタグのセパレーターの変更
function wp_document_title_separator( $separator ) {
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_separator', 'wp_document_title_separator' );


// css, jsの読み込み
function tokos_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/viewport.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tokos_scripts' );

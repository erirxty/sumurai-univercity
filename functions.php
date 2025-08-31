<?php
// WordPressにCSSとJSファイルを読み込ませるための関数
function my_theme_scripts() {
    // テーマのCSSを読み込む
    wp_enqueue_style( 'samurai-university-style', get_stylesheet_uri() );
    wp_enqueue_style( 'samurai-university-style-main', get_template_directory_uri() . '/css/style.css' );

    // BootstrapのCSSを読み込む
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/plugins/bootstrap-4.7.0/bootstrap.min.css' );

    // Font AwesomeのCSSを読み込む
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css' );

    // jQueryを読み込む
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );

    // Popper.jsを読み込む
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.js', array('jquery'), '', true );

    // BootstrapのJSを読み込む
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/plugins/bootstrap-4.7.0/bootstrap.min.js', array('jquery', 'popper-js'), '', true );

    // カスタムスクリプトを読み込む
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/script.js', array('jquery', 'popper-js', 'bootstrap-js'), '1.0.0', true );
}

// WordPressの読み込みフックに登録する
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// ここから下は、テーマを動かすための設定です
if ( ! function_exists( 'samurai_university_setup' ) ) :
	function samurai_university_setup() {
		load_theme_textdomain( 'samurai-university', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'samurai-university' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support( 'custom-background', apply_filters( 'samurai_university_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'samurai_university_setup' );

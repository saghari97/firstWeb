<?php
/**
 * WEN Corporate functions and definitions
 *
 * @package WEN_Corporate
 */

/**
 * Include Customizer library.
 */
require_once get_template_directory() . '/wen-customizer/init.php';

if ( ! function_exists( 'wen_corporate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wen_corporate_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wen Corporate, use a find and replace
	 * to change 'wen-corporate' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wen-corporate', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'post-thumb', 350, 200, true);

	/*
	 * Enable support for title tag.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wen-corporate' ),
		'footer'  => __( 'Footer Menu', 'wen-corporate' ),
		'social'  => __( 'Social Menu', 'wen-corporate' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wen_corporate_custom_background_args', array(
		'default-color' => 'c1c1c1',
		'default-image' => '',
	) ) );

	/*
	 * Enable support for selective refresh of widgets in Customizer.
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Editor style.
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	add_editor_style( 'css/editor-style' . $min . '.css' );

	/*
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

}
endif;
add_action( 'after_setup_theme', 'wen_corporate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wen_corporate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wen_corporate_content_width', 730 );
}
add_action( 'after_setup_theme', 'wen_corporate_content_width', 0 );

if ( ! function_exists( 'wen_corporate_template_redirect' ) ) :
	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet for different value other than the default one
	 *
	 * @global int $content_width
	 */
	function wen_corporate_template_redirect() {
		$global_layout = wen_corporate_get_option( 'global_layout' );

		if ( 'no-sidebar' === $global_layout ) {
			$GLOBALS['content_width'] = 1110;
		}
	}
endif;
add_action( 'template_redirect', 'wen_corporate_template_redirect' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wen_corporate_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wen-corporate' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wen-corporate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Front Page Widget Area', 'wen-corporate' ),
		'id'            => 'sidebar-front-page-widget-area',
		'description'   => __( 'Widgets in this sidebar will be displayed in home page.', 'wen-corporate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wen_corporate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wen_corporate_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'wen-corporate-bootstrap', get_template_directory_uri() .'/third-party/bootstrap/css/bootstrap' . $min . '.css', '', '3.3.6' );
	wp_enqueue_style( 'wen-corporate-font-awesome', get_template_directory_uri() .'/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	wp_enqueue_style( 'wen-corporate-google-fonts', '//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i' );

	wp_enqueue_style( 'wen-corporate-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );
	wp_enqueue_style( 'wen-corporate-custom-responsive', get_template_directory_uri() .'/css/responsive' . $min . '.css');
	wp_enqueue_style( 'wen-corporate-owl-carousel', get_template_directory_uri() .'/third-party/owl-carousel/owl.carousel' . $min . '.css', '', '1.3.3' );
	wp_enqueue_style( 'wen-corporate-mmenu-style', get_template_directory_uri() .'/third-party/mmenu/css/jquery.mmenu' . $min . '.css', '', '5.0.4' );


	$color_scheme = wen_corporate_get_option( 'color_scheme' );
	if ( ! empty( $color_scheme ) ) {
		wp_enqueue_style( 'wen-corporate-color-scheme',
			get_template_directory_uri() . '/css/' . esc_attr( $color_scheme ) . $min .'.css',
			array( 'wen-corporate-style' ),
			'1.0.2'
		);
	}

	wp_enqueue_script( 'wen-corporate-html5', get_template_directory_uri() . '/js/html5shiv' . $min . '.js' );
	wp_script_add_data( 'wen-corporate-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'wen-corporate-respond', get_template_directory_uri() . '/js/respond' . $min . '.js' );
	wp_script_add_data( 'wen-corporate-respond', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'wen-corporate-mmenu-script', get_template_directory_uri() . '/third-party/mmenu/js/jquery.mmenu.min.js', array( 'jquery' ), '4.7.5', true );

	wp_enqueue_script( 'wen-corporate-cycle2-script', get_template_directory_uri() . '/third-party/cycle2/js/jquery.cycle2' . $min . '.js', array( 'jquery' ), '2.1.6', true );

	wp_enqueue_script( 'wen-corporate-owl-carousel-script', get_template_directory_uri() . '/third-party/owl-carousel/owl.carousel' . $min . '.js', array( 'jquery' ), '1.3.3', true );

	wp_enqueue_script( 'wen-corporate-custom-script', get_template_directory_uri() . '/js/custom' . $min . '.js', array( 'jquery', 'wen-corporate-owl-carousel-script', 'wen-corporate-mmenu-script' ), '1.0.3', true );

	wp_enqueue_script( 'wen-corporate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix' . $min . '.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wen_corporate_scripts' );

/**
 * Theme Functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Theme Hooks.
 */
require get_template_directory() . '/inc/theme-hooks.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

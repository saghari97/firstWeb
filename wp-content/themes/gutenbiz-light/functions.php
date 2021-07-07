<?php
/**
 * Gutenbiz light functions and definitions
 * Gutenbiz light only works in WordPress 4.7 or later.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * @package Gutenbiz Light
 */

require get_stylesheet_directory() . '/classes/class-helper.php';
require get_stylesheet_directory() . '/classes/class-header.php';

final class Gutenbiz_Light_Theme extends Gutenbiz_Light_Helper{
	public function __construct(){
		# Get access to parent constructor
		parent::__construct();

		# enqueue script
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );

		# After parent theme
		add_action( 'after_setup_theme', array( __CLASS__, 'after_parent_theme' ) );

		# adds class on body to customize blog layouts
		add_filter( 'body_class' , array( __CLASS__ , 'get_body_classes' ) );
	}

	/**
	* Enqueue styles and scripts
	*
	* @static
	* @access public
	* @since  1.0.0
	*
	* @package Gutenbiz Light
	*/
	public static function scripts(){
		$scripts = array(
			# enqueue parent stylesheet
			array(
				'handler'  => 'gutenbiz-style',
				'style'    => get_template_directory_uri() . '/style.css',
				'version'  => wp_get_theme()->get('Version'),
				'absolute' => true,
				'minified' => false
			)
		);
		Gutenbiz_Helper::enqueue( $scripts );
	}

	/**
	 * After parent theme
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Gutenbiz Light
	 */
	public static function after_parent_theme(){

		# include options file
		Gutenbiz_Helper::include( array(
			'header-options',
			'post-options'
		), 'includes/theme-options', '');

		# dymanic css file
		Gutenbiz_Helper::include( array(
			'common',
			'responsive'
		), '/includes/dynamic-css', '');

		# add search form in header
		add_action( Gutenbiz_Helper::fn_prefix( 'after_site_branding' ), array( __CLASS__, 'add_search_form' ) );


	}

	 /**
	 * Adds Search form in header
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Gutenbiz Light
	 */
	public static function add_search_form(){ ?>
		<div class="gutenbiz-search-form">
			<?php get_search_form(); ?>
		</div>	
	<?php }

	/**
	 * adds class on body to customize blog layouts
	 *
	 * @static
	 * @access public
	 * @return object
	 * @since  1.0.0
	 *
	 * @package Gutenbiz Light
	 */
	public static function get_body_classes( $classes ){
		$blog_layout = Gutenbiz_Helper::with_prefix( gutenbiz_get( 'blog-layouts-style' ) );
		$classes[] = $blog_layout;
		$classes[] = 'gutenbiz-light-theme';

		if( self::is_advanced_header_exists() ){
			$classes[] = 'gutenbiz-advanced-header';
		}
		return $classes;
	}

	/**
	 * Return class for post
	 *
	 * @static
	 * @access public
	 * @return string
	 * @since  1.0.0
	 *
	 * @package Gutenbiz Advanced Blog Layouts
	 */
	public static function get_sidebar_class_by_layout( $class = false ){
		if( 'blog-list' == gutenbiz_get( 'blog-layouts-style' ) ){
			$class = 'col-md-12 col-lg-12';
		}elseif( Gutenbiz_Theme::is_sidebar_active() ){
			$class = 'col-md-6 col-lg-6';
		}else{
			$class = 'col-md-4 col-lg-4';
		}
		return esc_attr( $class );
	}
}

new Gutenbiz_Light_Theme;
<?php
/**
 * Smartfund functions and definitions
 * Smartfund only works in WordPress 4.7 or later.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * @package Smartfund
 */
final class Smartfund_Theme{
	public function __construct(){
		# enqueue script
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );

		#change section name
		add_filter( 'bizsmart_customizer_get_panel_arg', array( __CLASS__, 'change_pannel_title' ), 20, 2 );

		# add dark mode option
		add_action( 'after_setup_theme', array( __CLASS__, 'after_parent_theme' ) );

		# adds class on body to customize blog layouts
		add_filter( 'body_class' , array( __CLASS__ , 'add_body_classes' ) );
	}

	/**
	 * adds class on body to customize blog layouts
	 *
	 * @static
	 * @access public
	 * @return object
	 * @since  1.0.0
	 *
	 * @package Smartfund
	 */
	public static function add_body_classes( $classes ){
		if( bizsmart_get( 'sticky-header' ) ){
			$classes[] = BizSmart_Helper::with_prefix( 'sticky-header' );
		}

		if( bizsmart_get( 'hide-offcanvas-mobile' ) ){
			$classes[] = 'bizsmart-hide-offcanvas-mobile';
		}

		if( bizsmart_get( 'hide-offcanvas-tablet' ) ){
			$classes[] = 'bizsmart-hide-offcanvas-tablet';
		}

		if( bizsmart_get( 'hide-offcanvas-desktop' ) ){
			$classes[] = 'bizsmart-hide-offcanvas-desktop';
		}

		return $classes;
	}

	/**
	 * After parent theme
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Smartfund
	 */
	public static function after_parent_theme(){
		# remove header options
		remove_action( 'init', 'bizsmart_header_options' );
		# displays the inner banner and breadcrumb
		remove_action( BizSmart_Helper::fn_prefix( 'after_header' ), array( 'BizSmart_Theme' , 'the_inner_banner_content' ) );
		add_action( BizSmart_Helper::fn_prefix( 'after_header' ), array( __CLASS__ , 'the_inner_banner_content' ) );


		# remove off canvas from theme
		remove_action(  'bizsmart_after_primary_menu', array( 'BizSmart_Theme', 'add_offcanvas_menu' ), 30 );
		add_action(  'bizsmart_after_primary_menu', array( __class__, 'add_offcanvas_menu' ), 30 );

		# include options file
		BizSmart_Helper::include( array(
			'banner-slider',
			'header-options',
		), 'includes/theme-options', '');

		# include custom control
		BizSmart_Helper::include( array(
			'cat-dropdown/cat-dropdown'
		), 'classes/custom-control', '');

		# filter to modify priority
		add_filter( BizSmart_Helper::with_prefix( 'customizer_get_defaults','_' ), array( __CLASS__ , 'change_defaults' ), 99 ,2 );

		#filter to change default on admin
		add_filter( BizSmart_Helper::fn_prefix( 'customizer_get_setting_arg' ), array( __CLASS__, 'change_default_admmin' ), 10, 2 );


	}
	/**
	 * Adds Offcanves menu
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Smartfund WordPress Theme
	 */
	public static function add_offcanvas_menu(){ 
		if( bizsmart_get( 'hide-offcanvas-mobile' ) &&
			bizsmart_get( 'hide-offcanvas-desktop' ) &&	
			bizsmart_get( 'hide-offcanvas-tablet' )	
		){
			return;
		}?>			
		<div class="bizsmart-offcanvas-menu" id="offcanvas-menu-icon">
			<span class="text"><?php esc_html_e( 'Slide Area', 'smartfund' ); ?></span>
			<button class="offcanvas-menu-toggler" id="offcanvas-menu-icon">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	<?php }

	/**
	* Add a wrapper on inner banner and breadcrumb
	*
	* @static
	* @access public
	* @since  1.0.0
	*
	* @package Smartfund WordPress Theme
	*/
	public static function the_inner_banner_content( ){

		$disable = false;
		# inner banner should not load in 404 page,
		if( 
			# don't load it in 404 page
			is_404() ||
			( ( is_page() || 								# don't load if disabled on page					
				BizSmart_Theme::is_woo_shop_page() || 				# don't load if disabled on woocommerce shop page
				BizSmart_Theme::is_static_blog_page() ||				# don't load if disabled on static blog page
				BizSmart_Theme::is_static_front_page()				# don't load if disabled on static homepage
 			  ) && BizSmart_Theme::get_meta( 'disable-inner-banner' ) 
			) ||
			# remove banner on woocommerce category page
			BizSmart_Theme::is_woo_product_category() ||
			# don't load it if it is blog page and title is empty
			( is_home() && is_front_page() && !BizSmart_Theme::get_blog_title() )
		){ 
			$disable = true;
		}

		# since 1.0.0
		if( apply_filters( BizSmart_Theme::fn_prefix( 'disable_inner_banner_content' ), $disable) ){
			return;
		}

		if( is_home() || is_front_page() ){
			if( !bizsmart_get( 'show-slider' ) ){
				return;
			}

			get_template_part( 'templates/content/content', 'slider' );
		}else{
			get_template_part( 'templates/content/content', 'banner' );
		}
	}

	/**
	 * Change default value on admin
	 *
	 * @static
	 * @access public
	 * @since  1.0.1
	 *
	 * @package Smartfund
	 */	
	public static function change_default_admmin( $args, $field ){
		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'footer-copyright-text' ) ){
			$args[ 'default' ] = esc_html__( 'Copyright &copy; 2020 | Smartfund', 'smartfund' );
		}

		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'topbar-bg-color' ) ){
			$args[ 'default' ] = '#ec533d';
		}

		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'btn-bg-color' ) ){
			$args[ 'default' ] = '#ec533d';
		}

		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'btn-hover-color' ) ){
			$args[ 'default' ] = '#008b98';
		}

		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'primary-color' ) ){
			$args[ 'default' ] = '#ec533d';
		}

		if( $field[ 'id' ] == BizSmart_Helper::with_prefix( 'footer-copyright-background-color' ) ){
			$args[ 'default' ] = '#ec533d';
		}

		return $args;
	}

	/**
	 * Change default value
	 *
	 * @static
	 * @access public
	 * @since  1.0.0
	 *
	 * @package Smartfund
	 */	
	public static function change_defaults( $def, $instance ){
		$id = BizSmart_Helper::with_prefix( 'footer-copyright-text' );

		$topbar_bg = BizSmart_Helper::with_prefix( 'topbar-bg-color' );
		$header_btn_bg = BizSmart_Helper::with_prefix( 'btn-bg-color' );
		$header_btn_hvr = BizSmart_Helper::with_prefix( 'btn-hover-color' );
		$primary_color = BizSmart_Helper::with_prefix( 'primary-color' );
		$footer_color = BizSmart_Helper::with_prefix( 'footer-copyright-background-color' );

		$def[ $id ] = esc_html__( 'Copyright &copy; 2020 | Smartfund', 'smartfund' );
		$def[ $topbar_bg ] = '#ec533d';
		$def[ $header_btn_bg ] = '#ec533d';
		$def[ $header_btn_hvr ] = '#008b98';
		$def[ $primary_color ] = '#ec533d';
		$def[ $footer_color ] = '#ec533d';

		return $def;
	}

	/**
	* Enqueue styles and scripts
	*
	* @static
	* @access public
	* @since  1.0.0
	*
	* @package Smartfund
	*/
	public static function scripts(){
		$scripts = array(
			# enqueue parent stylesheet
			array(
				'handler'  => 'smartfund',
				'style'    => get_template_directory_uri() . '/style.css',
				'version'  => wp_get_theme()->get('Version'),
				'absolute' => true,
				'minified' => false
			),			
            array(
                'handler' => 'jquery-sticky-script',
                'script'  => 'assets/js/jquery.sticky.js',
                'minified' => false
            ),
            array(
                'handler' => 'smartfund-dark-script',
                'script'  => 'assets/js/script.js',
                'minified' => false
            ),
    		array(
    	        'handler' => 'slick',
    	        'script'  => 'assets/js/slick.js',
    	        'minified' => false
    	    ),
        	array(
                'handler' => 'slick',
                'style'  => 'assets/css/slick.css',
                'minified' => false
            )
		);
		BizSmart_Helper::enqueue( $scripts );
	}

	/**
	 * Changed panel title
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Smartfund
	 */
	public static function change_pannel_title( $args, $panel ){
		if( $panel[ 'id' ] == 'panel' ){
			$panel[ 'title' ] = esc_html__( 'Smartfund Options', 'smartfund' );
		}
		return $panel;
	}

	/**
	 * Get according to type
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package Smartfund WordPress Theme
	 */
	public static function get_posts_by_type( $type, $cat_id, $post_to_display = false ){
		$posts = array();
		if( 'post' == $type ){
			$recent_posts = wp_get_recent_posts(array(
			    'numberposts' => $post_to_display ? $post_to_display : -1,
			    'post_status' => 'publish'
			));

			foreach ( $recent_posts as $post) {
				$posts[] = $post[ 'ID' ]; 
			}
		}elseif( 'category' == $type ){			
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => $post_to_display ? $post_to_display : -1,
				'ignore_sticky_posts' => 1,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			if( $cat_id ){
				$args[ 'cat' ] = $cat_id; 
			}

			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
			    while ( $query->have_posts() ) {
			        $query->the_post();
			        $posts[] = get_the_ID();
			    }
			}
			wp_reset_postdata();
		}
		if( empty( $posts ) ){
			return false;
		}else{
			return $posts;
		}
	}
}

new Smartfund_Theme();
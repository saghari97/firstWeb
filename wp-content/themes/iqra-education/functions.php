<?php
/**
 * Iqra Education functions and definitions
 */

function iqra_education_setup() {
	
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'iqra-education-featured-image', 2000, 1200, true );
	add_image_size( 'iqra-education-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'iqra-education' ),
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );
	
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', iqra_education_fonts_url() ) );
}
add_action( 'after_setup_theme', 'iqra_education_setup' );

/* Theme Font URL */
function iqra_education_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'B612:400,400i,700,700i';
	$font_family[] = 'Kalam:300,400,700';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Noto Sans:400,400i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/**
 * Widget area.
 */
function iqra_education_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'iqra-education' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'iqra-education' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title text-capitalize">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Page Sidebar', 'iqra-education' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'iqra-education' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$iqra_education_widget_areas = get_theme_mod('iqra_education_footer_widget', '4');
	for ($i=1; $i<=$iqra_education_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'iqra-education' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s my-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'iqra_education_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iqra_education_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'iqra-education-fonts', iqra_education_fonts_url(), array(), null );

	// blocks-css
	wp_enqueue_style( 'iqra-education-block-style', get_theme_file_uri('/assets/css/blocks.css') );

	//bootstrap
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.css' ));

	// Theme stylesheet.
	wp_enqueue_style( 'iqra-education-basic-style', get_stylesheet_uri() );

	//font-awesome 
	wp_enqueue_style( 'font-awesome-style', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	// Paragraph
	    $iqra_education_paragraph_color = get_theme_mod('iqra_education_paragraph_color', '');
	    $iqra_education_paragraph_font_family = get_theme_mod('iqra_education_paragraph_font_family', '');
	    $iqra_education_paragraph_font_size = get_theme_mod('iqra_education_paragraph_font_size', '');
	// "a" tag
		$iqra_education_atag_color = get_theme_mod('iqra_education_atag_color', '');
	    $iqra_education_atag_font_family = get_theme_mod('iqra_education_atag_font_family', '');
	// "li" tag
		$iqra_education_li_color = get_theme_mod('iqra_education_li_color', '');
	    $iqra_education_li_font_family = get_theme_mod('iqra_education_li_font_family', '');
	// H1
		$iqra_education_h1_color = get_theme_mod('iqra_education_h1_color', '');
	    $iqra_education_h1_font_family = get_theme_mod('iqra_education_h1_font_family', '');
	    $iqra_education_h1_font_size = get_theme_mod('iqra_education_h1_font_size', '');
	// H2
		$iqra_education_h2_color = get_theme_mod('iqra_education_h2_color', '');
	    $iqra_education_h2_font_family = get_theme_mod('iqra_education_h2_font_family', '');
	    $iqra_education_h2_font_size = get_theme_mod('iqra_education_h2_font_size', '');
	// H3
		$iqra_education_h3_color = get_theme_mod('iqra_education_h3_color', '');
	    $iqra_education_h3_font_family = get_theme_mod('iqra_education_h3_font_family', '');
	    $iqra_education_h3_font_size = get_theme_mod('iqra_education_h3_font_size', '');
	// H4
		$iqra_education_h4_color = get_theme_mod('iqra_education_h4_color', '');
	    $iqra_education_h4_font_family = get_theme_mod('iqra_education_h4_font_family', '');
	    $iqra_education_h4_font_size = get_theme_mod('iqra_education_h4_font_size', '');
	// H5
		$iqra_education_h5_color = get_theme_mod('iqra_education_h5_color', '');
	    $iqra_education_h5_font_family = get_theme_mod('iqra_education_h5_font_family', '');
	    $iqra_education_h5_font_size = get_theme_mod('iqra_education_h5_font_size', '');
	// H6
		$iqra_education_h6_color = get_theme_mod('iqra_education_h6_color', '');
	    $iqra_education_h6_font_family = get_theme_mod('iqra_education_h6_font_family', '');
	    $iqra_education_h6_font_size = get_theme_mod('iqra_education_h6_font_size', '');

		$iqra_education_custom_css ='
			p,span{
			    color:'.esc_html($iqra_education_paragraph_color).'!important;
			    font-family: '.esc_html($iqra_education_paragraph_font_family).';
			    font-size: '.esc_html($iqra_education_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($iqra_education_atag_color).'!important;
			    font-family: '.esc_html($iqra_education_atag_font_family).';
			}
			li{
			    color:'.esc_html($iqra_education_li_color).'!important;
			    font-family: '.esc_html($iqra_education_li_font_family).';
			}
			h1{
			    color:'.esc_html($iqra_education_h1_color).'!important;
			    font-family: '.esc_html($iqra_education_h1_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($iqra_education_h2_color).'!important;
			    font-family: '.esc_html($iqra_education_h2_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($iqra_education_h3_color).'!important;
			    font-family: '.esc_html($iqra_education_h3_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($iqra_education_h4_color).'!important;
			    font-family: '.esc_html($iqra_education_h4_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($iqra_education_h5_color).'!important;
			    font-family: '.esc_html($iqra_education_h5_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($iqra_education_h6_color).'!important;
			    font-family: '.esc_html($iqra_education_h6_font_family).'!important;
			    font-size: '.esc_html($iqra_education_h6_font_size).'!important;
			}
			';
	
	wp_add_inline_style( 'iqra-education-basic-style',$iqra_education_custom_css );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-jquery', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'iqra-education-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$iqra_educationScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'iqra-education-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$iqra_educationScreenReaderText['expand'] = __( 'Expand child menu', 'iqra-education' );
		$iqra_educationScreenReaderText['collapse'] = __( 'Collapse child menu', 'iqra-education' );
		
	}

	wp_enqueue_script( 'jquery-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'bootstrap-jquery', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'iqra-education-basic-style',$iqra_education_custom_css );

	wp_localize_script( 'iqra-education-skip-link-focus-fix', 'iqra_educationScreenReaderText', $iqra_educationScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iqra_education_scripts' );

function iqra_education_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function iqra_education_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function iqra_education_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function iqra_education_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function iqra_education_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'iqra_education_loop_columns');
if (!function_exists('iqra_education_loop_columns')) {
	function iqra_education_loop_columns() {
		$columns = get_theme_mod( 'iqra_education_woocommerce_product_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'iqra_education_shop_per_page', 20 );
function iqra_education_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'iqra_education_woocommerce_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function iqra_education_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function iqra_education_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
define('IQRA_EDUCATION_LIVE_DEMO',__('https://www.themeseye.com/demo/iqra-education-pro/','iqra-education'));
define('IQRA_EDUCATION_BUY_PRO',__('https://www.themeseye.com/wordpress/education-wordpress-theme/','iqra-education'));
define('IQRA_EDUCATION_PRO_DOC',__('https://www.themeseye.com/theme-demo/docs/iqra-education-pro/','iqra-education'));
define('IQRA_EDUCATION_FREE_DOC',__('https://www.themeseye.com/theme-demo/docs/free-iqra-education/','iqra-education'));
define('IQRA_EDUCATION_PRO_SUPPORT',__('https://www.themeseye.com/forums/forum/themeseye-support/','iqra-education'));
define('IQRA_EDUCATION_FREE_SUPPORT',__('https://wordpress.org/support/theme/iqra-education/','iqra-education'));

//footer Link
define('IQRA_EDUCATION_CREDIT',__('https://www.themeseye.com/wordpress/free-education-wordpress-theme/','iqra-education'));

if ( ! function_exists( 'iqra_education_credit' ) ) {
	function iqra_education_credit(){
		echo "<a href=".esc_url(IQRA_EDUCATION_CREDIT)." target='_blank'>".esc_html__('Education WordPress Theme ','iqra-education')."</a>";
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' );
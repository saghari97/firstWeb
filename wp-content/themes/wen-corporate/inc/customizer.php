<?php
/**
 * WEN Corporate Theme Customizer.
 *
 * @package WEN_Corporate
 */

$our_settings = array(

  'panels' => array(
    'wen_corporate_theme_options_panel' => array(
      'title'          => __( 'Theme Options', 'wen-corporate' ),
      'sections'       => array(
        'wc_general_section' => array(
          'title'       => __( 'General', 'wen-corporate' ),
          'fields'      => array(
            'color_scheme' => array(
              'title'   => __( 'Color Scheme', 'wen-corporate' ),
              'type'    => 'select',
              'default' => 'blue',
              'choices' => array(
                'blue'      => __( 'Blue', 'wen-corporate' ),
                'chocolate' => __( 'Chocolate', 'wen-corporate' ),
              ),
            ),
            'global_layout' => array(
              'title'   => __( 'Global Layout', 'wen-corporate' ),
              'type'    => 'select',
              'default' => 'right-sidebar',
              'choices' => array(
                'left-sidebar'  => __( 'Left Sidebar', 'wen-corporate' ),
                'right-sidebar' => __( 'Right Sidebar', 'wen-corporate' ),
                'no-sidebar'    => __( 'No Sidebar', 'wen-corporate' ),
              ),
            ),
            'enable_go_to_top' => array(
              'title'   => __( 'Enable Go To Top', 'wen-corporate' ),
              'type'    => 'checkbox',
              'default' => true,
            ),

          ),
        ),
        'wc_header_section' => array(
          'title'       => __( 'Header', 'wen-corporate' ),
          'fields'      => array(
            'header_layout' => array(
              'title'   => __( 'Header Layout', 'wen-corporate' ),
              'type'    => 'radio-image',
              'default' => 'layout-1',
              'choices' => array(
                'layout-1'=>get_template_directory_uri().'/images/header-layout-1.png',
                'layout-2'=>get_template_directory_uri().'/images/header-layout-2.png'
              ),
            ),
            'show_site_title' => array(
              'title'   => __( 'Show Site Title', 'wen-corporate' ),
              'type'    => 'checkbox',
              'default' => 1,
            ),
            'show_tagline' => array(
              'title'   => __( 'Show Tagline', 'wen-corporate' ),
              'type'    => 'checkbox',
              'default' => 1,
            ),
            'show_search_in_header' => array(
              'title'    => __( 'Show Search Box', 'wen-corporate' ),
              'type'     => 'checkbox',
              'default'  => '1',
            ),
            'show_social_in_header' => array(
              'title'    => __( 'Show Social Icons', 'wen-corporate' ),
              'type'     => 'checkbox',
            ),
          ),
        ),
        'wc_breadcrumb_section' => array(
          'title'       => __( 'Breadcrumb', 'wen-corporate' ),
          'fields'      => array(
            'breadcrumb_type' => array(
              'title'   => __( 'Breadcrumb Type', 'wen-corporate' ),
              'type'    => 'select',
              'default' => 'disabled',
              'choices' => array(
				'disabled' => __( 'Disabled', 'wen-corporate' ),
				'simple'   => __( 'Simple', 'wen-corporate' ),
				'advanced' => __( 'Advanced', 'wen-corporate' ),
              ),
            ),
          ),
        ),

        'wc_footer_section' => array(
          'title'  => __( 'Footer', 'wen-corporate' ),
          'fields' => array(
            'footer_widgets' => array(
              'title'   => __( 'Footer Widgets', 'wen-corporate' ),
              'type'    => 'select',
              'default' => 0,
              'choices' => array(
                '0' => __( 'No Widget', 'wen-corporate' ),
                '1' => sprintf( __( '%d Widget', 'wen-corporate' ), 1 ),
                '2' => sprintf( __( '%d Widgets', 'wen-corporate' ), 2 ),
                '3' => sprintf( __( '%d Widgets', 'wen-corporate' ), 3 ),
                '4' => sprintf( __( '%d Widgets', 'wen-corporate' ), 4 ),
              ),
            ),
            'copyright_text' => array(
              'title'     => __( 'Copyright Text', 'wen-corporate' ),
              'type'      => 'text',
              'default'   => __( 'Copyright &copy; All Rights Reserved.', 'wen-corporate' ),
            ),
            'enable_powered_by' => array(
              'title'     => __( 'Enable Powered By', 'wen-corporate' ),
              'type'      => 'checkbox',
            ),

          ),
        ),
        'wc_blog_section' => array(
          'title'  => __( 'Blog', 'wen-corporate' ),
          'fields' => array(
            'blog_layout' => array(
              'title'   => __( 'Blog Layout', 'wen-corporate' ),
              'type'    => 'select',
              'default' => 'full-post',
              'choices' => array(
                'full-post'              => __( 'Full Post', 'wen-corporate' ),
                'excerpt'                => __( 'Excerpt', 'wen-corporate' ),
                'excerpt-with-thumbnail' => __( 'Excerpt with Thumbnail', 'wen-corporate' ),
              ),
            ),
            'read_more_text' => array(
              'title'             => __( 'Read more text', 'wen-corporate' ),
              'type'              => 'text',
              'default'           => __( 'Read more', 'wen-corporate' ),
              'sanitize_callback' => 'sanitize_text_field',
            ),
            'excerpt_length' => array(
              'title'             => __( 'Excerpt Length', 'wen-corporate' ),
              'type'              => 'text',
              'default'           => 40,
              'sanitize_callback' => 'wen_corporate_sanitize_positive_integer',
            ),

          ),
        ),
        'wc_slider_section' => array(
          'title'  => __( 'Slider', 'wen-corporate' ),
          'fields' => array(
            'slider_status' => array(
              'title'    => __( 'Slider Status', 'wen-corporate' ),
              'type'     => 'select',
              'default'  => 'disable',
              'priority' => 50,
              'choices'  => array(
                'disable' => __( 'Disable', 'wen-corporate' ),
                'enable'  => __( 'Enable', 'wen-corporate' ),
              ),
            ),
            'slider_display' => array(
							'title'           => __( 'Slider Display', 'wen-corporate' ),
							'type'            => 'select',
							'default'         => 'all-pages',
							'priority'        => 60,
							'active_callback' => 'wen_corporate_customizer_slider_status',
							'choices'         => array(
                'all-pages'      => __( 'All Pages', 'wen-corporate' ),
                'home-page-only' => __( 'Home Page Only', 'wen-corporate' ),
              ),
            ),
            'slider_category' => array(
							'title'           => __( 'Slider Category', 'wen-corporate' ),
							'type'            => 'dropdown-taxonomies',
							'active_callback' => 'wen_corporate_customizer_slider_status',
            ),
            'number_of_slides' => array(
							'title'             => __( 'Number of Slides', 'wen-corporate' ),
							'type'              => 'text',
							'default'           => 3,
							'priority'          => 115,
							'sanitize_callback' => 'wen_corporate_sanitize_positive_integer',
							'active_callback'   => 'wen_corporate_customizer_slider_status',
            ),
            'transition_effect' => array(
							'title'           => __( 'Transition Effect', 'wen-corporate' ),
							'type'            => 'select',
							'default'         => 'fade',
							'priority'        => 120,
							'active_callback' => 'wen_corporate_customizer_slider_status',
							'choices'         => array(
                'fade'       => __( 'Fade', 'wen-corporate' ),
                'fadeout'    => __( 'Fade Out', 'wen-corporate' ),
                'none'       => __( 'None', 'wen-corporate' ),
                'scrollHorz' => __( 'Scroll Horizontal', 'wen-corporate' ),
              ),
            ),
            'show_caption' => array(
							'title'           => __( 'Show Caption', 'wen-corporate' ),
							'type'            => 'checkbox',
							'priority'        => 125,
							'active_callback' => 'wen_corporate_customizer_slider_status',
            ),
            'show_pager' => array(
							'title'           => __( 'Show Pager', 'wen-corporate' ),
							'type'            => 'checkbox',
							'priority'        => 130,
							'active_callback' => 'wen_corporate_customizer_slider_status',
            ),
            'auto_play' => array(
							'title'           => __( 'Enable Autoplay', 'wen-corporate' ),
							'type'            => 'checkbox',
							'default'         => '1',
							'priority'        => 135,
							'active_callback' => 'wen_corporate_customizer_slider_status',
            ),
            'transition_delay' => array(
							'title'             => __( 'Transition Delay', 'wen-corporate' ),
							'type'              => 'text',
							'default'           => '3000',
							'priority'          => 140,
							'sanitize_callback' => 'wen_corporate_sanitize_positive_integer',
							'active_callback'   => 'wen_corporate_customizer_slider_status',
            ),
            'transition_length' => array(
							'title'             => __( 'Transition Length', 'wen-corporate' ),
							'type'              => 'text',
							'default'           => '2000',
							'priority'          => 145,
							'sanitize_callback' => 'wen_corporate_sanitize_positive_integer',
							'active_callback'   => 'wen_corporate_customizer_slider_status',
            ),

          ),
        ),
        'wc_advanced_section' => array(
          'title'  => __( 'Advanced', 'wen-corporate' ),
          'fields' => array(
            'custom_css' => array(
              'title'                => __( 'Custom CSS', 'wen-corporate' ),
              'type'                 => 'textarea',
              'sanitize_callback'    => 'wp_filter_nohtml_kses',
              'sanitize_js_callback' => 'wp_filter_nohtml_kses',
            ),
          ),
        ),

      ),
    ),
  ),

);

// Hide Custom CSS for new WP 4.7.
if ( ! version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	if ( isset( $our_settings['panels']['wen_corporate_theme_options_panel']['sections']['wc_advanced_section']['fields']['custom_css'] ) ) {
		unset( $our_settings['panels']['wen_corporate_theme_options_panel']['sections']['wc_advanced_section']['fields']['custom_css'] );
	}
}

$wen_corporate_customizer = new WEN_Customizer( $our_settings );

// Validation functions.
if ( ! function_exists( 'wen_corporate_sanitize_positive_integer' ) ) :

	/**
	 * Sanitize positive integer.
	 *
	 * @since 1.0.0
	 *
	 * @param int                  $input Number to sanitize.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return int Sanitized number; otherwise, the setting default.
	 */
	function wen_corporate_sanitize_positive_integer( $input, $setting ) {

		$input = absint( $input );

		// If the input is an absolute integer, return it.
		// otherwise, return the default.
		return ( $input ? $input : $setting->default );

	}

endif;

if ( ! function_exists( 'wen_corporate_customizer_slider_status' ) ) :

	/**
	 * Check if slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function wen_corporate_customizer_slider_status( $control ) {

		if ( 'enable' === $control->manager->get_setting( 'wen_slider_status' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

/**
 * Load styles for Customizer.
 *
 * @since 1.5
 */
function wen_corporate_load_customizer_styles() {

	global $pagenow;

	if ( 'customize.php' === $pagenow ) {
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_style( 'wen-corporate-customizer-style', get_template_directory_uri() . '/css/customizer' . $min . '.css', false, '1.8.1' );
	}

}

add_action( 'admin_enqueue_scripts', 'wen_corporate_load_customizer_styles' );

/**
 * Add partial refresh support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wen_corporate_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    // Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'refresh';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
        return;
    }

    // Load customizer partials callback.
    require get_template_directory() . '/inc/customizer-partials.php';

    // Partial blogname.
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'            => '.site-title a',
		'container_inclusive' => false,
		'render_callback'     => 'wen_corporate_customize_partial_blogname',
    ) );

    // Partial blogdescription.
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector'            => '.site-description',
		'container_inclusive' => false,
		'render_callback'     => 'wen_corporate_customize_partial_blogdescription',
    ) );

}

add_action( 'customize_register', 'wen_corporate_customize_register' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.9.0
 */
function wen_corporate_customizer_control_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script( 'wen-corporate-customize-controls', get_template_directory_uri() . '/js/customize-controls' . $min . '.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'wen-corporate-customize-controls', get_template_directory_uri() . '/css/customize-controls' . $min . '.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'wen_corporate_customizer_control_scripts', 0 );

/**
 * Add custom sections.
 *
 * @since 1.9.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wen_corporate_customize_custom_sections( $wp_customize ) {

	if ( ! class_exists( 'WP_Customize_Section' ) ) {
		return;
	}

	/**
	 * Upsell customizer section.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	class WEN_Corporate_Customize_Section_Upsell extends WP_Customize_Section {

		/**
		 * The type of customize section being rendered.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $type = 'upsell';

		/**
		 * Custom button text to output.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $pro_text = '';

		/**
		 * Custom pro button URL.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $pro_url = '';

		/**
		 * Add custom parameters to pass to the JS via JSON.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function json() {
			$json = parent::json();

			$json['pro_text'] = $this->pro_text;
			$json['pro_url']  = esc_url( $this->pro_url );

			return $json;
		}

		/**
		 * Outputs the Underscore.js template.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		protected function render_template() { ?>

			<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

				<h3 class="accordion-section-title">
					{{ data.title }}

					<# if ( data.pro_text && data.pro_url ) { #>
						<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
					<# } #>
				</h3>
			</li>
		<?php }
	}

	// Register custom section types.
	$wp_customize->register_section_type( 'WEN_Corporate_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new WEN_Corporate_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'WEN Corporate Pro', 'wen-corporate' ),
				'pro_text' => esc_html__( 'Buy Pro', 'wen-corporate' ),
				'pro_url'  => 'https://themepalace.com/downloads/wen-corporate-pro/',
				'priority' => 1,
			)
		)
	);

}

add_action( 'customize_register', 'wen_corporate_customize_custom_sections', 99 );

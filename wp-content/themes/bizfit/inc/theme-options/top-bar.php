<?php
/**
* Active callback function of header top bar
*
* @return boolen
* @since 1.0.0
*
* @package BizFit WordPress Theme
*/
if( !function_exists( 'bizfit_acb_top_bar' ) ):
	function bizfit_acb_top_bar( $control ){
		$value = $control->manager->get_setting( BizFit_Helper::with_prefix( 'show-top-bar' ) )->value();
		return $value;
	}
endif;

/**
* Register Top bar Options
*
* @return void
* @since 1.0.1
*
* @package BizFit WordPress Theme
*/
function bizfit_topbar_options(){
	BizFit_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'top-bar',
		    'title' => esc_html__( 'Top Bar', 'bizfit' ),
		    'priority'    => 0,
		),
		'fields' => array(
			array(
				'id'	=> 'show-top-bar',
				'label' => esc_html__( 'Enable', 'bizfit' ),
				'default' => false,
 				'type'  => 'bizfit-toggle'
			),
			array(
				'id'	=> 'location',
				'label' => esc_html__( 'Location', 'bizfit' ),
				'default' => esc_html( '112 W 34th St, New York' ),
				'type'  => 'text',
				'active_callback' => 'acb_top_bar'
			),
			array(
				'id'	=> 'phone-num',
				'label' => esc_html__( 'Phone Number', 'bizfit' ),
				'default' => esc_html( ' +123455678' ),
				'type'  => 'text',
				'active_callback' => 'acb_top_bar'
			),
			array(
				'id'	=> 'email',
				'label' => esc_html__( 'Email', 'bizfit' ),
				'default' => esc_html( 'info@yourdomain.com' ),
				'type'  => 'email',
				'active_callback' => 'acb_top_bar'
			),
			array(
				'id'      => 'header-social-menu',
				'label'   => esc_html__( 'Social Menu Enable', 'bizfit' ),
				'description' => esc_html__( 'Please add Social menus for enabling Social menus. Go to Menus for setting up.', 'bizfit' ),
				'default' => false,
				'active_callback' => 'acb_top_bar',
				'type'    => 'bizfit-toggle',
			),
			array(
				'id'      => 'topbar-bg-color',
				'label'   => esc_html__( 'Background Color', 'bizfit' ),
				'default' => '#003966',
				'active_callback' => 'acb_top_bar',
				'type'    => 'bizfit-color-picker',
			)
		)
	));
}
add_action( 'init', 'bizfit_topbar_options' );
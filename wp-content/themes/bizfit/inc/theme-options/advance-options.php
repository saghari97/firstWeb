<?php
if( !function_exists( 'bizfit_acb_custom_header_one' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package BizFit WordPress theme
	*/
	function bizfit_acb_custom_header_one( $control ){
		$value = $control->manager->get_setting( BizFit_Helper::with_prefix( 'container-width' ) )->value();
		return 'default' == $value;
	}
endif;

/**
* Register Advanced Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_advanced_options(){

	BizFit_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'advance-options',
		    'title' => esc_html__( 'Advanced Options', 'bizfit' ),
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
				'id'	=> 'pre-loader',
				'label' => esc_html__( 'Show Preloader', 'bizfit' ),
				'default' => false,
				'type'  => 'bizfit-toggle',
			)
		)
	));
}
add_action( 'init', 'bizfit_advanced_options' );
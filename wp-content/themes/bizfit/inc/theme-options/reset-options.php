<?php
/**
 * Resets all the value of customizer
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

if( !function_exists( 'bizfit_get_setting_id' ) ):
	add_action( 
		BizFit_Helper::fn_prefix( 'customize_register_start' ), 
		'bizfit_get_setting_id', 30, 2 );
	/**
	* Get all the setting id to bizfit-reset the data.
	*
	* @return array
	* @since 1.0.0
	*
	* @package BizFit WordPress theme
	*/
	function bizfit_get_setting_id( $instance, $wp_customize ) {
		
		BizFit_Customizer::set(array(
			# Theme option
			'panel' => 'panel',
			# Theme Option > Reset options
			'section' => array(
			    'id'    => 'bizfit-reset-section',
			    'title' => esc_html__( 'Reset Options' ,'bizfit' ),
			),
			'fields' => array(
				array(
				    'id' 	      => 'bizfit-reset-options',
				    'type'        => 'bizfit-reset',
				    'settings'    => array_keys( $instance::$settings ),
				    'label'       => esc_html__( 'Reset', 'bizfit' ),
				    'description' => esc_html__( 'Reseting will delete all the data. Once bizfit-reset, you will not be able to get back those data.', 'bizfit' ),
				),
			),
		) );
	}
endif;

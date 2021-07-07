<?php
/**
 * Breadcrumb options in customizer 
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

if( !function_exists( 'bizfit_acb_breadcrumb' ) ):
	/**
	* Active callback function for breadcrumb action.
	*
	* @return boolen
	* @since 1.0.0
	*
	* @package BizFit WordPress theme
	*/
	function bizfit_acb_breadcrumb( $control ) {
		$value = $control->manager->get_setting( BizFit_Helper::with_prefix( 'show-breadcrumb' ) )->value();
		return $value == 1 ? true : false;
	}
endif;

/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_breadcrumb_options(){	
	BizFit_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'breadcrumb-section',
		    'title'    => esc_html__( 'Breadcrumb Options' ,'bizfit' ),
		    'priority' => 25
		),
		'fields'  => array(
			array(
			    'id'	  => 'show-breadcrumb',
			    'label'   => esc_html__( 'Show Breadcrumb', 'bizfit' ),
			    'default' => true,
			    'type'    => 'bizfit-toggle',
			)
		),			
	));
}
add_action( 'init', 'bizfit_breadcrumb_options' );

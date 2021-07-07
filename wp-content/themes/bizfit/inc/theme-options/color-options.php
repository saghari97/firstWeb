<?php
/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_color_options(){	
	BizFit_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'color-section',
		    'title'    => esc_html__( 'Color Options' ,'bizfit' ),
		    'priority' => 5
		),
		'fields'  =>array(
			array(
				'id'      => 'primary-color',
				'label'   => esc_html__( 'Primary Color', 'bizfit' ),
				'default' => '#003966',
				'type'    => 'bizfit-color-picker',
			),
			array(
				'id'      => 'body-paragraph-color',
				'label'   => esc_html__( 'Body Text Color', 'bizfit' ),
				'default' => '#5f5f5f',
				'type'    => 'bizfit-color-picker',
			)
		),			
	));
}
add_action( 'init', 'bizfit_color_options' );
<?php
/**
* Register Scroll to top options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_scroll_to_top_options(){
	BizFit_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'scroll-to-top-options',
			'title'  => esc_html__( 'Scroll To Top Options','bizfit' ),
		),
		'fields' => array(
			array(
				'id'      => 'enable-scroll-to-top',
				'label'   => esc_html__( 'Enable', 'bizfit' ),
				'default' => true,
				'type'    => 'bizfit-toggle'
			),
		),
	) );
}
add_action( 'init', 'bizfit_scroll_to_top_options' );
<?php
/**
* Register sidebar Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_sidebar_options(){
	BizFit_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'sidebar-options',
			'title'  => esc_html__( 'Sidebar Options','bizfit' ),
		),
		'fields' => array(
			# sb - Sidebar
			array(
			    'id'      => 'sidebar-position',
			    'label'   => esc_html__( 'Sidebar Position' , 'bizfit' ),
			    'type'    => 'bizfit-buttonset',
			    'default' => 'right-sidebar',
			    'choices' => array(
			        'left-sidebar'  => esc_html__( 'Left' , 'bizfit' ),
			        'right-sidebar' => esc_html__( 'Right' , 'bizfit' ),
			        'no-sidebar'    => esc_html__( 'None', 'bizfit' ),
			     )
			),
		),
	) );
}
add_action( 'init', 'bizfit_sidebar_options' );
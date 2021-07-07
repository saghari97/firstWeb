<?php
/**
* Register Go to pro button
*
* @since 1.0.1
*
* @package BizFit WordPress Theme
*/
function bizfit_go_to_pro(){
	BizFit_Customizer::set(array(
		'section' => array(
			'id'       => 'go-to-pro', 
			'type'     => 'bizfit-anchor',
			'title'    => esc_html__( 'BizFit Pro', 'bizfit' ),
			'url'      => esc_url( 'https://wpactivethemes.com/download/bizfit/' ),
			'priority' => 0
		)
	));
}
add_action( 'init', 'bizfit_go_to_pro' );
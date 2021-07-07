<?php

/**
 * Create Header options
 *
 * @since 1.0.2
 *
 * @package BizFit WordPress theme
 */

function bizfit_header_options(){  
    BizFit_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'header',
    		'title' => esc_html__( 'Header Options','bizfit' ),
            'priority' => 2
    	),
    	'fields' => array(
            array(
                'id'      => 'sticky-header',
                'label'   =>  esc_html__( 'Sticky Header', 'bizfit' ),
                'default' => 0,
                'type'    => 'bizfit-toggle',
            ),
            array(
                'id' => 'header-btn-1',
                'label' => esc_html__( 'Text', 'bizfit' ),
                'default' => '',
                'type' => 'text'
            ),
            array(
                'id' => 'link-btn-1',
                'label' => esc_html__( 'URL', 'bizfit' ),
                'type' => 'url'
            )
     	),
    ) );
}
add_action( 'init', 'bizfit_header_options' );
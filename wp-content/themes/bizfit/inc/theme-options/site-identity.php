<?php

/**
* Register Site Identity Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_site_identity(){
	BizFit_Customizer::set(array(
		# Site Identity > title size || title or logo
		'section' => array(
			'id' => 'title_tagline',
			'prefix' => false,
		),
		'fields'  => array(
		    array(
		        'id'	  	  => 'title-size',
		        'label'   	  => esc_html__( 'Title Size', 'bizfit' ),
		        'description' => esc_html__( 'The value is in px.' , 'bizfit' ),
		        'default' => array(
		    		'desktop' => 30,
		    		'tablet'  => 30,
		    		'mobile'  => 30,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type'    => 'bizfit-slider',
		    ),
	        array(
	            'id'	  	  => 'tagline-size',
	            'label'   	  => esc_html__( 'Tagline Size', 'bizfit' ),
	            'description' => esc_html__( 'The value is in px.' , 'bizfit' ),
	            'default' => array(
	        		'desktop' => 14,
	        		'tablet'  => 14,
	        		'mobile'  => 14,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 35,
	                'step'  => 1,
	            ),
	            'type'    => 'bizfit-slider',
	        )
		)	
	));
}
add_action( 'init', 'bizfit_site_identity' );
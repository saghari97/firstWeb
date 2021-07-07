<?php
/**
 * Inner banner options in customizer
 *
 * @return void
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

function bizfit_inner_banner_options(){ 
	BizFit_Customizer::set(array(
		# Theme Option > color options
		'section' => array(
		    'id'       => 'header_image',
		    'priority' => 27,
		    'prefix' => false,
		),
		'fields'  => array(
			array(
				'id'      	  => 'ib-blog-title',
				'label'   	  => esc_html__( 'Title' , 'bizfit' ),
				'default' 	  => esc_html__( 'Theme Preview', 'bizfit' ),
				'type'	  	  => 'text',
				'priority'    => 10,
			),
			array(
				'id'      	  => 'ib-blog-content',
				'label'   	  => esc_html__( 'Content' , 'bizfit' ),
				'default' 	  => esc_html__( 'Previewing Another WordPress Blog.', 'bizfit' ),
				'type'	  	  => 'textarea',
				'priority'    => 10,
			),
			array(
				'id'      	  => 'ib-blog-image',
				'label'   	  => esc_html__( 'Content Image' , 'bizfit' ),
				'type'	  	  => 'image',
				'priority'    => 10,
			),
			array( 
				'id' => 'ib-btn-1',
				'label' => esc_html__( 'Primary Button', 'bizfit' ),
				'type' => 'bizfit-horizontal-line'
			),
			array(
				'id'      	  => 'ib-btn-1-title',
				'label'   	  => esc_html__( 'Label' , 'bizfit' ),
				'default' 	  => '',
				'type'	  	  => 'text',
				'priority'    => 10,
			),
			array(
				'id'      	  => 'ib-btn-1-url',
				'label'   	  => esc_html__( 'URL' , 'bizfit' ),
				'default' 	  => '#',
				'type'	  	  => 'url',
				'priority'    => 10,
			),
			array( 
				'id' => 'ib-btn-2',
				'label' => esc_html__( 'Secondary Button', 'bizfit' ),
				'type' => 'bizfit-horizontal-line'
			),
			array(
				'id'      	  => 'ib-btn-2-title',
				'label'   	  => esc_html__( 'Label' , 'bizfit' ),
				'default' 	  => '',
				'type'	  	  => 'text',
				'priority'    => 10,
			),
			array(
				'id'      	  => 'ib-btn-2-url',
				'label'   	  => esc_html__( 'URL' , 'bizfit' ),
				'default' 	  => '#',
				'type'	  	  => 'url',
				'priority'    => 10,
			),
			array( 
				'id' => 'ib-color-options',
				'label' => esc_html__( 'Color Options', 'bizfit' ),
				'type' => 'bizfit-horizontal-line'
			),
			array(
			    'id'      => 'ib-title-color',
			    'label'   => esc_html__( 'Text Color' , 'bizfit' ),
			    'type'    => 'bizfit-color-picker',
			    'default' => '#ffffff',
			    'priority' => 10
			),
			array(
				'id' 	   => 'ib-background-color',
				'label'    => esc_html__( 'Overlay Color', 'bizfit' ),
				'default'  => 'rgba(0,0,0,0.48)',
				'type' 	   => 'bizfit-color-picker',
				'priority' => 10,
			),
			array( 
				'id' => 'ib-other-options',
				'label' => esc_html__( 'Other Options', 'bizfit' ),
				'type' => 'bizfit-horizontal-line'
			),
		    array(
		        'id'	  	  => 'ib-title-size',
		        'label'   	  => esc_html__( 'Font Size', 'bizfit' ),
		        'default' => array(
		    		'desktop' => 30,
		    		'tablet'  => 22,
		    		'mobile'  => 22,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'bizfit-slider',
		        'priority' => 20
		    ),
			array(
			    'id'      => 'ib-image-attachment', 
			    'label'   => esc_html__( 'Image Attachment' , 'bizfit' ),
			    'type'    => 'bizfit-buttonset',
			    'default' => 'banner-background-scroll',
			    'choices' => array(
			    	'banner-background-scroll'           => esc_html__( 'Scroll' , 'bizfit' ),
			    	'banner-background-attachment-fixed' => esc_html__( 'Fixed' , 'bizfit' ),
			    ),
		        'priority' => 60
			),
			array(
			    'id'      	=> 'ib-height',
			    'label'   	=> esc_html__( 'Height (px)', 'bizfit' ),
			    'type'    	=> 'bizfit-slider',
	            'default' => array(
	        		'desktop' => 550,
	        		'tablet'  => 550,
	        		'mobile'  => 550,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 1000,
	                'step'  => 1,
	            ),
			),
		    'priority' => 70
		),
	) );
}
add_action( 'init', 'bizfit_inner_banner_options' );
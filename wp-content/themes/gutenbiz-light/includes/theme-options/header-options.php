<?php
/**
* Register header options
*
* @return void
* @since 1.0.0
*
* @package Gutenbiz Light
*/

if( !function_exists( 'gutenbiz_acb_header_btn' ) ):
	/**
	* Active callback function for header function
	*
	* @return boolen
	* @since 1.0.0
	*
	* @package Gutenbiz Light
	*/
	function gutenbiz_acb_header_btn( $control ) {
		$value = $control->manager->get_setting( Gutenbiz_Helper::with_prefix( 'header-button' ) )->value();
		return $value;
	}
endif;

function gutenbiz_light_header_options(){

	$fields = array();
	if( !Gutenbiz_Light_Helper::is_advanced_header_exists() ){
		$fields[] = array(
			'id'      => 'header-bg-color',
			'label'   => esc_html__( 'Background Color', 'gutenbiz-light' ),
			'default' => '#0099f7',
			'type'    => 'color-picker',
		);
	}

	$fields = array_merge( $fields, array(
		array(
			'id'      => 'header-button',
			'label'   => esc_html__( 'Show Button', 'gutenbiz-light' ),
			'default' => false,
			'type'    => 'toggle'
		),
		array(
			'id'      => 'header-button-color',
			'label'   => esc_html__( 'Button Background Color', 'gutenbiz-light' ),
			'default' => '#0099f7',
			'active_callback' => 'acb_header_btn',
			'type'    => 'color-picker',
		),
		array(
			'id'      => 'header-button-hvr-color',
			'label'   => esc_html__( 'Button Hover Background Color', 'gutenbiz-light' ),
			'default' => '#000000',
			'active_callback' => 'acb_header_btn',
			'type'    => 'color-picker',
		),
		array(
			'id'      => 'header-button-text-color',
			'label'   => esc_html__( 'Button Text Color', 'gutenbiz-light' ),
			'default' => '#ffffff',
			'active_callback' => 'acb_header_btn',
			'type'    => 'color-picker',
		),
		array(
			'id'      => 'header-button-text-hvr-color',
			'label'   => esc_html__( 'Button Hover Text Color', 'gutenbiz-light' ),
			'default' => '#0099f7',
			'active_callback' => 'acb_header_btn',
			'type'    => 'color-picker',
		),
		array(
			'id'      => 'header-button-text',
			'label'   => esc_html__( 'Button Text', 'gutenbiz-light' ),
			'default' => esc_html__( 'Buy now', 'gutenbiz-light' ),
			'active_callback' => 'acb_header_btn',
			'type'    => 'text',
		    'partial' =>	array(
		    	'selector' => 'a.gutenbiz-header-button'
			)
		),
		array(
			'id' => 'header-button-link',
			'label' => esc_html__( 'Button Link', 'gutenbiz-light' ),
			'active_callback' => 'acb_header_btn',
			'type' => 'url'
		),
		array(
		    'id'      		  => 'header-button-icon',
		    'label'   		  => esc_html__( 'Button Icon', 'gutenbiz-light' ),
		    'type'    		  => 'icon',
		    'default' 		  => 'f105',
			'active_callback' => 'acb_header_btn',
		    'choices' 	=> array(
		        'f105' => 'fa fa-angle-right',
		        'f0a9' => 'fa fa-arrow-circle-right',
		        'f061' => 'fa fa-arrow-right',
		        'f178' => 'fa fa-long-arrow-right',
		        'f101' => 'fa fa-angle-double-right',
		    )
		),
	));

	Gutenbiz_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'main-header',
		    'title' => esc_html__( 'Header Options', 'gutenbiz-light' ),
		    'priority'    => 2
		),
		# Theme Option > Header > settings
		'fields' => $fields
	));
}
add_action( 'init', 'gutenbiz_light_header_options' );
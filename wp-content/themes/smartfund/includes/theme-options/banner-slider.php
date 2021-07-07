<?php

if( !function_exists( 'bizsmart_acb_type_cat' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Smartfund WordPress Theme
	*/
	function bizsmart_acb_type_cat( $control ){
		$enable = $control->manager->get_setting( Bizsmart_Helper::with_prefix( 'show-slider' ) )->value();
		$cat = $control->manager->get_setting( Bizsmart_Helper::with_prefix( 'slider-type' ) )->value();
		$val = $enable && 'category' == $cat;
		return $val;
	}
endif;

if( !function_exists( 'bizsmart_acb_slider' ) ):
	/**
	* Active callback function of slider
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Smartfund WordPress Theme
	*/
	function bizsmart_acb_slider( $control ){
		$val = $control->manager->get_setting( Bizsmart_Helper::with_prefix( 'show-slider' ) )->value();
		return $val;
	}
endif;

/**
* Banner Slider Options
*
* @return void
* @since 1.0.0
*
* @package Smartfund WordPress Theme
*/
function smartfund_slider_options(){

	BizSmart_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'slider',
		    'title' => esc_html__( 'Home Page Slider', 'smartfund' ),
		    'priority' => 0
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
			    'id'	  => 'show-slider',
			    'label'   => esc_html__( 'Enable Slider', 'smartfund' ),
			    'default' => true,
			    'type'    => 'bizsmart-toggle',
			),
			array(
				'id' => 'slider-more-text',
				'label' => esc_html__( 'Read More Text', 'smartfund' ),
				'default' => esc_html__( 'Read More', 'smartfund' ),
				'active_callback' => 'acb_slider',
				'type' => 'text'
			),
			array(
			    'id'      => 'slider-type',
			    'label'   => esc_html__( 'Get Content From', 'smartfund' ),
			    'type'    => 'bizsmart-buttonset',
			    'default' => 'category',
			    'active_callback' => 'acb_slider',
			    'choices' => array(
			        'post' => esc_html__( 'Recent Post', 'smartfund' ),
			        'category'  => esc_html__( 'Category', 'smartfund' ),
			    )
			),
			array(
				'id' => 'dark-cat-post',
				'label' => esc_html__( 'Select Category', 'smartfund' ),
				'default' => 0,
				'type' => 'smartfund-category-dropdown',
				'active_callback' => 'acb_type_cat'
			)
		)
	));
}
add_action( 'init', 'smartfund_slider_options' );
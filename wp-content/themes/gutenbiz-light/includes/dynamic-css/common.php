<?php
  /**
  * Register dynamic css
  *
  * @since 1.0.0
  *
  * @package Gutenbiz Light

  */
function gutenbiz_light_common_css(){
 	$style = array(
 		array(
 			'selector' => Gutenbiz_Helper::with_prefix_selector( '%s-header-style-light %s-top-bar-content' ),
 			'props'	   => array(
 				'background'	 => 'header-bg-color',
 			),
 		),
 		array(
 			'selector' => 'a.gutenbiz-header-button',
 			'props'	   => array(
 				'background'	 => 'header-button-color',
 				'color'	 => 'header-button-text-color',
 			),
 		),
 		array(
 			'selector' => 'a.gutenbiz-header-button:hover',
 			'props'	   => array(
 				'background'	 => 'header-button-hvr-color',
 				'color'	 => 'header-button-text-hvr-color',
 			),
 		),
 		array(
 			'selector'  => 'a.gutenbiz-header-button:after',
 			'props'		=> array(
 				'content' => 'header-button-icon',
 			),
 		),
 		array(
 			'selector'  => Gutenbiz_Helper::with_prefix_selector( '%s-post .entry-content-stat + a' ),
 			'props'		=> array(
 				'background'	=> array(
 					'value'	=> 'readmore-bg-color',
 					'unit'	=> '!important',
 					'customizer' => true
 				),
 				'color'	=> array(
 					'value'	=> 'readmore-text-color',
 					'unit'	=> '!important',
 					'customizer' => true
 				)
 			),
 		),
 		array(
 			'selector'  => Gutenbiz_Helper::with_prefix_selector( '%s-post .entry-content-stat + a:hover' ),
 			'props'		=> array(
 				'color'	=> array(
 					'value'	=> 'readmore-text-hvr-color',
 					'unit'	=> '!important',
 					'customizer' => true
 				)
 			),
 		),
 	);

 	Gutenbiz_Css::add_styles( $style, 'md' );
 }
 add_action( 'init', 'gutenbiz_light_common_css' );
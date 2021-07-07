<?php

/**
 * Register dynamic css for responsive devices
 *
 * @since 1.0.0
 *
 * @package Gutenbiz Light
 */
function gutenbiz_light_responsive_device_css(){
	foreach( array( 'md' => 'desktop', 'sm' => 'tablet', 'xs' => 'mobile' ) as $size => $device ){

		Gutenbiz_Css::add_styles( array(
			array(
				'selector' => '.site-branding img',
				'props' => array(
					'max-width' => 'logo-size-' . $device,
				)
			)
		), $size );
	}
}

add_action( 'init', 'gutenbiz_light_responsive_device_css' );
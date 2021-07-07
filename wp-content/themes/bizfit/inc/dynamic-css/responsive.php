<?php
/**
 * Register dynamic css for responsive devices
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */
function bizfit_responsive_device_css(){
	foreach( array( 'md' => 'desktop', 'sm' => 'tablet', 'xs' => 'mobile' ) as $size => $device ){

		BizFit_Css::add_styles( array(
			#Typography
			array(
				'selector'  => 'body, .footer-bottom-section a, .footer-bottom-section span',
				'props'		=> array(
					'font-size'	  => 'body-font-size-' . $device,
				),
			),
			# Inner Banner Options
			array(
				'selector'  => BizFit_Helper::with_prefix_selector( '%s-inner-banner-wrapper %s-inner-banner .entry-title' ),
				'props'		=> array(
					'font-size' => 'ib-title-size-' . $device,
				),
			),
			array(
				'selector' => BizFit_Helper::with_prefix_selector( '%s-inner-banner-wrapper' ),
				'props' => array(
					'min-height' => 'ib-height-' . $device,
				),
			),
			array(
				'selector'  => '.site-branding .site-title',
				'props'		=> array(
					'font-size' => 'title-size-' . $device,
				),
			),
			array(
				'selector'  => '.site-branding .site-description',
				'props'		=> array(
					'font-size' => 'tagline-size-' . $device,
				),
			)
		), $size );
	}
}
add_action( 'init', 'bizfit_responsive_device_css' );

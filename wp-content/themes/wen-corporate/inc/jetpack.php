<?php
/**
 * Jetpack Compatibility File.
 *
 * @package WEN_Corporate
 */

/**
 * Add theme support for Jetpack.
 */
function wen_corporate_jetpack_setup() {

	$footer_widgets = wen_corporate_get_option( 'footer_widgets' );
	$scroll_args = array(
		'container' => 'main',
		'footer'    => 'page',
	);
	if ( absint( $footer_widgets ) > 0 ) {
		$scroll_args['footer_widgets'] = true;
	}
	add_theme_support( 'infinite-scroll', $scroll_args );

}
add_action( 'after_setup_theme', 'wen_corporate_jetpack_setup' );

<?php
/**
 * Theme functions and definitions
 *
 * @package the_event_dark
 */ 


if ( ! function_exists( 'the_event_dark_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function the_event_dark_enqueue_styles() {
		wp_enqueue_style( 'the-event-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'the-event-dark-style', get_stylesheet_directory_uri() . '/style.css', array( 'the-event-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'the_event_dark_enqueue_styles', 99 );


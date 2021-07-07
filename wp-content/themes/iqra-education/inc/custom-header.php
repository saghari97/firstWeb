<?php
/**
 * Custom header implementation
 */

function iqra_education_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'iqra_education_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 230,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'iqra_education_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'iqra_education_custom_header_setup' );

if ( ! function_exists( 'iqra_education_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see iqra_education_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'iqra_education_header_style' );
function iqra_education_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$iqra_education_custom_css = "
        #masthead, .page-template-home-custom #masthead{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'iqra-education-basic-style', $iqra_education_custom_css );
	endif;
}
endif; // iqra_education_header_style
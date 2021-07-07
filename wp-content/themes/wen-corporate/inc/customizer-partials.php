<?php
/**
 * Customizer partials.
 *
 * @package WEN_Corporate
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.8.0
 *
 * @return void
 */
function wen_corporate_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site description for the selective refresh partial.
 *
 * @since 1.8.0
 *
 * @return void
 */
function wen_corporate_customize_partial_blogdescription() {

	bloginfo( 'description' );

}


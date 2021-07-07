<?php
/**
 * Breadcrumb options in customizer 
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

if( !function_exists( 'bizfit_acb_author_position' ) ):
    /**
    * Active callback function for Author
    *
    * @return boolen
    * @since 1.0.0
    *
    * @package BizFit WordPress theme
    */
    function bizfit_acb_author_position( $control ) {
        $value = $control->manager->get_setting( BizFit_Helper::with_prefix( 'post-author' ) )->value();
        return $value == 1 ? true : false;
    }
endif;


/**
 * Create options for posts.
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress theme
 */

function bizfit_post_options(){  
    BizFit_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'post-options',
    		'title' => esc_html__( 'Post Options','bizfit' ),
    	),
    	'fields' => array(
            array(
                'id'      => 'post-category',
                'label'   =>  esc_html__( 'Show Categories', 'bizfit' ),
                'default' => 1,
                'type'    => 'bizfit-toggle',
            ),
            array(
                'id'      => 'post-date',
                'label'   => esc_html__( 'Show Date', 'bizfit' ),
                'default' => 1,
                'type'    => 'bizfit-toggle',
            ),
            array(
                'id'      => 'post-author',
                'label'   =>  esc_html__( 'Show Author', 'bizfit' ),
                'default' => 1,
                'type'    => 'bizfit-toggle',
            ),
            array(
                'id'      => 'excerpt_length',
                'label'   => esc_html__( 'Excerpt Length', 'bizfit' ),
                'default' => 15,
                'type'    => 'number',
            ),
            array(
                'id'      => 'read-more-text',
                'label'   => esc_html__( 'Read More Text', 'bizfit' ),
                'default' => esc_html__( 'Continue Reading', 'bizfit' ),
                'type'    => 'text'
            ),
            array(
                'id' => 'post-per-row',
                'label' => esc_html__( 'Post Per Row', 'bizfit' ),
                'type' => 'bizfit-buttonset',
                'default' => '2',
                'choices' => array(
                    '1' => esc_html__( '1', 'bizfit' ),
                    '2' => esc_html__( '2', 'bizfit' ),
                    '3' => esc_html__( '3', 'bizfit' ),
                    '4' => esc_html__( '4', 'bizfit' )
                )
            ),
     	),
    ) );
}
add_action( 'init', 'bizfit_post_options' );
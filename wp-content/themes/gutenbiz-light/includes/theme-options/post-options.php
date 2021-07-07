<?php
/**
 * Create options for posts.
 *
 * @since 1.0.0
 *
 * @package Gutenbiz Light
 */

if( !function_exists( 'gutenbiz_acb_readmore_btn' ) ):
    /**
    * Active callback function for readmore button
    *
    * @return boolen
    * @since 1.0.0
    *
    * @package Gutenbiz Light
    */
    function gutenbiz_acb_readmore_btn( $control ) {
        $value = $control->manager->get_setting( Gutenbiz_Helper::with_prefix( 'readmore-status' ) )->value();
        return $value;
    }
endif;

function gutenbiz_light_post_options(){  
    Gutenbiz_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'post-options',
    		'title' => esc_html__( 'Post Options','gutenbiz-light' ),
    	),
    	'fields' => array(
            array(
                'id' => 'blog-layouts-style',
                'label' => esc_html__( 'Blog Layouts Style', 'gutenbiz-light' ),
                'default' => 'blog-grid',
                'type' => 'buttonset',
                'choices' => array(
                    'blog-grid' => esc_html__( 'Grid', 'gutenbiz-light' ),
                    'blog-list' => esc_html__( 'List', 'gutenbiz-light' )
                )
            ),
            array(
                'id' => 'readmore-status',
                'label' => esc_html__( 'Show Read More Button', 'gutenbiz-light' ),
                'default' => true,
                'type' => 'toggle'
            ),
            array(
                'id'      => 'readmore-bg-color',
                'label'   => esc_html__( 'Read More Background Color', 'gutenbiz-light' ),
                'active_callback' => 'acb_readmore_btn',
                'default' => '#707070',
                'type'    => 'color-picker',
            ),
            array(
                'id'      => 'readmore-text-color',
                'label'   => esc_html__( 'Read More Text Color', 'gutenbiz-light' ),
                'active_callback' => 'acb_readmore_btn',
                'default' => '#ffffff',
                'type'    => 'color-picker',
            ),
            array(
                'id'      => 'readmore-text-hvr-color',
                'label'   => esc_html__( 'Read More Text Hover Color', 'gutenbiz-light' ),
                'active_callback' => 'acb_readmore_btn',
                'default' => '#000000',
                'type'    => 'color-picker',
            ),
     	),
    ) );
}
add_action( 'init', 'gutenbiz_light_post_options' );
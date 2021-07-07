<?php
/**
* Register typography Options
*
* @return void
* @since 1.0.0
*
* @package BizFit WordPress theme
*/
function bizfit_typography_options(){ 

    $message = esc_html__( 'The value is in px.', 'bizfit' );
    BizFit_Customizer::set(array(
        # Theme option
        'panel' => array(
            'id'       => 'panel',
            'title'    => esc_html__( 'BizFit Options', 'bizfit' ),
            'priority' => 10,
        ),
        # Theme Option > Header
        'section' => array(
            'id'    => 'typography',
            'title' => esc_html__( 'Typography','bizfit' ),
            'priority' => 5
        ),
        # Theme Option > Header > settings
        'fields' => array(
            array(
                'id'      => 'body-font',
                'label'   =>  esc_html__( 'Body Font Family.', 'bizfit' ),
                'description' => esc_html__( 'Defaults to Poppins.', 'bizfit' ),
                'default' => 'font-11',
                'type'    => 'select',
                'choices' => BizFit_Theme::get_font_family(),
            ),
            array(
                'id'          => 'body-font-size',
                'label'       => esc_html__( 'Body Font Size.', 'bizfit' ),
                'description' => $message . ' ' . esc_html__( 'Defaults to 15px.', 'bizfit' ),
                'type'        => 'bizfit-slider',
                'default' => array(
                    'desktop' => 15,
                    'tablet'  => 15,
                    'mobile'  => 15,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 40,
                    'step'  => 1,
                ),
            )
        )
    ));
}
add_action( 'init', 'bizfit_typography_options' );
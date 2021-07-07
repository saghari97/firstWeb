<?php
/**
 * Creates option for footer
 *
 * Register footer Options
 *
 * @return void
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

function bizfit_footer_options(){
	BizFit_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Footer Options
		'section' => array(
		    'id'    => 'footer',
		    'title' => esc_html__( 'Footer Options','bizfit' ),
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
				'id'      => 'enable-footer',
				'label'   => esc_html__( 'Enable Footer', 'bizfit' ),
				'default' => true,
				'description' => esc_html__( 'If this option is disabled, footer will disabled on entire site. Or you can enable this and manage via pages setting for respective page', 'bizfit' ),
				'type'    => 'bizfit-toggle'
			),
			array(
			    'id'      	  => 'layout-footer',
			    'label'   	  => esc_html__( 'Footer Layout', 'bizfit' ),
			    'description' => esc_html__( 'Add widget to display in footer.', 'bizfit' ),
			    'type'    	  => 'bizfit-radio-image',
			    'default' 	  => '4',
			    'choices' 	  => array(
			        '1' => array(
			            'label' => esc_html__( 'One widget', 'bizfit' ),
						'url'   => BizFit_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-1.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M100,0V50H0V0Z"></path></svg>'
			        ),
			        '2' => array(
			            'label' => esc_html__( 'Two widget', 'bizfit' ),
						'url'   => BizFit_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-2.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M49,0V50H0V0Z M100,0V50H51V0Z"></path></svg>'
			        ),
			        '3' => array(
			            'label' => esc_html__( 'Thee widget', 'bizfit' ),
						'url'   => BizFit_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-3.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M32,0V50H0V0Z M66,0V50H34V0Z M100,0V50H68V0Z"></path></svg>'
			        ),
			        '4' => array(
			            'label' => esc_html__( 'Four widget', 'bizfit' ),
						'url'   => BizFit_Helper::get_theme_uri( '/classes/customizer/assets/images/footer-4.png' ),
						'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M23.5,0V50H0V0Z M49,0V50H25.5V0Z M74.5,0V50H51V0Z M100,0V50H76.5V0Z"></path></svg>'
			        ) 
			    )
			),
			array(
				'id'      => 'footer-copyright-text',
				'label'   => esc_html__( 'Copyright Text', 'bizfit' ),
				'default' => esc_html__( 'Copyright &copy; All right reserved', 'bizfit' ),
				'type'    => 'textarea',
			    'partial' =>	array(
			    	'selector'	=>	'span#bizfit-copyright'
				)
			),
			array(
				'id'      => 'footer-social-menu',
				'label'   => esc_html__( 'Show Social Menu', 'bizfit' ),
				'description' => esc_html__( 'Please add Social menus for enabling Social menus. Go to Menus for setting up', 'bizfit' ),
				'default' => true,
				'type'    => 'bizfit-toggle',
			)
		)
	));
}
# use widgets_init hook as we need default value of layout-footer while registering sidebar.
# init hook is too late
add_action( 'widgets_init', 'bizfit_footer_options' );
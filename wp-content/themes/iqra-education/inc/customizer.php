<?php
/**
 * Iqra Education: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function iqra_education_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'iqra_education_custom_controls' );

function iqra_education_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'iqra_education_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'iqra-education' ),
	    'description' => __( 'Description of what this panel does.', 'iqra-education' ),
	) );

	// font array
	$iqra_education_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'iqra_education_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'iqra-education' ),
		'panel' => 'iqra_education_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'iqra_education_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_paragraph_color', array(
		'label' => __('Paragraph Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('iqra_education_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_paragraph_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'Paragraph Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	$wp_customize->add_setting('iqra_education_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'iqra_education_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_atag_color', array(
		'label' => __('"a" Tag Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('iqra_education_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_atag_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( '"a" Tag Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'iqra_education_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_li_color', array(
		'label' => __('"li" Tag Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('iqra_education_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_li_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( '"li" Tag Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h1_color', array(
		'label' => __('H1 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h1_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'H1 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('iqra_education_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h1_font_size',array(
		'label'	=> __('H1 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h2_color', array(
		'label' => __('h2 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h2_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'h2 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('iqra_education_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h2_font_size',array(
		'label'	=> __('h2 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h3_color', array(
		'label' => __('h3 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h3_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'h3 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('iqra_education_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h3_font_size',array(
		'label'	=> __('h3 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h4_color', array(
		'label' => __('h4 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h4_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'h4 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('iqra_education_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h4_font_size',array(
		'label'	=> __('h4 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h5_color', array(
		'label' => __('h5 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h5_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'h5 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('iqra_education_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h5_font_size',array(
		'label'	=> __('h5 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'iqra_education_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_h6_color', array(
		'label' => __('h6 Color', 'iqra-education'),
		'section' => 'iqra_education_typography',
		'settings' => 'iqra_education_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('iqra_education_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'iqra_education_h6_font_family', array(
	    'section'  => 'iqra_education_typography',
	    'label'    => __( 'h6 Fonts','iqra-education'),
	    'type'     => 'select',
	    'choices'  => $iqra_education_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('iqra_education_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_h6_font_size',array(
		'label'	=> __('h6 Font Size','iqra-education'),
		'section'	=> 'iqra_education_typography',
		'setting'	=> 'iqra_education_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('iqra_education_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','iqra-education'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','iqra-education'),
            'Background' => __('Background','iqra-education'),
        ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'iqra_education_theme_color_option', array( 
		'panel' => 'iqra_education_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'iqra-education' ) )
	);

  	$wp_customize->add_setting( 'iqra_education_theme_color_first', array(
	    'default' => '#fdd333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_theme_color_first', array(
  		'label' =>  __( 'First Color Option', 'iqra-education' ),
	    'description' => __('One can change complete theme color on just one click.', 'iqra-education'),
	    'section' => 'iqra_education_theme_color_option',
	    'settings' => 'iqra_education_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'iqra_education_theme_color_second', array(
	    'default' => '#3c3e79',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_theme_color_second', array(
  		'label' => __( 'Second Color Option', 'iqra-education' ),
	    'description' => __('One can change complete theme color on just one click.', 'iqra-education'),
	    'section' => 'iqra_education_theme_color_option',
	    'settings' => 'iqra_education_theme_color_second',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'iqra_education_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'iqra-education' ),
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','iqra-education'),
       'section' => 'iqra_education_shop_page_options',
    ));

    $wp_customize->add_setting('iqra_education_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','iqra-education'),
       'section' => 'iqra_education_shop_page_options',
    ));

	$wp_customize->add_setting( 'iqra_education_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'iqra_education_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'iqra_education_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'iqra-education' ),
		'section'  => 'iqra_education_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('iqra_education_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));	
	$wp_customize->add_control('iqra_education_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','iqra-education'),
		'section'	=> 'iqra_education_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control( 'iqra_education_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control( 'iqra_education_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'iqra_education_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'iqra_education_shop_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','iqra-education' ),
		'section' => 'iqra_education_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

  	//Layout Settings
	$wp_customize->add_section( 'iqra_education_width_layout', array(
    	'title'      => __( 'Layout Settings', 'iqra-education' ),
		'panel' => 'iqra_education_panel_id'
	) );

	// show/hide search
	$wp_customize->add_setting( 'iqra_education_show_hide_search',array(
		'default' => true,
      	'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ) );
    $wp_customize->add_control('iqra_education_show_hide_search',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Search','iqra-education' ),
        'section' => 'iqra_education_width_layout'
    ));

    $wp_customize->add_setting('iqra_education_search_icon_changer',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_search_icon_changer',array(
		'label'	=> __('Search Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_width_layout',
		'type'		=> 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'iqra_education_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ) );
    $wp_customize->add_control('iqra_education_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','iqra-education' ),
        'section' => 'iqra_education_width_layout'
    ));

	$wp_customize->add_setting('iqra_education_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','iqra-education'),
       'section' => 'iqra_education_width_layout'
    ));

    $wp_customize->add_setting('iqra_education_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','iqra-education'),
        'section' => 'iqra_education_width_layout',
        'choices' => array(
            'Default' => __('Default','iqra-education'),
            'Circle' => __('Circle','iqra-education'),
            'Two Circle' => __('Two Circle','iqra-education')
        ),
	) );

    $wp_customize->add_setting( 'iqra_education_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'iqra-education'),
	    'section' => 'iqra_education_width_layout',
	    'settings' => 'iqra_education_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'iqra_education_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'iqra-education'),
	    'section' => 'iqra_education_width_layout',
	    'settings' => 'iqra_education_loader_background_color',
  	)));

	$wp_customize->add_setting('iqra_education_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','iqra-education'),
        'description' => __('Here you can change the Width layout. ','iqra-education'),
        'section' => 'iqra_education_width_layout',
        'choices' => array(
            'Default' => __('Default','iqra-education'),
            'Wide Layout' => __('Wide Layout','iqra-education'),
            'Box Layout' => __('Box Layout','iqra-education'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'iqra_education_button_option', array(
		'title' => __('Button','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));

	$wp_customize->add_setting('iqra_education_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('iqra_education_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_left_right_padding',array(
		'label'	=> __('Left and Right Padding','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	) );
	$wp_customize->add_control( 'iqra_education_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','iqra-education' ),
		'section'     => 'iqra_education_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar settings
	$wp_customize->add_section( 'iqra_education_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'iqra-education' ),
		'panel' => 'iqra_education_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('iqra_education_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','iqra-education'),
        'section' => 'iqra_education_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','iqra-education'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','iqra-education'),
            'Right Sidebar' => __('Right Sidebar','iqra-education'),
            'One Column' => __('Full Column','iqra-education'),
            'Grid Layout' => __('Grid Layout','iqra-education')
        ),
	) );

	$wp_customize->add_setting('iqra_education_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','iqra-education'),
        'section' => 'iqra_education_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','iqra-education'),
            'Right Sidebar' => __('Right Sidebar','iqra-education'),
            'One Column' => __('Full Column','iqra-education')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('iqra_education_contact_details',array(
		'title'	=> __('Topbar Section','iqra-education'),
		'description'	=> __('Add Header Content here','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'iqra_education_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ) );
    $wp_customize->add_control('iqra_education_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','iqra-education' ),
        'section' => 'iqra_education_contact_details'
    ));

	$wp_customize->add_setting('iqra_education_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_phone_number'
	));
	$wp_customize->add_control('iqra_education_contact_number',array(
		'label'	=> __('Add Phone Number','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_phone_icon_changer',array(
		'default'	=> 'fa fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_phone_icon_changer',array(
		'label'	=> __('Phone Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('iqra_education_email_address',array(
		'label'	=> __('Add Email','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_email_icon_changer',array(
		'default'	=> 'far fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_email_icon_changer',array(
		'label'	=> __('Email Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_time',array(
		'label'	=> __('Add Time','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_time_icon_changer',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_time_icon_changer',array(
		'label'	=> __('Time Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_facebook_url',array(
		'label'	=> __('Add Facebook link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_twitter_url',array(
		'label'	=> __('Add Twitter link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_twitter_icon_changer',array(
		'label'	=> __('Twitter Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));
	
	$wp_customize->add_setting('iqra_education_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_youtube_url',array(
		'label'	=> __('Add Youtube link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_youtube_icon_changer',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_youtube_icon_changer',array(
		'label'	=> __('Youtube Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('iqra_education_linkedin_url',array(
		'label'	=> __('Add Linkedin link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_linkedin_icon_changer',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_linkedin_icon_changer',array(
		'label'	=> __('Linkedin Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('iqra_education_instagram_url',array(
		'label'	=> __('Add Instagram link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_instagram_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_instagram_icon_changer',array(
		'label'	=> __('Instagram Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_login_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('iqra_education_login_url',array(
		'label'	=> __('Add Login Button URL','iqra-education'),
		'section'=> 'iqra_education_contact_details',
		'type'=> 'url'
	));

	$wp_customize->add_setting('iqra_education_login_icon_changer',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_login_icon_changer',array(
		'label'	=> __('Login Button Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_contact_details',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'iqra_education_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'iqra-education' ),
		'priority'   => null,
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','iqra-education'),
		'section'=> 'iqra_education_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('iqra_education_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
    ));
    $wp_customize->add_control('iqra_education_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','iqra-education'),
        'section' => 'iqra_education_navigation_menu',
        'choices' => array(
            'Default' => __('Default','iqra-education'),
            'Uppercase' => __('Uppercase','iqra-education'),
        ),
	) );

	$wp_customize->add_setting('iqra_education_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
    ));
    $wp_customize->add_control('iqra_education_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','iqra-education'),
        'section' => 'iqra_education_navigation_menu',
        'choices' => array(
            'Default' => __('Default','iqra-education'),
            'Normal' => __('Normal','iqra-education'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'iqra_education_slider' , array(
    	'title'      => __( 'Slider Settings', 'iqra-education' ),
		'priority'   => null,
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
	));
	$wp_customize->add_control('iqra_education_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','iqra-education'),
      	'section' => 'iqra_education_slider',
	));

	$wp_customize->add_setting('iqra_education_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','iqra-education'),
       'section' => 'iqra_education_slider'
    ));

    $wp_customize->add_setting('iqra_education_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','iqra-education'),
       'section' => 'iqra_education_slider'
    ));

    $wp_customize->add_setting('iqra_education_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','iqra-education'),
       'section' => 'iqra_education_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'iqra_education_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'iqra_education_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'iqra_education_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'iqra-education' ),
			'section'  => 'iqra_education_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'iqra_education_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'iqra_education_sanitize_number_range',
	));
	$wp_customize->add_control( 'iqra_education_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','iqra-education' ),
		'section' => 'iqra_education_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('iqra_education_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_slider_height_option',array(
		'label'	=> __('Slider Height Option','iqra-education'),
		'section'=> 'iqra_education_slider',
		'type'=> 'number'
	));

	//content layout
    $wp_customize->add_setting('iqra_education_slider_content_option',array(
    'default' => 'Left',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','iqra-education'),
        'section' => 'iqra_education_slider',
        'choices' => array(
            'Center' => __('Center','iqra-education'),
            'Left' => __('Left','iqra-education'),
            'Right' => __('Right','iqra-education'),
        ),
	) );

	$wp_customize->add_setting('iqra_education_slider_button_text',array(
		'default'=> __('READ MORE','iqra-education'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_slider_button_text',array(
		'label'	=> __('Slider Button Text','iqra-education'),
		'section'=> 'iqra_education_slider',
		'type'=> 'text'
	));

    //Slider excerpt
	$wp_customize->add_setting( 'iqra_education_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'iqra_education_sanitize_number_range',
	) );
	$wp_customize->add_control( 'iqra_education_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','iqra-education' ),
		'section'     => 'iqra_education_slider',
		'type'        => 'range',
		'settings'    => 'iqra_education_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('iqra_education_slider_opacity_color',array(
      'default'              => 0.3,
      'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control( 'iqra_education_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','iqra-education' ),
	'section'     => 'iqra_education_slider',
	'type'        => 'select',
	'settings'    => 'iqra_education_slider_opacity_color',
	'choices' => array(
		'0' =>  esc_attr('0','iqra-education'),
		'0.1' =>  esc_attr('0.1','iqra-education'),
		'0.2' =>  esc_attr('0.2','iqra-education'),
		'0.3' =>  esc_attr('0.3','iqra-education'),
		'0.4' =>  esc_attr('0.4','iqra-education'),
		'0.5' =>  esc_attr('0.5','iqra-education'),
		'0.6' =>  esc_attr('0.6','iqra-education'),
		'0.7' =>  esc_attr('0.7','iqra-education'),
		'0.8' =>  esc_attr('0.8','iqra-education'),
		'0.9' =>  esc_attr('0.9','iqra-education')
	), ));

	$wp_customize->add_setting('iqra_education_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','iqra-education'),
       'section' => 'iqra_education_slider'
    ));

    $wp_customize->add_setting('iqra_education_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'iqra_education_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'iqra-education'),
		'section'  => 'iqra_education_slider',
		'settings' => 'iqra_education_color_slider_image_overlay',
	)));

	//About
	$wp_customize->add_section('iqra_education_about',array(
		'title'	=> __('About Us','iqra-education'),
		'description'	=> __('Add About Us Section below.','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));

	$wp_customize->add_setting('iqra_education_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_title',array(
		'label'	=> __('Section Title','iqra-education'),
		'section'=> 'iqra_education_about',
		'setting'=> 'iqra_education_title',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'iqra_education_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'iqra_education_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'iqra_education_about_page', array(
		'label'    => __( 'Select About Page', 'iqra-education' ),
		'section'  => 'iqra_education_about',
		'type'     => 'dropdown-pages'
	) );

	//no Result Setting
	$wp_customize->add_section('iqra_education_no_result_setting',array(
		'title'	=> __('No Results Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));	

	$wp_customize->add_setting('iqra_education_no_search_result_title',array(
		'default'=> __('Nothing Found','iqra-education'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_no_search_result_title',array(
		'label'	=> __('No Search Results Title','iqra-education'),
		'section'=> 'iqra_education_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('iqra_education_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','iqra-education'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_no_search_result_content',array(
		'label'	=> __('No Search Results Content','iqra-education'),
		'section'=> 'iqra_education_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('iqra_education_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));	

	$wp_customize->add_setting('iqra_education_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','iqra-education'),
		'section'=> 'iqra_education_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('iqra_education_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','iqra-education'),
		'section'=> 'iqra_education_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('iqra_education_mobile_media',array(
		'title'	=> __('Mobile Media Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));

	$wp_customize->add_setting('iqra_education_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','iqra-education'),
       'section' => 'iqra_education_mobile_media'
    ));

	$wp_customize->add_setting('iqra_education_enable_disable_topbar',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','iqra-education'),
       'section' => 'iqra_education_mobile_media'
    ));

    $wp_customize->add_setting('iqra_education_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','iqra-education'),
       'section' => 'iqra_education_mobile_media'
    ));

    $wp_customize->add_setting('iqra_education_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','iqra-education'),
       'section' => 'iqra_education_mobile_media'
    ));

    $wp_customize->add_setting('iqra_education_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','iqra-education'),
       'section' => 'iqra_education_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('iqra_education_blog_post',array(
		'title'	=> __('Post Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));	

	$wp_customize->add_setting('iqra_education_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','iqra-education'),
       'section' => 'iqra_education_blog_post'
    ));

    $wp_customize->add_setting('iqra_education_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('iqra_education_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','iqra-education'),
       'section' => 'iqra_education_blog_post'
    ));

    $wp_customize->add_setting('iqra_education_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('iqra_education_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','iqra-education'),
       'section' => 'iqra_education_blog_post'
    ));

    $wp_customize->add_setting('iqra_education_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'iqra_education_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'iqra_education_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','iqra-education' ),
		'section'     => 'iqra_education_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','iqra-education'),
		'type'        => 'text',
		'settings'    => 'iqra_education_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('iqra_education_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
    ));
    $wp_customize->add_control('iqra_education_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','iqra-education'),
        'section' => 'iqra_education_blog_post',
        'choices' => array(
            'Default' => __('Default','iqra-education'),
            'Center' => __('Center','iqra-education'),
            'Image and Content' => __('Image and Content','iqra-education'),
        ),
	) );

	$wp_customize->add_setting('iqra_education_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','iqra-education'),
        'section' => 'iqra_education_blog_post',
        'choices' => array(
            'None' => __('None','iqra-education'),
            'Post Excerpt' => __('Post Excerpt','iqra-education'),
            'Post Content' => __('Post Content','iqra-education'),
        ),
	) );

    $wp_customize->add_setting( 'iqra_education_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	) );
	$wp_customize->add_control( 'iqra_education_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','iqra-education' ),
		'section'     => 'iqra_education_blog_post',
		'type'        => 'number',
		'settings'    => 'iqra_education_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'iqra_education_post_excerpt_suffix', array(
		'default'   => __('{...}','iqra-education'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'iqra_education_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','iqra-education' ),
		'section'     => 'iqra_education_blog_post',
		'type'        => 'text',
		'settings'    => 'iqra_education_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('iqra_education_button_text',array(
		'default'=>__('READ MORE','iqra-education'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_button_text',array(
		'label'	=> __('Add Button Text','iqra-education'),
		'section'=> 'iqra_education_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('iqra_education_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','iqra-education'),
       'section' => 'iqra_education_blog_post'
    ));

	$wp_customize->add_setting( 'iqra_education_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'iqra_education_sanitize_choices'
    ));
    $wp_customize->add_control( 'iqra_education_pagination_option', array(
        'section' => 'iqra_education_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'iqra-education' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'iqra-education' ),
            'next-prev' => __( 'Next / Previous', 'iqra-education' ),
    )));

	// Single post setting
    $wp_customize->add_section('iqra_education_single_post_section',array(
		'title'	=> __('Single Post Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));	

	$wp_customize->add_setting('iqra_education_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','iqra-education'),
       'section' => 'iqra_education_single_post_section'
    ));

    $wp_customize->add_setting('iqra_education_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','iqra-education'),
       'section' => 'iqra_education_single_post_section'
    ));

    $wp_customize->add_setting( 'iqra_education_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'iqra_education_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','iqra-education' ),
		'section'     => 'iqra_education_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','iqra-education'),
		'type'        => 'text',
		'settings'    => 'iqra_education_seperator_metabox',
	) );

	$wp_customize->add_setting('iqra_education_comment_form_heading',array(
       'default' => __('Leave a Reply','iqra-education'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('iqra_education_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','iqra-education'),
       'section' => 'iqra_education_single_post_section'
    ));

    $wp_customize->add_setting('iqra_education_comment_button_text',array(
       'default' => __('Post Comment','iqra-education'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('iqra_education_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','iqra-education'),
       'section' => 'iqra_education_single_post_section'
    ));

    $wp_customize->add_setting( 'iqra_education_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'iqra_education_sanitize_number_range',
	));
	$wp_customize->add_control('iqra_education_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','iqra-education' ),
		'section' => 'iqra_education_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('iqra_education_related_post_section',array(
		'title'	=> __('Related Post Settings','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));	

	$wp_customize->add_setting('iqra_education_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
    ));
    $wp_customize->add_control('iqra_education_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','iqra-education'),
       'section' => 'iqra_education_related_post_section',
    ));

	$wp_customize->add_setting( 'iqra_education_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'iqra_education_sanitize_choices'
    ));
    $wp_customize->add_control( 'iqra_education_show_related_post', array(
        'section' => 'iqra_education_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'iqra-education' ),
        'choices' => array(
            'categories'  => __('By Categories', 'iqra-education'),
            'tags' => __( 'By Tags', 'iqra-education' ),
    )));

    $wp_customize->add_setting('iqra_education_change_related_post_title',array(
		'default'=> __('Related Posts','iqra-education'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','iqra-education'),
		'section'=> 'iqra_education_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('iqra_education_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','iqra-education'),
		'section'=> 'iqra_education_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'iqra_education_footer' , array(
    	'title'   => __( 'Footer Section', 'iqra-education' ),
		'priority'   => null,
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'iqra_education_sanitize_choices',
    ));
    $wp_customize->add_control('iqra_education_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'iqra-education'),
        'section'     => 'iqra_education_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'iqra-education'),
        'choices' => array(
            '1'     => __('One', 'iqra-education'),
            '2'     => __('Two', 'iqra-education'),
            '3'     => __('Three', 'iqra-education'),
            '4'     => __('Four', 'iqra-education')
        ),
    )); 

    $wp_customize->add_setting( 'iqra_education_footer_widget_background', array(
	    'default' => '#3c3e79',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'iqra_education_footer_widget_background', array(
  		'label' => __('Footer Widget Background','iqra-education'),
	    'section' => 'iqra_education_footer',
  	)));

  	$wp_customize->add_setting('iqra_education_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'iqra_education_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','iqra-education'),
        'section' => 'iqra_education_footer'
	)));

	$wp_customize->add_setting('iqra_education_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'iqra_education_sanitize_checkbox'
	));
	$wp_customize->add_control('iqra_education_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','iqra-education'),
      	'section' => 'iqra_education_footer',
	));

	$wp_customize->add_setting('iqra_education_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new iqra_education_Icon_Changer(
        $wp_customize,'iqra_education_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','iqra-education'),
		'transport' => 'refresh',
		'section'	=> 'iqra_education_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('iqra_education_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'iqra_education_sanitize_choices'
	));
	$wp_customize->add_control('iqra_education_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','iqra-education'),
        'description' => __('Here you can change the Footer layout. ','iqra-education'),
        'section' => 'iqra_education_footer',
        'choices' => array(
            'Left align' => __('Left align','iqra-education'),
            'Right align' => __('Right align','iqra-education'),
            'Center align' => __('Center align','iqra-education'),
        ),
	) );

	$wp_customize->add_setting('iqra_education_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'iqra_education_sanitize_number_range',
	));
	$wp_customize->add_control('iqra_education_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('iqra_education_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('iqra_education_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'iqra_education_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	) );
	$wp_customize->add_control( 'iqra_education_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','iqra-education' ),
		'section'     => 'iqra_education_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('iqra_education_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_footer_text',array(
		'label'	=> __('Add Copyright Text','iqra-education'),
		'section'	=> 'iqra_education_footer',
		'setting'	=> 'iqra_education_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('iqra_education_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','iqra-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'iqra_education_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('iqra_education_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'iqra_education_sanitize_float',
	));
	$wp_customize->add_control('iqra_education_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','iqra-education'),
		'section'=> 'iqra_education_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'iqra_education_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'iqra_education_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'iqra_education_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Iqra Education 1.0
 * @see iqra-education_customize_register()
 *
 * @return void
 */
function iqra_education_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Iqra Education 1.0
 * @see iqra-education_customize_register()
 *
 * @return void
 */
function iqra_education_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function iqra_education_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Iqra_Education_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Iqra_Education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Iqra_Education_Customize_Section_Pro(
				$manager,
				'iqra_education_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Iqra Education Pro', 'iqra-education' ),
					'pro_text' => esc_html__( 'Go Pro', 'iqra-education' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/education-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'iqra-education-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'iqra-education-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Iqra_Education_Customize::get_instance();
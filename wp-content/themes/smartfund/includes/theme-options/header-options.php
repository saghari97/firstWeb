<?php
/**
* Register sidebar Options
*
* @return void
* @since 1.0.0
*
* @package Smartfund WordPress Theme
*/
function smartfund_header_options(){
	BizSmart_Customizer::set(array(
		# Theme Options
		'panel' => array(
		    'id'       => 'panel',
		    'title'    => esc_html__( 'Guten Learn Pro Options', 'bizsmart' ),
		    'priority' => 1,
		),
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'header-options',
			'title'  => esc_html__( 'Header Options','bizsmart' ),
			'priority' => 2
		),
		'fields' => array(
			array(
			    'id'      	  => 'layout-header',
			    'label'   	  => esc_html__( 'Header Layout', 'bizsmart' ),
			    'type'    	  => 'bizsmart-radio-image',
			    'default' 	  => '1',
			    'choices' 	  => array(
			        '1' => array(
			            'label' => esc_html__( 'Header left', 'bizsmart' ),
						'url'   => false,
						'svg' => '
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 270 86"><image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAABWAgMAAABDdZAYAAAACVBMVEVsrrrq6ur///9uMR70AAAAV0lEQVRYw+3YIQ6AMAwF0J5np5nB7HTIZafEbI4EUUgIvK+aiqd+KhpbPjVuQdpIBwKBQCAQCOTDyB4rBfI40ufqavoToid5xGWDQCAQCAQCOUNe86M+AILt9aRr0ixjAAAAAElFTkSuQmCC"/></svg>'
			        ),
			        '2' => array(
			            'label' => esc_html__( 'Header center', 'bizsmart' ),
						'url'   => false,
						'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 270 86"><image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAABWAgMAAABDdZAYAAAADFBMVEVsrrq2193q6ur///+zG1jiAAAAWElEQVRYw+3YIQ6AMBAEwHM8g6/0qWgML2xa0VQSRJsUwqw6NWqz4uIczxFTkKsMBwKBQCCrkBw9GwQC+SRi2SAQCGQqktow70/XnxA9gUAgEMgd8pofdQU21isgaTepogAAAABJRU5ErkJggg=="/></svg>'
			        ),
			        '3' => array(
			            'label' => esc_html__( 'Header right', 'bizsmart' ),
						'url'   => false,
						'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 270 86"><image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAABWAgMAAABDdZAYAAAACVBMVEVsrrrq6ur///9uMR70AAAAVUlEQVRYw+3YIQ7AIAxA0WYnnMHsNDvKNKdEkAXHBBMkfV81iKeaCqKsd8YvyFWXg0AgEAgEAoGM7niDzJCnPxxfUybEnuyCuGwQCAQCgUBSINv8UTetgvqEGXmt+wAAAABJRU5ErkJggg=="/></svg>'
			        )
			    )
			),
			array(
			    'id'   => 'btn-one',
			    'label' => esc_html__( 'Button Options', 'bizsmart' ),
			    'type' => 'bizsmart-horizontal-line',
			),
			array(
				'id' => 'header-btn-text',
				'label' => esc_html__( 'Text', 'bizsmart' ),
				'default' => esc_html__( 'Get Started', 'bizsmart' ),
				'type' => 'text'
			),
			array(
				'id' => 'header-button-url',
				'label' => esc_html__( 'Link', 'bizsmart' ),
				'default' => '#',
				'type' => 'url'
			),
			array(
				'id'      => 'btn-bg-color',
				'label'   => esc_html__( 'Background Color', 'bizsmart' ),
				'default' => '#008b9e',
				'type'    => 'bizsmart-color-picker',
			),
			array(
				'id'      => 'btn-hover-color',
				'label'   => esc_html__( 'Hover Color', 'bizsmart' ),
				'default' => '#0fc5de',
				'type'    => 'bizsmart-color-picker',
			),
			array(
			    'id'	  => 'sticky-header',
			    'label'   => esc_html__( 'Enable Sticky Header', 'smartfund' ),
			    'default' => true,
			    'type'    => 'bizsmart-toggle',
			),
			array(
			    'id'   => 'off-canvas-child',
			    'label' => esc_html__( 'Offcanvas Options', 'smartfund' ),
			    'type' => 'bizsmart-horizontal-line',
			    'description' => esc_html__( 'Please add widget in Offcanvas section(from widget) to see content.', 'smartfund' ),
			),
			array(
				'id'      => 'hide-offcanvas-mobile',
				'label'   => esc_html__( 'Hide On Mobile', 'smartfund' ),
				'default' => true,
				'type'    => 'bizsmart-toggle'
			),
			array(
				'id'      => 'hide-offcanvas-tablet',
				'label'   => esc_html__( 'Hide On Tablet', 'smartfund' ),
				'default' => true,
				'type'    => 'bizsmart-toggle'
			),
			array(
				'id'      => 'hide-offcanvas-desktop',
				'label'   => esc_html__( 'Hide On Desktop', 'smartfund' ),
				'default' => true,
				'type'    => 'bizsmart-toggle'
			)
		) 
	));
}
add_action( 'init', 'smartfund_header_options' );
<?php
class BizFit_Profile_Card_Widget extends BizFit_Base_Widget{

	/**
	 * make needed options for widget
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package BizFit WordPress Theme
	 */
	public function __construct(){

		parent::__construct( 
			'st_profile_card',
			esc_html__( 'ST: Profile Card', 'bizfit' )
		);

		$users_array = BizFit_Theme::get_users_list();

		$this->fields = array(
			'user_id' => array(
				'label'   => esc_html__( 'Select Username', 'bizfit' ),
				'type'    => 'select',
				'default' => 1,
				'choices' => $users_array
			),
		);
	}

	/**
	 * Markup for widget
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 *
	 * @package BizFit WordPress Theme
	 */
	public function widget( $args, $instance ){
		echo $args[ 'before_widget' ];
		
		$instance = $this->init_defaults( $instance );
		BizFit_Theme::the_profile_card( $instance[ 'user_id' ] );
		
		echo $args[ 'after_widget' ];
	}
}
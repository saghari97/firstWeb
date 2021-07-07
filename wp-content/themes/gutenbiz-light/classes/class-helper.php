<?php
/**
 * A helper class for theme
 *
 * @since 1.0.0
 *
 * @package Gutenbiz Light
 */
if( !class_exists( 'Gutenbiz_Light_Helper' ) ):
	class Gutenbiz_Light_Helper{
		public static $child_object_counter = 0;

		/**
		 * Constructor of helper
		 *
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */	
		public function __construct(){
			# Prevent from calling it multiple times
			if( self::$child_object_counter == 0 ){
				# loads ofter patent theme setups
				add_action( 'after_setup_theme', array( __CLASS__, 'parent_modification_filter' ) );

				self::$child_object_counter++;
			}
		}

		public static function is_advanced_header_exists(){
			return class_exists( 'Gutenbiz_Advanced_Header_Init' );
		}

		/**
		 * get bootstrap column option
		 *
		 * @static
		 * @access public
		 * @since  1.0.0
		 *
		 * @package Gutenbiz Light
		 */	
		public static function get_column_width(){
			return array(
				'1' => '1/12',
				'2' => '2/12',
				'3' => '3/12',
				'4' => '4/12',
				'5' => '5/12',
				'6' => '6/12',
				'7' => '7/12',
				'8' => '8/12',
				'9' => '9/12',
				'10' => '10/12',
				'11' => '11/12',
				'12' => '12/12',
			);
		}

		/**
		 * Change parent hook
		 *
		 * @static
		 * @access public
		 * @since  1.0.0
		 *
		 * @package Gutenbiz Light
		 */	
		public static function parent_modification_filter(){
			# filter to modify priority
			add_filter( Gutenbiz_Helper::with_prefix( 'customizer_get_defaults','_' ), array( __CLASS__ , 'change_defaults' ), 10 ,2 );
		}
		/**
		 * Change default value
		 *
		 * @static
		 * @access public
		 * @since  1.0.1
		 *
		 * @package Gutenbiz Light
		 */	
		public static function change_defaults( $def, $instance ){
			$id = Gutenbiz_Helper::with_prefix( 'footer-copyright-text' );
			$def[ $id ] = esc_html__( 'Copyright &copy; 2020 Theme Preview | Gutenbiz Light by Rise Themes', 'gutenbiz-light' );
			return $def;
		}

		/**
		 * Class to display / hide readmore button
		 *
		 * @static
		 * @access public
		 * @return string
		 * @since  1.0.0
		 *
		 * @package Gutenbiz Light
		 */	
		public static function readmore_btn(){
			$class = '';
			if( gutenbiz_get( 'readmore-status' ) ){
				$class = 'show-readmore-btn';
			}else{
				$class = 'hide-readmore-btn';
			}
			return $class;
		}
	}
endif;
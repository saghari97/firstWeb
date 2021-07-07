<?php
/**
 * Header
 *
 * @since 1.0.0
 * @package Gutenbiz Light
 */
if(! class_exists( 'Gutenbiz_Light_Header' ) ){
	
	class Gutenbiz_Light_Header extends Gutenbiz_Light_Helper{

		public function __construct(){
			add_action( 'init', array( __CLASS__, 'theme_options' ), 15 );
			add_action( 'gutenbiz_before_header', array( __CLASS__, 'adjust_with_addon_header' ) );
			
			# add header button
			add_action( 'gutenbiz_after_primary_menu', array( __CLASS__, 'add_header_button' ), 40 );
		}

		/**
		 * Adds Search form in header
		 *
		 * @static
		 * @access public
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */
		public static function add_header_button(){
			if( !gutenbiz_get( 'header-button' ) ){
				return;
			}
			$link = gutenbiz_get( 'header-button-link' ) ? gutenbiz_get( 'header-button-link' ) : '#';
			$text = gutenbiz_get( 'header-button-text' );
			?>
			<a href="<?php echo esc_url( $link ); ?>" class="gutenbiz-header-button">
				<?php echo esc_html( $text );  ?>
			</a>
		<?php }

		/**
		 * Active callback for search option
		 *
		 * @static
		 * @access public
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */
		public static function topbar_search_acb( $control ){
			$topbar = $control->manager->get_setting( Gutenbiz_Helper::with_prefix( 'show-top-bar' ) )->value();
			$search = $control->manager->get_setting( Gutenbiz_Helper::with_prefix( 'topbar-show-search' ) )->value();
			return $topbar && $search;
		}

		/**
		 * Theme options for top bar
		 *
		 * @static
		 * @access public
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */
		public static function theme_options(){
			if( self::is_advanced_header_exists() ){
				Gutenbiz_Customizer::set(array(
					# Theme option
					'panel' => 'panel',
					# Theme Option > Header
					'section' => array(
					    'id'    => 'top-bar',
					    'title' => esc_html__( 'Top Bar', 'gutenbiz-light' ),
					    'priority'    => 1,
					),
					# Theme Option > Header > settings
					'fields' => array(
						array(
							'id' => 'topbar-show-search',
							'label' => esc_html__( 'Show Search', 'gutenbiz-light' ),
							'default' => true,
							'type' => 'toggle',
							'active_callback' => 'advanced_header_acb_top_bar'
						),
						array(
							'id' => 'topbar-search-width-desktop',
							'label' => esc_html__( 'Width', 'gutenbiz-light' ),
							'default' => 3,
							'type' => 'select',
							'choices' => self::get_column_width(),
							'active_callback' => array( __CLASS__, 'topbar_search_acb' )
						)
					)
				));
			}
		}

		/**
		 * Adjust header if addon is installed
		 *
		 * @static
		 * @access public
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */
		public static function adjust_with_addon_header(){
			if( self::is_advanced_header_exists() ){
				if( gutenbiz_get( 'show-top-bar' ) ){
					add_action( Gutenbiz_Helper::fn_prefix( 'header' ), array( __CLASS__, 'topbar_search_form' ), 17 );
				}
			}
		}

		/**
		 * Add search form
		 *
		 * @static
		 * @access public
		 * @since 1.0.0
		 *
		 * @package Gutenbiz Light
		 */
		public static function topbar_search_form(){ 
			if( !gutenbiz_get( 'topbar-show-search' ) )
				return;
			$cls = gutenbiz_get( 'topbar-search-width-desktop' );
			?>
			<div class="col-12 <?php echo 'col-md-' . esc_attr( $cls ); ?>">
				<?php get_search_form(); ?>
			</div>
			<?php
		}

	}
}

new Gutenbiz_Light_Header;
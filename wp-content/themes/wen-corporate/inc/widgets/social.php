<?php

class WEN_Corporate_Social_Widget extends WP_Widget {

    function __construct() {
        $opts =array(
                    'classname'     => 'wen_corporate_social_widget',
                    'description'   => __( 'Displays social icons.', 'wen-corporate' ),
                    'customize_selective_refresh' => true,
                );

        parent::__construct('wen-corporate-social', __('Corporate Social Widget', 'wen-corporate'), $opts);
    }


    function widget( $args, $instance ) {
        extract( $args );

        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);

        echo $before_widget;
        if ($title) echo $before_title . $title . $after_title;

        $nav_menu_locations = get_nav_menu_locations();
        $menu_id = 0;
        if ( isset( $nav_menu_locations['social'] ) && absint( $nav_menu_locations['social'] ) > 0 ) {
          $menu_id = absint( $nav_menu_locations['social'] );
        }
        if ( $menu_id > 0 ) {

            wen_corporate_render_social_menu( $menu_id );

        }

        echo $after_widget;

    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

		$instance['title'] = sanitize_text_field( $new_instance['title'] );

        return $instance;
    }

    function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';

        $nav_menu_locations = get_nav_menu_locations();

        $is_menu_set = false;
        if ( isset( $nav_menu_locations['social'] ) && absint( $nav_menu_locations['social'] ) > 0 ) {
        	$is_menu_set = true;
        }
		?>
	    <p>
	        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'wen-corporate'); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	    </p>

    <?php if ( false === $is_menu_set ) : ?>
        <p>
            <?php echo __( 'Social menu is not set. Please create menu and assign it to Social Menu.', 'wen-corporate' ) . ' '; ?><br />
        </p>
    <?php endif; ?>

<?php }

} ?>

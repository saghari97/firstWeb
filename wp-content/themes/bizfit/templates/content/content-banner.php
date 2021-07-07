<?php
/**
 * Template part for displaying inner banner in pages
 *
 * @since 1.0.0
 * 
 * @package BizFit WordPress Theme
 */
?>
<div class="<?php echo esc_attr( BizFit_Helper::get_inner_banner_class() ); ?>" <?php BizFit_Helper::the_header_image(); ?>> 
	<div class="container">
		<?php
			BizFit_Helper::the_inner_banner();
			BizFit_Helper::the_breadcrumb();
		?>
	</div>
</div>

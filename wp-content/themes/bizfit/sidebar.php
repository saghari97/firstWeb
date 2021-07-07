<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */

if ( is_active_sidebar( 'bizfit_sidebar' ) ) { ?>
	<aside id="secondary" class="widget-area">
		<?php 
			$sidebar = apply_filters( BizFit_Theme::fn_prefix( 'sidebar' ), 'bizfit_sidebar' );
			dynamic_sidebar( $sidebar ); ?>
	</aside><!-- #secondary -->
<?php }else{ ?>
    <aside id="secondary" class="widget-area">	    	
       <?php 
	       BizFit_Theme::the_default_search();
	       BizFit_Theme::the_default_recent_post();
	       BizFit_Theme::the_default_archive();
       ?>
    </aside>
<?php }?>


<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu <?php if( get_theme_mod( 'iqra_education_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
	<div class="row m-0">
		<div class="<?php if( get_theme_mod( 'iqra_education_login_url') != '') { ?>col-lg-9 col-md-8"<?php } else { ?>col-lg-11 col-md-11 <?php } ?>">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'iqra-education' ); ?>">
				<button role="tab" class="menu-toggle p-3 my-3 mx-auto" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'iqra-education' );
					?>
				</button>

				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>				
			</nav>
		</div>
		<div class="col-lg-1 col-md-1">
			<?php if( get_theme_mod('iqra_education_show_hide_search',true) != ''){ ?>
				<div class="search-body text-center">
					<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_search_icon_changer','fas fa-search')); ?>"></i></button>
				</div>
			<?php } ?>
		</div>
		<div class="searchform-inner">
			<?php get_search_form(); ?>
			<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
		</div>
      	<?php if( get_theme_mod( 'iqra_education_login_url') != '') { ?>
			<div class="account col-lg-2 col-md-3 py-3 px-0 text-center">
            	<a href="<?php echo esc_html(get_theme_mod('iqra_education_login_url',''));?>" class="py-3"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_login_icon_changer','fas fa-user')); ?> pe-2"></i><?php esc_html_e('Login / Register','iqra-education'); ?><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','iqra-education' );?></span></a>
			</div>
        <?php } ?>
	</div>
</div>
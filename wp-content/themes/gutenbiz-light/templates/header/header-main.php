<?php
/**
 * Content for header layout 2
 *
 * @since 1.0.0
 *
 * @package Gutenbiz Light Theme
 */ ?>

<div class="gutenbiz-header-style-light">
	<div class="gutenbiz-top-bar-content">
		<div class="container">
			<div class="gutenbiz-top-bar-inner">
				<div class="site-branding">
					<div>
						<?php the_custom_logo(); ?>
						<div>
							<?php if ( is_front_page() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php do_action( Gutenbiz_Helper::fn_prefix( 'after_site_branding' ) ); ?>
			</div>
		</div>
	</div>
	<!-- top bar -->	
	<div class="<?php echo Gutenbiz_Helper::with_prefix( 'navigation-n-options' ); ?>">
		<div class="container">
			<div class="gutenbiz-header-style-2-menu">
				<nav class="gutenbiz-main-menu" id="site-navigation">
					<?php Gutenbiz_Helper::get_menu( 'primary', true ); ?>
				</nav> 	
				<div class="gutenbiz-menu-right">		
					<?php do_action( Gutenbiz_Helper::fn_prefix( 'after_primary_menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>	
</div>
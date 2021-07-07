<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('iqra_education_loader_setting',false)){ ?>
	    <div id="pre-loader">
	      	<div class='demo'>
		        <?php $iqra_education_theme_lay = get_theme_mod( 'iqra_education_preloader_types','Default');
		        if($iqra_education_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($iqra_education_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($iqra_education_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php } ?>
	      	</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'iqra-education' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header pb-3" role="banner">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="logo col-lg-3 col-md-12 p-4 text-center">
							<?php if ( has_custom_logo() ) : ?>
						  		<div class="site-logo"><?php the_custom_logo(); ?></div>
							<?php endif; ?>
						  	<?php $blog_info = get_bloginfo( 'name' ); ?>
						  	<?php if ( ! empty( $blog_info ) ) : ?>
						  		<?php if( get_theme_mod('iqra_education_show_site_title',true) != ''){ ?>
								    <?php if ( is_front_page() && is_home() ) : ?>
							      		<h1 class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								    <?php else : ?>
							      		<p class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								    <?php endif; ?>
								<?php }?>
							<?php endif; ?>
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
							?>
								<?php if( get_theme_mod('iqra_education_show_tagline',true) != ''){ ?>
									<p class="site-description m-0">
									    <?php echo esc_html($description); ?>
									</p>
								<?php }?>
							<?php endif; ?>
						</div>
						<div class="col-lg-9 col-md-12 p-0">
							<?php if( get_theme_mod('iqra_education_show_hide_topbar', false) != '' || get_theme_mod('iqra_education_enable_disable_topbar', false) != ''){ ?>
								<div class="topbar p-3 text-lg-start text-center">
									<div class="row">
										<div class="col-lg-3 col-md-6">
											<?php if( get_theme_mod( 'iqra_education_contact_number','' ) != '') { ?>
								                <a class="call mb-lg-0 mb-2" href="tel:<?php echo esc_attr( get_theme_mod('iqra_education_contact_number','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_phone_icon_changer','fa fa-phone')); ?> pe-xl-2 pe-lg-1 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('iqra_education_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('iqra_education_contact_number','' )); ?></span></a>
								            <?php } ?>
										</div>
										<div class="col-lg-3 col-md-6 px-lg-0">
								            <?php if( get_theme_mod( 'iqra_education_email_address','' ) != '') { ?>
								                <a class="email mb-lg-0 mb-2" href="mailto:<?php echo esc_attr( get_theme_mod('iqra_education_email_address','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_email_icon_changer','far fa-envelope')); ?> pe-xl-2 pe-lg-1 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('iqra_education_email_address','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('iqra_education_email_address','') ); ?></span></a>
								            <?php } ?>
								        </div>
								        <div class="col-lg-3 col-md-6 p-0">
								            <?php if( get_theme_mod( 'iqra_education_time','' ) != '') { ?>
								                <span class="time mb-lg-0 mb-2"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_time_icon_changer','far fa-clock')); ?> pe-xl-2 pe-lg-1 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('iqra_education_time','') ); ?></span>
								            <?php } ?>
								        </div>
										<div class="social-icon col-lg-3 col-md-6 p-0 text-center">
											<?php if( get_theme_mod( 'iqra_education_facebook_url') != '') { ?>
											    <a href="<?php echo esc_url( get_theme_mod( 'iqra_education_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_facebook_icon_changer','fab fa-facebook-f')); ?> ps-lg-3 ps-3" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','iqra-education' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'iqra_education_twitter_url') != '') { ?>
											    <a href="<?php echo esc_url( get_theme_mod( 'iqra_education_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_twitter_icon_changer','fab fa-twitter')); ?> ps-lg-3 ps-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','iqra-education' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'iqra_education_youtube_url') != '') { ?>
											    <a href="<?php echo esc_url( get_theme_mod( 'iqra_education_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_youtube_icon_changer','fab fa-youtube')); ?> ps-lg-3 ps-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','iqra-education' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'iqra_education_linkedin_url') != '') { ?>
											    <a href="<?php echo esc_url( get_theme_mod( 'iqra_education_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_linkedin_icon_changer','fab fa-linkedin-in')); ?> ps-lg-3 ps-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','iqra-education' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'iqra_education_instagram_url') != '') { ?>
											    <a href="<?php echo esc_url( get_theme_mod( 'iqra_education_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_instagram_icon_changer','fab fa-instagram')); ?> ps-lg-3 ps-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','iqra-education' );?></span></a>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<div class="navigation-top">
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		
	<div class="site-content-contain">
		<div id="content">
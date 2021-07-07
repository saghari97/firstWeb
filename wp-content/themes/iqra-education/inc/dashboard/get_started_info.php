<?php

add_action( 'admin_menu', 'iqra_education_gettingstarted' );
function iqra_education_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'iqra-education'), esc_html__('About Theme', 'iqra-education'), 'edit_theme_options', 'iqra-education-guide-page', 'iqra_education_guide');   
}

function iqra_education_admin_theme_style() {
   wp_enqueue_style('iqra-education-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'iqra_education_admin_theme_style');

function iqra_education_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Iqra Education Lite Theme', 'iqra-education' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'iqra-education' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=iqra-education-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'iqra-education' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'iqra_education_notice');


/**
 * Theme Info Page
 */
function iqra_education_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'iqra-education' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Iqra Education Theme', 'iqra-education' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'iqra-education' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="iqra_education_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="iqra_education_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Iqra Education Lite Theme', 'iqra-education' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'iqra-education'); ?></th>
											<th><?php esc_html_e('Click Here', 'iqra-education'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=iqra_education_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=iqra_education_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=iqra_education_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'iqra-education'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=iqra_education_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'iqra-education'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','iqra-education'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','iqra-education'); ?></a> <?php esc_html_e( 'your website.','iqra-education'); ?> </li>
								<li><?php esc_html_e( 'Iqra Education','iqra-education'); ?> <a target="_blank" href="<?php echo esc_url( IQRA_EDUCATION_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','iqra-education'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','iqra-education'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( IQRA_EDUCATION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'iqra-education'); ?></a>
							<a href="<?php echo esc_url( IQRA_EDUCATION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'iqra-education'); ?></a>
							<a href="<?php echo esc_url( IQRA_EDUCATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'iqra-education'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','iqra-education'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Education WordPress theme is special and with proper utilization, you can craft an education website that is multipurpose to the core. It is also accompanied with a fresh demo that is exclusive for the websites related to education. You have the choice to launch a page for school or university or some online courses or any other learning page that was quite difficult for you earlier. It is very good when it comes to the refining of web design and there is no need of a skilled programmer with the knowledge of coding. Education WordPress theme also suits well for the different levels of education like elementary, middle or high school and it makes use of the drag and drop visual composer that is fused with the MegaMenu. It also contains the special plugins for various events apart from the layout options and galleries. Contact form 7 and revolution slider is also included.', 'iqra-education' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','iqra-education'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','iqra-education'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Documention','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','iqra-education'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','iqra-education'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','iqra-education'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','iqra-education'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( IQRA_EDUCATION_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','iqra-education'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( IQRA_EDUCATION_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','iqra-education'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','iqra-education'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','iqra-education'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','iqra-education'); ?></a> <?php esc_html_e( 'your website.','iqra-education'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','iqra-education'); ?></h3>
						<ol>
							<li><a href="<?php echo esc_url( IQRA_EDUCATION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'iqra-education'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
}?>
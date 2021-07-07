<?php 
/**
 * Common css for all devices
 *
 * @since 1.0.0
 * @package BizFit WordPress Theme
 */

add_action( 'init', 'bizfit_all_device_css' );
function bizfit_all_device_css(){

	$style = array(
		# Primary Color
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '.banner-slider-content .inner-banner-btn a, .pagination .nav-links > *.current, ::selection, %s-main-menu > ul > li > a:after, %s-btn-primary, #infinite-handle span, ul.wc-block-grid__products li.wc-block-grid__product button, ul.wc-block-grid__products li.wc-block-grid__product .wp-block-button__link, ul.wc-block-grid__products li.wc-block-grid__product button:hover, ul.wc-block-grid__products li.wc-block-grid__product .wp-block-button__link:hover, ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-onsale, .woocommerce ul.products li.product .button, .woocommerce ul.products li.product .added_to_cart.wc-forward,
				.woocommerce ul.products li.product .onsale, .single-product .product .onsale,
				 .single-product .product .entry-summary button.button, a.cart-icon span:hover, woocommerce #review_form #respond .form-submit input,
				  .woocommerce-cart .woocommerce .cart-collaterals .cart_totals a.checkout-button.button.alt.wc-forward, 
				   .woocommerce-cart .woocommerce form.woocommerce-cart-form table button.button, .woocommerce button.button,
				   form.woocommerce-checkout div#order_review #payment button#place_order, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
					.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .widget.woocommerce.widget_price_filter .price_slider_amount .button, .widget .woocommerce-product-search button, .woocommerce ul.products li.product-category.product h2,
					  #site-navigation li.menu-item:before, div#mr-mobile-menu li.menu-item:before, %s-read-more, .bizfit-banner-content-wrapper .banner-btn-wrapper a, .bizfit-btn, .bizfit-header-search .search-form button'
			 ),
			'props' => array(
				'background-color' => 'primary-color',
			)
		),
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '%s-scroll-to-top i' ),
			'props' => array(
				'background' => 'primary-color',
			)
		),		
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '.product-with-slider %s-arrow svg, .product-with-slider %s-arrow svg:hover' ),
			'props' => array(
				'fill' => 'primary-color',
			)
		),		
		array(
			'selector' => BizFit_Helper::with_prefix_selector(  '#infinite-handle span, .woocommerce-info a:hover,
			.post-content-wrap .post-categories li a:hover, %s-post .entry-content-stat + a:hover, %s-post %s-comments a:hover, %s-bottom-header-wrapper %s-header-icons %s-search-icon, .pagination .nav-links > *, body .post-categories li a, ul.wc-block-grid__products li.wc-block-grid__product del span.woocommerce-Price-amount.amount, .woocommerce ul.products li.product a.woocommerce-LoopProduct-link del span.woocommerce-Price-amount.amount, 
			ul.wc-block-grid__products li.wc-block-grid__product del, .woocommerce ul.products li.product .star-rating, 
			ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-title a:hover, 
			.single-product .product .entry-summary .product_meta > span a, .single-product .stars a, 
			.single-product .star-rating span::before, .bizfit-main-menu > ul > li > a:hover,
			.wc-block-grid__product-rating .wc-block-grid__product-rating__stars span:before, .woocommerce-error::before,
			.single-product .product .entry-summary .star-rating span::before, .single-product .product .entry-summary a.woocommerce-review-link, 
			.woocommerce .star-rating, .woocommerce del, li.wc-layered-nav-rating a, .footer-widget ul li a:hover, 
			.woocommerce ul.products li.product-category.product h2 mark.count,  .cart-icon i:hover,
			.site-branding .site-title a:hover, .footer-bottom-section .credit-link a:hover,
			.bizfit-post .post-title a:hover, a:hover .woocommerce-privacy-policy-link,
			.post-content-wrap p > a:hover, .bizfit-search-icons:visited:hover,
			.comment-respond .logged-in-as a:hover, .post-navigation .nav-links > div a:hover span,
			.post-navigation .nav-links > div a .screen-reader-text:hover, .entry-meta.single .url:hover,
			.comments-area .comment-list .comment-body .comment-author cite a:hover, .woocommerce-message::before,
			.footer-widget ul li a:hover, .product-name a:hover,  .product-name a:hover, .bizfit-main-menu > ul > li > ul li a:hover,
			.footer-widget a:hover, .wrap-breadcrumb ul li a:hover, .wrap-breadcrumb ul li a span:hover, #secondary .widget a:hover, #secondary .widget ul li a:hover,
			.woocommerce ul.products li.product a.woocommerce-LoopProduct-link .woocommerce-loop-product__title:hover,.mr-mobile-menu ul.menu > li > a:hover,
			.mr-mobile-menu ul.menu > li > a:focus, a:hover .woocommerce-privacy-policy-link, a:focus .woocommerce-privacy-policy-link, .bizfit-search-icons.bizfit-toggle-search:hover, .bizfit-read-more:active, .bizfit-read-more:visited' ),
			'props' => array(
				'color' => 'primary-color',
			)
		),
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '.pagination .nav-links > *, %s-post.sticky,
			.woocommerce-message, .woocommerce-error, .woocommerce-info, 
			.woocommerce .woocommerce-customer-details address' ),
			'props' => array(
				'border-color' => 'primary-color',
			)
		),
		array(
			'selector' => 'body',
			'props'    => array(
				'font-family' => 'body-font'
			)
		),
		# Color Options
		array(
			'selector'  => 'body, body p, body div, .woocommerce-Tabs-panel, div#tab-description, .woocommerce-tabs.wc-tabs-wrapper',
			'props'		=> array(
				'color' => 'body-paragraph-color',
			),
		),		
		# inner banner
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '%s-inner-banner-wrapper:after' ),
			'props'    => array(
				'background-color' => 'ib-background-color'
			)
		),
		array(
			'selector' => BizFit_Helper::with_prefix_selector( '%s-inner-banner-wrapper %s-inner-banner .entry-title' ),
			'props'    => array(
				'color' => 'ib-title-color'
			)
		),
		array(
			'selector'  => '.wrap-breadcrumb ul li a, .wrap-breadcrumb ul li span, .taxonomy-description p',
			'props'		=> array(
				'color' => 'ib-title-color'
			),
		),
		array(
			'selector'  => '.bizfit-top-bar',
			'props'		=> array(
				'background' => 'topbar-bg-color'
			),
		),
	);

	BizFit_Css::add_styles( $style, 'md' );
}
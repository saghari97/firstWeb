<?php
/**
 * Content for header banner
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */
$news_title = apply_filters( BizFit_Theme::fn_prefix( 'blog_title' ), true );?>

<div class="bizfit-banner-content-wrapper">
	<div class="bizfit-banner-left-content">		
		<h2 class="entry-title"><?php echo esc_html( $news_title ) ?></h2>
		<p><?php echo bizfit_get( 'ib-blog-content' ) ?></p>
		<div class="banner-btn-wrapper">
			<?php if( '' != bizfit_get( 'ib-btn-1-title' ) ): ?>
				<div class="bizfit-banner-primary-btn">
					<a href="<?php echo esc_url( bizfit_get( 'ib-btn-1-url' ) ); ?>">
						<?php echo esc_html( bizfit_get( 'ib-btn-1-title' ) ); ?>						
					</a>
				</div>
			<?php endif; ?>
			<?php if( '' != bizfit_get( 'ib-btn-2-title' ) ): ?>
				<div class="bizfit-banner-secondaty-btn">
					<a href="<?php echo esc_url( bizfit_get( 'ib-btn-2-url' ) ); ?>">
						<?php echo esc_html( bizfit_get( 'ib-btn-2-title' ) ); ?>						
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if( '' != bizfit_get( 'ib-blog-image' ) ): ?>
		<div class="bizfit-banner-right-content">
			<img src="<?php echo esc_attr( bizfit_get( 'ib-blog-image' ) ); ?>" class="bizfit-banner-content-img">
		</div>
	<?php endif; ?>
</div>
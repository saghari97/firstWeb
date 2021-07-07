<?php
/**
 * Displays the meta information
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */?>

<?php if ( 'post' === get_post_type() ) : ?>
	<?php 
		$category = bizfit_get( 'post-category' );
		$author   = bizfit_get( 'post-author' );
		$date     = bizfit_get( 'post-date' );
	if( $category || $author || $date ) : ?>
		<div class="entry-meta 
			<?php 
				if( is_single() ){
					echo esc_attr( 'single' );
				} 
			?>"
		>
			<?php BizFit_Helper::get_author_image(); ?>
			<?php if( $author || $date ) : ?>
				<div class="author-info">
					<?php
						BizFit_Helper::the_date();			
						BizFit_Helper::posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>
		<?php BizFit_Helper::the_category(); ?>	
	<?php endif; ?>
<?php endif; ?>
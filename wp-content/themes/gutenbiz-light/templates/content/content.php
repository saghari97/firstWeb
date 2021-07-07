<?php
/**
 * Override Parent theme file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @since 1.0.0
 * @package Gutenbiz Light
 */
?>
<article <?php Gutenbiz_Helper::schema_body( 'article' ); ?> id="post-<?php the_ID(); ?>" <?php post_class( Gutenbiz_Helper::with_prefix( 'post' ) ); ?> >
	<div class="image-full post-image" style="background-image: url( '<?php the_post_thumbnail_url( array( 360, 252 ) );?>') , url('<?php echo esc_attr( Gutenbiz_Helper::get_theme_uri( 'assets/img/default-image.jpg' ) ); ?>' )">
		<a href="<?php the_permalink(); ?>" class="<?php echo esc_attr( Gutenbiz_Helper::with_prefix( 'single-page-link' ) ); ?>"></a>
		<?php Gutenbiz_Helper::post_format_icon() ?>
	</div>	
	
	<div class="post-content-wrap <?php echo esc_attr( Gutenbiz_Light_Helper::readmore_btn() ); ?>">		
		<?php 
			Gutenbiz_Helper::get_title();
			get_template_part( 'templates/meta', 'info' );
			the_excerpt();	
			Gutenbiz_Helper::get_comment_number();
		?>
	</div>
</article>
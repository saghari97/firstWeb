<?php
/**
 * The template for displaying all single posts.
 *
 * @package WEN_Corporate
 */

get_header(); ?>

<?php
/**
 * wen_corporate_action_before_primary hook
 */
do_action( 'wen_corporate_action_before_primary' );
?>

	<div id="primary" <?php wen_corporate_primary_class( 'content-area' ); ?>>
		<?php
		/**
		 * wen_corporate_action_before_main hook
		 */
		do_action( 'wen_corporate_action_before_main' );
		?>

		<main id="main" class="site-main" role="main">
		<?php
		/**
		 * wen_corporate_action_after_main_start hook
		 */
		do_action( 'wen_corporate_action_after_main_start' );
		?>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
			the_post_navigation( array(
				'next_text' => '<span class="post-title">%title</span>&nbsp;<span class="meta-nav">&rarr;</span>',
				'prev_text' => '<span class="meta-nav">&larr;</span>&nbsp;<span class="post-title">%title</span>',
			) );
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		<?php
		/**
		 * wen_corporate_action_before_main_end hook
		 */
		do_action( 'wen_corporate_action_before_main_end' );
		?>



		</main><!-- #main -->
		<?php
		/**
		 * wen_corporate_action_after_main hook
		 */
		do_action( 'wen_corporate_action_after_main' );
		?>

	</div><!-- #primary -->

<?php
/**
 * wen_corporate_action_after_primary hook
 */
do_action( 'wen_corporate_action_after_primary' );
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * Displays user profile card
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */
$author_id = get_query_var('author_id');
$meta_info = array();
$icons = array();
$meta = array( 'first_name', 'last_name', 'user_description' );
$url = get_avatar_url( $author_id, array( 'size'=> 120 ) );
$user_profile = get_author_posts_url( $author_id );

foreach ( $meta as $mt ){
	$meta_info[ $mt ] = get_the_author_meta( $mt , $author_id );
}

if( !empty( $meta_info ) ){ ?>
	<div class="bizfit-profile-card-widget">
		<a href="<?php  echo esc_url( $user_profile ) ?>">
			<img src="<?php echo esc_url( $url ) ?>" alt="">
			<?php if( '' != $meta_info[ 'first_name' ] || '' != $meta_info[ 'last_name' ] ){ ?>					
				<h3 class="user-name"><?php echo esc_html( $meta_info[ 'first_name' ]. ' '. $meta_info[ 'last_name' ] );?></h3>
			<?php }else{?>
				<h3 class="user-name"><?php  echo esc_html( get_the_author_meta( 'user_nicename' , $author_id ) ); ?></h3>
			<?php }?>
		</a>

		<?php if( '' != $meta_info[ 'user_description' ] ){ ?>
			<p class="user-description"><?php echo esc_html( $meta_info[ 'user_description' ] );?></p>
		<?php }?>

	</div>
<?php }

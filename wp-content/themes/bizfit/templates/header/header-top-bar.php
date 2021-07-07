<?php
/**
 * Content for header Topbar
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */ ?>
 <div class="bizfit-top-bar">
  	<div class="container">
  		<div class="row align-items-center">
  			<div class="col-12 col-md-8 hide-on-mobile">
  				<div class="bizfit-top-bar-info">
 					<ul>
					<?php $data = array(
						'location' => array(
							'icon' => 'fa-map-marker',
							'href' => false,
							'id'   => 'bizfit-location'
						),
						'phone-num' => array(
							'icon' => 'fa-phone',
							'href' => 'tel:',
							'id'   => 'bizfit-phone'
						),
						'email' => array(
							'icon' => 'fa-envelope',
							'href' => 'mailto:',
							'id'   => 'bizfit-email'
						),
					);
       
					foreach( $data as $setting => $d ){
						$value = bizfit_get( $setting );
						$href = $d[ 'href' ] ? $d[ 'href' ] . $value : false;
						if( !empty( $value ) ):?>							
							<li>
								<?php if( $href ) : ?>
									<a href="<?php echo esc_attr( $href ); ?>">											
										<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i>
										<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
											<?php echo esc_html( $value); ?>	
										</span>
									</a>
								<?php else: ?>
									<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i> 
									<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
										<?php echo esc_html( $value ); ?>	
									</span>
								<?php endif; ?>
							</li>
						<?php endif;
					}
					?>
 					</ul>
  				</div>
  			</div>
  			<?php if( bizfit_get( 'header-social-menu' ) ) { ?>
	  			<div class="col-12 col-md-4">
		 			<div class="bizfit-social-menu">
		 				<?php 
		 					BizFit_Helper::get_menu( 'social-menu-header', true )
		 				?>
					</div>
		 		</div>
	 		<?php } ?>
 		</div>
  	</div>
</div>
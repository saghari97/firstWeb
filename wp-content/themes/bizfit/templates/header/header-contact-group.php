<?php
/**
 * Content for header contact group
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */ ?>
 <div class="bizfit-header-contact-group">

 	<?php if( '' !== bizfit_get( 'header-btn-1' ) ){ ?>
 		<a href="<?php echo bizfit_get( 'link-btn-1' ); ?>" class="bizfit-btn bizfit-header-btn" target="_blank">
 			<?php echo bizfit_get( 'header-btn-1' ); ?> 				
 		</a>
 	<?php } ?> 	
 </div>
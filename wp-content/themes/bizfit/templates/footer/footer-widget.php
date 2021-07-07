<?php
/**
 * Content for footer widget
 *
 * @since 1.0.0
 *
 * @package BizFit WordPress Theme
 */
 if( !apply_filters( BizFit_Helper::fn_prefix( 'disable_footer_widget' ), false ) ): ?>
    <footer <?php BizFit_Helper::schema_body( 'footer' ); ?> class="footer-top-section">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                 	<?php
                    if( is_active_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar_1' ) ) ||
                        is_active_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar_2' ) ) ||
                        is_active_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar_3' ) ) ||
                        is_active_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar_4' ) ) ){
                            $num_footer = bizfit_get( 'layout-footer' );
                            for( $i = 1; $i <= $num_footer ; $i++ ){
                                if ( is_active_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ) ){ ?>
                                    <aside class="col footer-widget-wrapper py-5">
                                        <?php dynamic_sidebar( BizFit_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ); ?>
                                    </aside>
                                <?php }
                            }
                    }else{?>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizFit_Theme::the_default_search(); ?>
                        </aside>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizFit_Theme::the_default_recent_post(); ?>
                        </aside>
                        <aside class="col footer-widget-wrapper py-5">
                            <?php BizFit_Theme::the_default_archive(); ?>
                        </aside>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif;

<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'iqra_education_hide_show_scroll',false) != '' || get_theme_mod( 'iqra_education_enable_disable_scrolltop',false) != '') { ?>
    <?php $iqra_education_theme_lay = get_theme_mod( 'iqra_education_footer_options','Right');
        if($iqra_education_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'iqra-education' ); ?></span></a>
        <?php }else if($iqra_education_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'iqra-education' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('iqra_education_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'iqra-education' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php iqra_education_credit(); ?> <?php echo esc_html(get_theme_mod('iqra_education_footer_text',__('By ThemesEye','iqra-education'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','iqra-education') ?></span>
</div>
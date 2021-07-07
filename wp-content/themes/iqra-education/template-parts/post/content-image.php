<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <?php $iqra_education_blog_layout = get_theme_mod( 'iqra_education_blog_post_layout','Default');
    if($iqra_education_blog_layout == 'Default' || $iqra_education_blog_layout == 'Center'){ ?>
      <?php if(has_post_thumbnail()) { ?>
        <div class="post-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php } ?>
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>" class="text-capitalize"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'iqra_education_date_hide',true) != '' || get_theme_mod( 'iqra_education_comment_hide',true) != '' || get_theme_mod( 'iqra_education_author_hide',true) != '') { ?>
        <div class="post-info">
          <?php if( get_theme_mod( 'iqra_education_date_hide',true) != '') { ?>
            <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_date_icon_changer','fa fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('iqra_education_blog_post_metabox_seperator') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'iqra_education_author_hide',true) != '') { ?>
            <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_author_icon_changer','fa fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('iqra_education_blog_post_metabox_seperator') ); ?>
          <?php } ?>
          <?php if( get_theme_mod( 'iqra_education_comment_hide',true) != '') { ?>
            <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments"><?php comments_number( __('0 Comments','iqra-education'), __('0 Comments','iqra-education'), __('% Comments','iqra-education') ); ?></span>
          <?php } ?>
        </div>
      <?php }?>
      <?php if(get_theme_mod('iqra_education_blog_description') == 'Post Content'){ ?>
        <div class="text"><?php the_content(); ?></div>
      <?php }
      if(get_theme_mod('iqra_education_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="text"><p><?php $excerpt = get_the_excerpt(); echo esc_html( iqra_education_string_limit_words( $excerpt, esc_attr(get_theme_mod('iqra_education_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('iqra_education_post_excerpt_suffix','{...}') ); ?></p></div>
        <?php } ?>
      <?php }?>
      <?php if( get_theme_mod('iqra_education_button_text','READ MORE') != ''){ ?>
        <div class="post-link">
          <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('iqra_education_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('iqra_education_button_text','READ MORE'));?></span></a>
        </div>
      <?php } ?>
    <?php }else if($iqra_education_blog_layout == 'Image and Content'){ ?>
      <div class="row m-0">
        <?php if(has_post_thumbnail()) { ?>
          <div class="post-image col-lg-6 col-md-12">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-12 ps-0" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'iqra_education_date_hide',true) != '' || get_theme_mod( 'iqra_education_comment_hide',true) != '' || get_theme_mod( 'iqra_education_author_hide',true) != '') { ?>
            <div class="post-info">
              <?php if( get_theme_mod( 'iqra_education_date_hide',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_date_icon_changer','fa fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('iqra_education_blog_post_metabox_seperator') ); ?>
              <?php } ?>
              <?php if( get_theme_mod( 'iqra_education_author_hide',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_author_icon_changer','fa fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('iqra_education_blog_post_metabox_seperator') ); ?>
              <?php } ?>
              <?php if( get_theme_mod( 'iqra_education_comment_hide',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('iqra_education_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments"><?php comments_number( __('0 Comments','iqra-education'), __('0 Comments','iqra-education'), __('% Comments','iqra-education') ); ?></span>
              <?php } ?>
            </div>
          <?php }?>
          <?php if(get_theme_mod('iqra_education_blog_description') == 'Post Content'){ ?>
            <div class="text"><?php the_content(); ?></div>
          <?php }
          if(get_theme_mod('iqra_education_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <div class="text"><p><?php $excerpt = get_the_excerpt(); echo esc_html( iqra_education_string_limit_words( $excerpt, esc_attr(get_theme_mod('iqra_education_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('iqra_education_post_excerpt_suffix','{...}') ); ?></p></div>
            <?php } ?>
          <?php }?>
          <?php if( get_theme_mod('iqra_education_button_text','READ MORE') != ''){ ?>
            <div class="post-link">
              <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('iqra_education_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('iqra_education_button_text','READ MORE'));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</article>
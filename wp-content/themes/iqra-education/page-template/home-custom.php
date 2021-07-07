<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'iqra_education_before_slider' ); ?>

  <?php if( get_theme_mod('iqra_education_slider_arrows', false) != '' || get_theme_mod('iqra_education_enable_disable_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('iqra_education_slider_speed', 3000)); ?>"> 
        <?php $iqra_education_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $iqra_education_mod = intval( get_theme_mod( 'iqra_education_slide_page' . $count ));
            if ( 'page-none-selected' != $iqra_education_mod ) {
              $iqra_education_slider_pages[] = $iqra_education_mod;
            }
          }
          if( !empty($iqra_education_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $iqra_education_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('iqra_education_slider_title',true) != ''){ ?>
                  <h1 class="text-capitalize"><?php the_title(); ?></h1>
                <?php } ?>
                <?php if( get_theme_mod('iqra_education_slider_content',true) != ''){ ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( iqra_education_string_limit_words( $excerpt, esc_attr(get_theme_mod('iqra_education_slider_excerpt_number','20')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'iqra_education_slider_button',true) != '' || get_theme_mod( 'iqra_education_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('iqra_education_slider_button_text','READ MORE') != ''){ ?>
                    <div class ="readbutton mt-md-3">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('iqra_education_slider_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('iqra_education_slider_button_text','READ MORE'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','iqra-education' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','iqra-education' );?></span>
        </a>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'iqra_education_after_slider' ); ?>

  <?php if( get_theme_mod('iqra_education_about_page') != ''){ ?>
    <section id="about" class="py-5">
      <div class="container">
        <?php $iqra_education_slider_pages = array();
          $iqra_education_mod = absint( get_theme_mod( 'iqra_education_about_page'));
          if ( 'page-none-selected' != $iqra_education_mod ) {
            $iqra_education_slider_pages[] = $iqra_education_mod;
          }
        if( !empty($iqra_education_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $iqra_education_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="about-text">
                <?php if( get_theme_mod('iqra_education_title') != ''){ ?>     
                  <strong><?php echo esc_html(get_theme_mod('iqra_education_title','')); ?></strong>
                  <hr class="my-2 mx-0">
                <?php }?>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <h2 class="mb-3 text-capitalize"><?php the_title(); ?></h2>
                    <?php the_excerpt();  ?>
                    <div class ="aboutbtn mt-4">
                      <a href="<?php the_permalink(); ?>"><?php esc_html_e('Know About Us','iqra-education'); ?><span class="screen-reader-text"><?php esc_html_e('Know About Us','iqra-education'); ?></span></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 mt-md-0 mt-4">
                    <?php
                      $content = apply_filters( 'the_content', get_the_content() );
                      $video = false;

                      // Only get video from the content if a playlist isn't present.
                      if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                        $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                      }
                    ?>
                    <div class="abt-image p-2">
                      <?php
                        if ( ! is_single() ) {
                          // If not a single post, highlight the video file.
                          if ( ! empty( $video ) ) {
                            foreach ( $video as $video_html ) {
                              echo '<div class="entry-video">';
                                echo $video_html;
                              echo '</div>';
                            }
                          }
                          elseif(has_post_thumbnail()) { 
                            the_post_thumbnail(); 
                          } 
                        }; 
                      ?>
                      <span class="img-shadow"></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata()?>
          <div class="clearfix"></div> 
      </div>
    </section>
  <?php }?>

  <?php do_action( 'iqra_education_after_about' ); ?>

  <div class="container text">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>
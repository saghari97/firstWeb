<?php

/**
 * Lite Manager
 *
 * @package salejunction
 */
/**
 * About page class
 */
require_once get_template_directory() . '/cw-notifications/cw-about-page/class-inkthemes-about-page.php';

$func = 'general_admin_notice';
/*
 * About page instance
 */
$config = array(
    // Menu name under Appearance.
    'menu_name' => apply_filters('salejunction_about_page_filter', sprintf(__('About %s', 'salejunction'), wp_get_theme()->get('Name'), 'menu_name')),
    // Page title.
    'page_name' => apply_filters('salejunction_about_page_filter', sprintf(__('About %s', 'salejunction'), wp_get_theme()->get('Name'), 'page_name')),
    // Main welcome title
    /* translators: s - theme name */
    'welcome_title' => apply_filters('salejunction_about_page_filter', sprintf(__('Welcome to %s !', 'salejunction'), wp_get_theme()->get('Name')), 'welcome_title'),
    // Main welcome content
    'welcome_content' => apply_filters('salejunction_about_page_filter', sprintf(__('Salejuntion is the ultimate WordPress theme with lots of customization features and options. The theme can be used by all kind of businesses and it is also perfect for personal use.', 'salejunction'), 'welcome_content')),
    /**
     * Tabs array.
     *
     * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
     * the will be the name of the function which will be used to render the tab content.
     */
    'tabs' => array(
        'getting_started' => __('Colorway (Advanced)', 'salejunction'),
        'getting_started_theme' => __('Getting Started (Salejunction)', 'salejunction'),
        'support' => __('Support', 'salejunction'),
        'changelog' => __('Changelog', 'salejunction'),
    // 'free_pro' => __('Free vs Paid', 'salejunction'),
    ),
    // Support content tab.
    'support_content' => array(
        'first' => array(
            'title' => esc_html__('Contact Support', 'salejunction'),
//			'icon'         => 'dashicons dashicons-sos',
            'text' => esc_html__('Our support staff is always dedicated to hold your website up and running without any glitch. If you need any kind help while creating a website with Salejunction you can contact us via our conatct form.', 'salejunction'),
            'button_label' => esc_html__('Contact Us', 'salejunction'),
            'button_link' => esc_url('https://www.inkthemes.com/contact-us/'),
            'is_button' => true,
            'is_new_tab' => true,
        ),
        'second' => array(
            'title' => esc_html__('Support', 'salejunction'),
//			'icon'         => 'dashicons dashicons-book-alt',
            'text' => esc_html__('Checkout our support forum for more help.', 'salejunction'),
            'button_label' => esc_html__('Support Forum', 'salejunction'),
            'button_link' => 'https://wordpress.org/support/theme/salejunction',
            'is_button' => false,
            'is_new_tab' => true,
        ),
        'third' => array(
            'title' => esc_html__('Changelog', 'salejunction'),
//			'icon'         => 'dashicons dashicons-portfolio',
            'text' => esc_html__('We keep a track and manitain all the records of our enhanced features or latest versions of theme in the Changelog. You can find all those changes and updated anytime in our Changelog.', 'salejunction'),
            'button_label' => esc_html__('Changelog', 'salejunction'),
            'button_link' => esc_url(admin_url('themes.php?page=salejunction-welcome&tab=changelog&show=yes')),
            'is_button' => false,
            'is_new_tab' => false,
        ),
    ),
    // Getting started tab
    'getting_started' => array(
        'first' => array(
         //   'title' => esc_html__('', 'salejunction'),
            'text' => $func()
        ),
    ),
    // Getting started theme tab
    'getting_started_theme' => array(
        'first' => array(
            'title' => esc_html__('SaleJunction  Theme - Full Documentation', 'salejunction'),
            'text' => sprintf(__('Read full documentation of %s lite WordPress Theme. In case any issue, you can go to the community forum of InkThemes and get instant solution to your queries.', 'salejunction'), 'salejunction'),
            'button_label' => sprintf(__('View %s lite Documentation', 'salejunction'), 'salejunction'),
            'button_link' => 'https://www.inkthemes.com/doc/salejunction-wordpress-theme-documentation/',
            'is_button' => false,
            'recommended_actions' => false,
            'is_new_tab' => true,
        ),
        'second' => array(
            'title' => esc_html__('Upgrade to SaleJunction Wordpress Theme[Pro]', 'salejunction'),
            'text' => sprintf(__('Make a move to %s pro. Get Advance CSS, Mobile friendliness and more when you switch from basic to advance', 'salejunction'), 'salejunction'),
            'button_label' => esc_html__('View Pro Features', 'salejunction'),
            'button_link' => 'https://www.inkthemes.com/market/wordpress-marketplace-theme/',
            'is_button' => false,
            'recommended_actions' => true,
            'is_new_tab' => false,
        ),
    ),
    // Free vs PRO array.
    'free_pro' => array(
        'free_theme_name' => '' . wp_get_theme()->get('Name') . ' ',
        'pro_theme_name' => '' . wp_get_theme()->get('Name') . '  Pro',
        'pro_theme_link' => 'https://www.inkthemes.com/market/yoga-studio-wordpress-theme/',
        /* translators: s - theme name */
        'get_pro_theme_label' => sprintf(__('Get %s now!', 'salejunction'), 'Salejunction Pro'),
        'banner_link' => 'https://www.inkthemes.com/doc/salejunction-wordpress-theme-documentation/',
        'banner_src' => get_template_directory_uri() . '/assets/images/feature-image.png',
        'features' => array(
            array(
                'title' => __('Translation Ready', 'salejunction'),
                'description' => __('The theme is compatible with WPML plugin and you can display the contents in your desired language.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Live Customizer', 'salejunction'),
                'description' => __('Visible Editing Shortcuts For HomePage Elements. Now, edit the content directly by clicking the edit icon(pencil) on homepage elements.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Mobile friendly', 'salejunction'),
                'description' => __('Responsive layout. Works on every device.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Background Image', 'salejunction'),
                'description' => __('You can use any background image you want.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Social Icons', 'salejunction'),
                'description' => __('Add Social Icons for your Business website.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Blog Post Box On/Off', 'salejunction'),
                'description' => __('You can Enable or Disable the Home page Blog Post Section.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Footer Widget Section On/Off', 'salejunction'),
                'description' => __('You can Enable or Disable the Footer Section.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Slider Two Types', 'salejunction'),
                'description' => __('Change Normal and Layered Slider Types As per Your Choice', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Slider Speed Control', 'salejunction'),
                'description' => __('Change Speed of Slider As Required', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Six Slider In Home page', 'salejunction'),
                'description' => __('Change Slider Settings through Customizer.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Feature Column Structure', 'salejunction'),
                'description' => __('Choose whether you want 3-column structure or 4-column structure for feature box.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Home Page Display No Of Blogs', 'salejunction'),
                'description' => __('Change the number of blogs you want to display for home page.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Footer Widget Area Column Option', 'salejunction'),
                'description' => __('Change Footer Settings through Customizer.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Page and Blog Sidebar Layout', 'salejunction'),
                'description' => __('Change Layout of Blog and Page through Customizer in three Different Ways.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Typography', 'salejunction'),
                'description' => __('You can use any font family as you want.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Contact Map Page', 'salejunction'),
                'description' => __('Setup Contact Map Page for Your Theme.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Add Unlimited Feature Box In Home Page', 'salejunction'),
                'description' => __('Add Feature Box As Much As You Want.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Copyright Footer Text', 'salejunction'),
                'description' => __('Change your Copyright Footer Text for your business website.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Styling Options', 'salejunction'),
                'description' => __('Design your website with more colors and styles.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('Google Analytics Tracking Code', 'salejunction'),
                'description' => __('Analyze and track the number of visitors on your website with Google Analytics.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('SEO Optimized', 'salejunction'),
                'description' => __('Get a completely SEO optimized website for your business.', 'salejunction'),
                'is_in_lite' => 'false',
                'is_in_pro' => 'true',
            ),
            array(
                'title' => __('24*7 Support', 'salejunction'),
                'description' => __('Get instant solution to all your queries with our 24*7 support.', 'salejunction'),
                'is_in_lite' => 'true',
                'is_in_pro' => 'true',
            ),
        ),
    ),
);
inkthemes_About_Page::init(apply_filters('salejunction_about_page_array', $config));

function general_admin_notice() {
    $content = '<div class="warning-message">
       <img src="' . get_template_directory_uri() . '/images/information-icon.png"/>
    <p>Switch to Colorway WordPress Theme which is packed with 35+ ready-made elementor templates & offers better customization features and website development elements. <a href="https://wordpress.org/themes/colorway/" target="_blank">Download Colorway</a> for Free !!</p>
</div>';
    $content .= '<div id="colorway-sites-on-active" data-repeat-notice-after="">
                    <div class="notice-container">
                        <div class="colorway-sites-wrap">
                        <div class="block1-container">
                        <div class="top-container">
                            <div class="notice-image">
                            <img src="' . get_template_directory_uri() . '/images/thumb33.png" class="custom-logo" alt="Salejunction">
                            </div> 
                            
                        <div class="notice-content">
                        <div class="colorway-sites-block">
                        <h4>Colorway - Advanced Elementor Based WordPress Theme</h4>
                        <p>Create stunning websites in a minute by using 35+ elementor based site templates and the Drag & Drop builder.</p>
                        </div>
	<div class="colorway-review-notice-container">';

    //Check if Colorway Theme Exists or not        
   $get_themes = array();
   $get_themes = wp_get_themes();

   if (array_key_exists("colorway", $get_themes)) {
       $content .= '<a href="'.admin_url('theme-install.php?search=colorway').'" class="button button-primary button-hero">Try Colorway For Free</a>';
   } else {
       $content .= '<a href="'.admin_url('theme-install.php?search=colorway').'" class="button button-primary button-hero">Try to Colorway For Free</a>';
   }
    $content .= '<a target="_blank" href="' . esc_url(admin_url("customize.php")) . '" class="button cwy-sites-btn">Go to the Customizer</a></div>
       </div></div></div><div class="cw-sites-video">
 <div class="cwy-video-section embed-container">
<iframe width="100%" height="315px" src="https://www.youtube.com/embed/WLrfR4-HEfo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                </div>
            
</div>
        </div>
        </div>
	</div>';
    return $content;
}

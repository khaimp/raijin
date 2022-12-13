<?php
/**
 * $Desc
 *
 * @version    1.0
 * @package    basetheme
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2019 Gaviasthemess. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

define( 'VIZEON_THEMER_DIR', get_template_directory() );
define( 'VIZEON_THEME_URL', get_template_directory_uri() );

/*
 * Include list of files from Gavias Framework.
 */
require_once(VIZEON_THEMER_DIR . '/includes/theme-functions.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/template.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/theme-hook.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/theme-layout.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/metaboxes.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/custom-styles.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/menu/megamenu.php'); 
require_once(VIZEON_THEMER_DIR . '/includes/sample/init.php');

//Load Woocommerce
if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){
  add_theme_support( "woocommerce" );
  require_once(VIZEON_THEMER_DIR . '/includes/woocommerce/functions.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/woocommerce/hooks.php'); 
}

// Load Redux - Theme options framework
if( class_exists( 'Redux' ) ){
  require( VIZEON_THEMER_DIR . '/includes/options/init.php' );
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-general.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-header.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-breadcrumb.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-footer.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-styling.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-typography.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-blog.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-page.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-woo.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-portfolio.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-service.php'); 
  require_once(VIZEON_THEMER_DIR . '/includes/options/opts-socials.php'); 
} 
// TGM plugin activation
if ( is_admin() ) {
  require_once( VIZEON_THEMER_DIR . '/includes/tgmpa/class-tgm-plugin-activation.php' );
  require( VIZEON_THEMER_DIR . '/includes/tgmpa/config.php' );
}
load_theme_textdomain( 'vizeon', get_template_directory() . '/languages' );

//-------- Register sidebar default in theme -----------
//------------------------------------------------------
function vizeon_widgets_init() {
    
    register_sidebar( array(
        'name' => esc_html__( 'Default Sidebar', 'vizeon' ),
        'id' => 'default_sidebar',
        'description' => esc_html__( 'Appears in the Default Sidebar section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Plugin| WooCommerce Sidebar', 'vizeon' ),
        'id' => 'woocommerce_sidebar',
        'description' => esc_html__( 'Appears in the Plugin WooCommerce section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Plugin| WooCommerce Single', 'vizeon' ),
        'id' => 'woocommerce_single_summary',
        'description' => esc_html__( 'Appears in the WooCommerce Single Page like social, description text ...', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Portfolio Sidebar', 'vizeon' ),
        'id' => 'portfolio_sidebar',
        'description' => esc_html__( 'Appears in the Portfolio Page section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'After Offcanvas Mobile', 'vizeon' ),
        'id' => 'offcanvas_sidebar_mobile',
        'description' => esc_html__( 'Appears in the Offcanvas section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Service Sidebar', 'vizeon' ),
        'id' => 'service_sidebar',
        'description' => esc_html__( 'Appears in the Sidebar section of the Service Page.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'vizeon' ),
        'id' => 'blog_sidebar',
        'description' => esc_html__( 'Appears in the Blog sidebar section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Page Sidebar', 'vizeon' ),
        'id' => 'other_sidebar',
        'description' => esc_html__( 'Appears in the Page Sidebar section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer first', 'vizeon' ),
        'id' => 'footer-sidebar-1',
        'description' => esc_html__( 'Appears in the Footer first section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer second', 'vizeon' ),
        'id' => 'footer-sidebar-2',
        'description' => esc_html__( 'Appears in the Footer second section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer third', 'vizeon' ),
        'id' => 'footer-sidebar-3',
        'description' => esc_html__( 'Appears in the Footer third section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer four', 'vizeon' ),
        'id' => 'footer-sidebar-4',
        'description' => esc_html__( 'Appears in the Footer four section of the site.', 'vizeon' ),
        'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ) );
}
add_action( 'widgets_init', 'vizeon_widgets_init' );


if ( ! function_exists( 'vizeon_fonts_url' ) ) :
/**
 *
 * @return string Google fonts URL for the theme.
 */
function vizeon_fonts_url() {
  $fonts_url = '';
  $fonts     = array();
  $subsets   = '';
  $protocol = is_ssl() ? 'https' : 'http';
  /*
   * Translators: If there are characters in your language that are not supported
   * by Noto Sans, translate this to 'off'. Do not translate into your own language.
   */
  if ( 'off' !== _x( 'on', 'Covered By Your Grace font: on or off', 'vizeon' ) ) {
    $fonts[] = 'Covered+By+Your+Grace';
  }

   if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'vizeon' ) ) {
    $fonts[] = 'Poppins:400,500,600,700';
  }
  
  /*
   * Translators: To add an additional character subset specific to your language,
   * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
   */
  $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'vizeon' );

  if ( 'cyrillic' == $subset ) {
    $subsets .= ',cyrillic,cyrillic-ext';
  } elseif ( 'greek' == $subset ) {
    $subsets .= ',greek,greek-ext';
  } elseif ( 'devanagari' == $subset ) {
    $subsets .= ',devanagari';
  } elseif ( 'vietnamese' == $subset ) {
    $subsets .= ',vietnamese';
  }

  if ( $fonts ) {
    $fonts_url = add_query_arg( array(
      'family' => ( implode( '%7C', $fonts ) ),
      'subset' => ( $subsets ),
    ),  $protocol.'://fonts.googleapis.com/css' );
  }

  return $fonts_url;
}
endif;

function vizeon_custom_styles() {
  $custom_css = get_option( 'vizeon_theme_custom_styles' );
  if($custom_css){
    wp_enqueue_style(
      'vizeon-custom-style',
      get_template_directory_uri() . '/css/custom_script.css'
    );
    wp_add_inline_style( 'vizeon-custom-style', $custom_css );
  }
}

function vizeon_init_scripts(){
  global $post;
  $protocol = is_ssl() ? 'https' : 'http';
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
    wp_enqueue_script( 'comment-reply' );
  }

  wp_enqueue_style( 'vizeon-fonts', vizeon_fonts_url(), array(), null );
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery') );
  wp_enqueue_script('scrollbar', get_template_directory_uri() . '/js/perfect-scrollbar.jquery.min.js');
  wp_enqueue_script('magnific', get_template_directory_uri() .'/js/magnific/jquery.magnific-popup.min.js');
  wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'));
  wp_enqueue_script('lightgallery', get_template_directory_uri() . '/js/lightgallery/js/lightgallery.min.js' );
  wp_enqueue_script('sticky', get_template_directory_uri() . '/js/sticky.js', array('elementor-waypoints'));
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js');
  wp_enqueue_script('vizeon-main', get_template_directory_uri() . '/js/main.js', array('imagesloaded', 'jquery-masonry'));
  wp_enqueue_script('vizeon-woocommerce', get_template_directory_uri() . '/js/woocommerce.js');

  if(vizeon_woocommerce_activated() ){
    wp_dequeue_script('wc-add-to-cart');
    wp_register_script( 'wc-add-to-cart', VIZEON_THEME_URL . '/js/add-to-cart.js' , array( 'jquery' ) );
    wp_enqueue_script('wc-add-to-cart');
  }

  wp_enqueue_style('lightgallery', get_template_directory_uri() . '/js/lightgallery/css/lightgallery.min.css');
  wp_enqueue_style('lightgallery', get_template_directory_uri() . '/js/lightgallery/css/lg-transitions.min.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/js/owl-carousel/assets/owl.carousel.css');
  wp_enqueue_style('magnific', get_template_directory_uri() .'/js/magnific/magnific-popup.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome/css/font-awesome.css');
  wp_enqueue_style('vizeon-icons', get_template_directory_uri() . '/css/icon-custom.css');
  wp_enqueue_style('vizeon-style', get_template_directory_uri() . '/style.css');

  $skin = vizeon_get_option('skin_color', '');
  if(isset($_GET['gskin']) && $_GET['gskin']){
      $skin = $_GET['gskin'];
  }
  if(!empty($skin)){
      $skin = 'skins/' . $skin . '/'; 
  }
  wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/' . $skin . 'bootstrap.css', array(), '1.0.5' , 'all'); 
  wp_enqueue_style('vizeon-woocoomerce', get_template_directory_uri(). '/css/' . $skin . 'woocommerce.css', array(), '1.0.5' , 'all'); 
  wp_enqueue_style('vizeon-template', get_template_directory_uri().'/css/' . $skin . 'template.css', array(), '1.0.5' , 'all');
}
add_action('wp_enqueue_scripts', 'vizeon_init_scripts', 99);


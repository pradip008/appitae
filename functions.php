<?php
if ( ! defined( 'APPITAE_THEME_DIRECTORY_PATH' ) ) {
  define( 'APPITAE_THEME_DIRECTORY_PATH', get_template_directory() );
  // /var/www/html/wordpress/wp-content/themes/mytheme
}

if ( ! defined( 'APPITAE_THEME_DIRECTORY_URI' ) ) {
  define( 'APPITAE_THEME_DIRECTORY_URI', get_template_directory_uri() );
  // /var/www/html/wordpress/wp-content/themes/mytheme
}

function my_theme_enqueue_styles() {

  // style.css enqueue
  wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );

  // all style enqueue code
  wp_enqueue_style( 'bootstrap-min', APPITAE_THEME_DIRECTORY_URI . '/assets/css/bootstrap.min.css', array(), '5.3.2' ,'all');
  wp_enqueue_style( 'animate-min', APPITAE_THEME_DIRECTORY_URI . '/assets/css/animate.min.css', array(), '4.1.1' ,'all');
  wp_enqueue_style( 'flaticon', APPITAE_THEME_DIRECTORY_URI . '/assets/fonts/flaticon.css', array(), '5.3.1' ,'all');
  wp_enqueue_style( 'boxicons', APPITAE_THEME_DIRECTORY_URI . '/assets/css/boxicons.min.css', array(), '5.3.3' );
  wp_enqueue_style( 'owl-carousel-min', APPITAE_THEME_DIRECTORY_URI . '/assets/css/owl.carousel.min.css', array(), '5.3.9' ,'all');
  wp_enqueue_style( 'owl-theme-default', APPITAE_THEME_DIRECTORY_URI . '/assets/css/owl.theme.default.min.css', array(), '5.3.8' ,'all');
  wp_enqueue_style( 'magnific-popup', APPITAE_THEME_DIRECTORY_URI . '/assets/css/magnific-popup.css', array(), '5.3.7','all' );
  wp_enqueue_style( 'nice-select-min', APPITAE_THEME_DIRECTORY_URI . '/assets/css/nice-select.min.css', array(), '5.3.12' ,'all');
  wp_enqueue_style( 'meanmenu', APPITAE_THEME_DIRECTORY_URI . '/assets/css/meanmenu.css', array(), '5.3.31' ,'all');
  wp_enqueue_style( 'theme-style-new', APPITAE_THEME_DIRECTORY_URI . '/assets/css/style.css', array(), '5.3.35' ,'all');
  wp_enqueue_style( 'responsive', APPITAE_THEME_DIRECTORY_URI . '/assets/css/responsive.css', array(), '5.3.38','all' );
  wp_enqueue_style( 'theme-dark', APPITAE_THEME_DIRECTORY_URI . '/assets/css/theme-dark.css', array(), '5.3.37' ,'all');
  
  // all script enqueue code 
  wp_enqueue_script( 'jquery-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/jquery.min.js','[]','1.18.0', true );
  wp_enqueue_script( 'bootstrap-bundle-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/bootstrap.bundle.min.js', array(), '1.1.0', true );
  wp_enqueue_script( 'owl-carousel-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/owl.carousel.min.js', array(), '1.2.0', true );
  wp_enqueue_script( 'jquery-magnific-popup-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/jquery.magnific-popup.min.js', array(), '1.3.0', true );
  wp_enqueue_script( 'jquery-nice-select-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/jquery.nice-select.min.js', array(), '1.4.0', true );
  wp_enqueue_script( 'wow-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/wow.min.js', array(), '1.5.0', true );
  wp_enqueue_script( 'meanmenu', APPITAE_THEME_DIRECTORY_URI . '/assets/js/meanmenu.js', array(), '1.6.0', true );
  wp_enqueue_script( 'jquery-ajaxchimp-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/jquery.ajaxchimp.min.js', array(), '1.7.0', true );
  wp_enqueue_script( 'form-validator-min', APPITAE_THEME_DIRECTORY_URI . '/assets/js/form-validator.min.js', array(), '1.8.0', true );
  wp_enqueue_script( 'contact-form-script', APPITAE_THEME_DIRECTORY_URI . '/assets/js/contact-form-script.js', array(), '1.9.0', true );
  wp_enqueue_script( 'custom-j', APPITAE_THEME_DIRECTORY_URI . '/assets/js/custom.js', array(), '1.10.0', true );
  
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


require_once APPITAE_THEME_DIRECTORY_PATH . '/include/menus.php';
require_once APPITAE_THEME_DIRECTORY_PATH . '/include/customizer.php';

// Add theme support for various features
function theme_setup() {
  // Add support for WordPress title tag (since WP 4.1)
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails (featured images)
  add_theme_support( 'post-thumbnails' );

  // Define the default size for post thumbnails
  set_post_thumbnail_size( 150, 150, true ); // width, height, crop mode

  // Add support for automatic feed links (RSS feed links in the header)
  add_theme_support( 'automatic-feed-links' );

  // Add support for custom logo (with default sizes)
  add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
  ) );

  // Add support for HTML5 elements (search form, comment form, etc.)
  add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
  ) );

  add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'theme_setup' );




?>
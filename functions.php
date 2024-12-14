<?php
function my_theme_enqueue_styles() {

  // style.css enqueue
  wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );

  // all style enqueue code
  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2' ,'all');
  wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1' ,'all');
  wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), '5.3.1' ,'all');
  wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), '5.3.3' );
  wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '5.3.9' ,'all');
  wp_enqueue_style( 'owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '5.3.8' ,'all');
  wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '5.3.7','all' );
  wp_enqueue_style( 'nice-select-min', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), '5.3.12' ,'all');
  wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '5.3.31' ,'all');
  wp_enqueue_style( 'theme-style-new', get_template_directory_uri() . '/assets/css/style.css', array(), '5.3.35' ,'all');
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '5.3.38','all' );
  wp_enqueue_style( 'theme-dark', get_template_directory_uri() . '/assets/css/theme-dark.css', array(), '5.3.37' ,'all');
  
  // all script enqueue code 
  wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js','[]','1.18.0', true );
  wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.1.0', true );
  wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.2.0', true );
  wp_enqueue_script( 'jquery-magnific-popup-min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.3.0', true );
  wp_enqueue_script( 'jquery-nice-select-min', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.4.0', true );
  wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.5.0', true );
  wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '1.6.0', true );
  wp_enqueue_script( 'jquery-ajaxchimp-min', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), '1.7.0', true );
  wp_enqueue_script( 'form-validator-min', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), '1.8.0', true );
  wp_enqueue_script( 'contact-form-script', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), '1.9.0', true );
  wp_enqueue_script( 'custom-j', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.10.0', true );
  
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
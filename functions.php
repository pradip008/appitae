<?php
function my_theme_enqueue_styles() {



  // style.css enqueue
  wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );

  // all style enqueue code
  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2' );
  wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1' );
  wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), '5.3.1' );
  wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), '5.3.3' );
  wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '5.3.9' );
  wp_enqueue_style( 'owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '5.3.8' );
  wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '5.3.7' );
  wp_enqueue_style( 'nice-select-min', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), '5.3.12' );
  wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '5.3.31' );
  wp_enqueue_style( 'theme-style-new', get_template_directory_uri() . '/assets/css/style.css', array(), '5.3.35' );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '5.3.38' );
  wp_enqueue_style( 'theme-dark', get_template_directory_uri() . '/assets/css/theme-dark.css', array(), '5.3.37' );




}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
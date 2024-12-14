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



//Register Primary and footer  Menus 
if ( ! function_exists( 'appitae_register_nav_menu' ) ) {

	function appitae_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'appitae_register_nav_menu', 0 );

}




/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * Adds classes to the unordered list sub-menus.
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sub-menu',
			( $display_depth % 2  ? 'menu-odd dropdown-menu' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu dropdown-menu' : '' ),
			'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );

		// Build HTML for output.
		$output .= "\n" . $indent . '<ul class="' . $class_names . ' " id="navbar-nav">' . "\n";
	}

	/**
 * Start the element output.
 *
 * Adds main/sub-classes to the list items and links.
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param object $item   Menu item data object.
 * @param int    $depth  Depth of menu item. Used for padding.
 * @param array  $args   An array of arguments. @see wp_nav_menu()
 * @param int    $id     Current item ID.
 */
function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  global $wp_query;
  $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

  // Depth-dependent classes.
  $depth_classes = array(
      ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
      ( $depth >= 2 ? 'nav-item' : '' ),
      ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
      'menu-item-depth-' . $depth
  );
  $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

  // Passed classes.
  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
  $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

  // Build HTML.
  $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="nav-item ' . $depth_class_names . ' ' . $class_names . '">';

  // Link attributes.
  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
  $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';
  $attributes .= ' class="nav-link menu-link  ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

  // Add icon for menu items with children within the <a> tag.
  $has_children_icon = '';
  if ( in_array( 'menu-item-has-children', $classes ) ) {
      $has_children_icon = ' <i class="bx bx-caret-down"></i>';
  }

  // Build HTML output and pass through the proper filter.
  $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s%6$s</a>%7$s',
      $args->before,
      $attributes,
      $args->link_before,
      apply_filters( 'the_title', $item->title, $item->ID ),
      $args->link_after,
      $has_children_icon, // Add icon inside <a> tag
      $args->after
  );

  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}

}


?>
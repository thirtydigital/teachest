<?php
/*===========================
  Add WooCommerce Theme Support
===========================*/
add_theme_support( 'woocommerce' );
add_filter('show_admin_bar', '__return_false');

/*===========================
  Adds custom menu theme support
=============================*/
function register_menus()
{
	register_nav_menus(
		array(
      'main-menu' => __('Main Menu'),
      'main-menu-footer' => __('Main Menu Footer'),
      'our-range-categories' => __('Our Range Categories'),
    )
	);
}
add_action( 'init', 'register_menus' );

require_once( 'lib/woocommerce-api.php' );
?>

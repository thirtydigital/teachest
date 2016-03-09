<?php
/*===========================
  Add WooCommerce Theme Support
===========================*/
add_theme_support( 'woocommerce' );

function mythemename_categorycode() {
    if( !is_checkout() && !is_wc_endpoint_url( 'view-order' ) && !is_wc_endpoint_url( 'edit-account' ) && !is_wc_endpoint_url( 'edit-address' )) {
      add_filter( 'woocommerce_enqueue_styles', '__return_false' );
    }
}
add_action( 'wp', 'mythemename_categorycode' );


/*===========================
  SESSION STARTER
===========================*/
function register_session() {
    if (!session_id())
        session_start();
}
add_action('init', 'register_session');


/*===========================
  Remove the admin bar on the site
=============================*/
add_filter('show_admin_bar', '__return_false');


/*===========================
  Login Redirect so users aren't
  sent to the wp-admin panel
===========================*/
function wpse_11244_restrict_admin() {
  if ( ! current_user_can( 'manage_options' ) && !is_ajax() ) {
      wp_die( __('You are not allowed to access this part of the site') );
  }
}
add_action('wp_logout',create_function('','wp_redirect(home_url() . "/my-teachest/");exit();'));
add_action( 'admin_init', 'wpse_11244_restrict_admin', 1 );

/*===========================
  Adds custom menu theme support
=============================*/
function register_menus()
{
	register_nav_menus(
		array(
      'sitewide-menu' => __('Sitewide Menu'),
      'footer-menu'   => __('Footer Menu'),
      'subfooter-menu'   => __('Sub Footer Menu'),
      'account-menu'   => __('Account Menu')
    )
	);
}
add_action( 'init', 'register_menus' );


/*===========================
  Change the length of the exceprt copy
  globally
===========================*/
function custom_excerpt_length( $length )
{
    return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*===========================
  Add support for post thumbnails
===========================*/
if ( function_exists( 'add_theme_support' ) ) {
   add_theme_support( 'post-thumbnails' );
}


/*===========================
  Add login/logout link on the menu
===========================*/
function add_loginout_link( $items, $args ) {
  if (is_user_logged_in() && $args->theme_location == 'sitewide-menu') {
    $items .= '<li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Logout</a></li>';
  }
  elseif (!is_user_logged_in() && $args->theme_location == 'sitewide-menu') {
    $items .= '<li><a href="/sign-up/">Login / Sign Up</a></li>';
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );


function add_loginout_link_2( $items, $args ) {
  if (is_user_logged_in() && $args->theme_location == 'account-menu') {
    $items .= '<li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Logout</a></li>';
  }
  elseif (!is_user_logged_in() && $args->theme_location == 'account-menu') {
    $items .= '<li><a href="' . get_permalink( woocommerce_get_page_id( 'myaccount' ) ) . '">Login / Sign Up</a></li>';
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link_2', 10, 2 );


 /*===========================
  Add login/logout link on the menu
===========================*/
function custom_pre_get_posts_query( $q ) {
  if ( ! $q->is_main_query() ) return;
  if ( ! $q->is_post_type_archive() ) return;

  if ( ! is_admin() && is_shop() ) {
    $q->set( 'tax_query', array(array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => array( 'pack', 'subscription-tiers' ), // Don't display products in the knives category on the shop page
      'operator' => 'NOT IN'
    )));
  }
  remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );
}
add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );


 /*=====================================
  Redirect user after successful login.
===================================*/
function ras_login_redirect( $redirect_to ) {
  if ( !WC_Subscriptions_Manager::user_has_subscription( get_current_user_id())) {
    $redirect_to = '/build-your-chest/';
  }
  else {
    $redirect_to = '/my-teachest/';
  }
  return $redirect_to;
}
add_filter('woocommerce_login_redirect', 'ras_login_redirect');
add_filter('woocommerce_registration_redirect', 'ras_login_redirect');


/*=====================================
  Redirect user after checkout if it is a subscription.
===================================*/
function redirect_to_checkout() {
  global $woocommerce;
  if ($_POST['direct_to_checkout']) {
    $_SESSION['temp_tea_ids'] = explode("|",$_POST['existing_ingredients']);

    if($_POST['unpausing_order_ID']) {
      $_SESSION['unpausing_order_ID_sess'] = $_POST['unpausing_order_ID'];
      $_SESSION['unpausing_sub'] = true;
    }

    $checkout_url = '/checkout/';
  }
  if ($_POST['direct_to_shop']) {
    $checkout_url = ( is_ssl() ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  }
  if ($_POST['direct_to_shopfront']) {
    $checkout_url = '/build-your-chest/';
  }
  return $checkout_url;
}
add_filter ('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');

/*=====================================
  This adjusts the year selector of the date picker to expand by 80 years.
===================================*/
function custom_adjust_datepicker_range () {
  if ( is_checkout() ) {
    wp_enqueue_script( 'jquery' );
?>
<script type="text/javascript">
jQuery( document ).ready( function ( e ) {
  if ( jQuery( '.checkout-date-picker' ).length ) {
    jQuery( '.checkout-date-picker' ).datepicker( 'option', 'changeYear', true );
    jQuery( '.checkout-date-picker' ).datepicker( 'option', 'yearRange', '-80:+0' );
    jQuery(' .checkout-date-picker' ).datepicker( 'option', 'dateFormat', "dd M yy");
  }
});
</script>
<?php
  }
} // End custom_adjust_datepicker_range()

add_action( 'wp_footer', 'custom_adjust_datepicker_range', 50 );


/*=====================================
  Add a product to a subscription option, uses WP Sessions.
===================================*/
function add_product_to_sub_options() {
  if ( isset( $_POST['add_product_to_sub_options'] ) && isset ($_POST['tea_ID']) ) {
    $quantity = $_POST['add_product_to_sub_options'];
    $tea_ID = $_POST['tea_ID'];

    $_pf = new WC_Product_Factory();
    $product = $_pf->get_product($tea_ID);

    if (!isset($_SESSION['temp_tea_ids'])) {
      $_SESSION['temp_tea_ids'] = array();
    }

    if ($product->is_type('bundle')){

      $tmp_tea_array = array();
      $bundled_products = $product->bundle_data;

      foreach($bundled_products as $prod) {

        for($j=0;$j<$quantity;$j++) {
          for($i = 0; $i < $prod['bundle_quantity']; $i++){
            array_push($tmp_tea_array,$prod['product_id']);
          }
        }
      }
      $_SESSION['temp_tea_ids'] = $tmp_tea_array;
    } else {
      for($i=0;$i<$quantity;$i++) {
        array_push($_SESSION['temp_tea_ids'], $tea_ID);
      }
    }
  }
}
add_action( 'init', 'add_product_to_sub_options' );


/*=====================================
  Remove a product from a subscription option, uses WP Sessions.
===================================*/
function remove_product_to_sub_options() {
  if ( isset( $_POST['remove_product_to_sub_options'] ) && isset($_POST['tea_ID'])) {
    $tea_ID = $_POST['tea_ID'];
    $arr    = $_SESSION['temp_tea_ids'];

    if(($key = array_search($tea_ID, $arr)) !== false) {
      unset($arr[$key]);
    }

    $_SESSION['temp_tea_ids'] = $arr;
    if (count($_SESSION['temp_tea_ids']) === 0) { unset($_SESSION['temp_tea_ids']);}
  }
}
add_action( 'init', 'remove_product_to_sub_options' );


/*=====================================
  Remove all products of a type from a subscription option, uses WP Sessions.
===================================*/
function remove_all_product_to_sub_options() {
  if ( isset( $_POST['remove_all_product_to_sub_options'] ) && isset($_POST['tea_ID'])) {
    $tea_ID = $_POST['tea_ID'];
    $arr    = $_SESSION['temp_tea_ids'];

    foreach (array_keys($arr, $tea_ID) as $key) {
      unset($arr[$key]);
    }

    $_SESSION['temp_tea_ids'] = $arr;
    if (count($_SESSION['temp_tea_ids']) === 0) { unset($_SESSION['temp_tea_ids']);}
  }
}
add_action( 'init', 'remove_all_product_to_sub_options' );


/*=====================================
  Setup the Editing Ingredients Stuff
===================================*/
function edit_ingredients_for_cart () {
  if ( isset($_POST['changing_ingredients']) && $_POST['changing_ingredients'] ) {
    $_SESSION['changing_ingredients_sess'] = 1;
    unset($_SESSION['temp_tea_ids']);
    unset($_SESSION['amending_order_ID_sess']);

    $_SESSION['amending_order_ID_sess'] = $_POST['amending_order_ID'];
    $_SESSION['temp_tea_ids'] = array_filter(explode("|",$_POST['existing_ingredients']));
    $_SESSION['subscription_product_id_sess'] = $_POST['subscription_product_id'];

    wp_redirect('/choose-your-tea/');
    exit();
  }
}
add_action( 'wp_loaded', 'edit_ingredients_for_cart' );


/*=====================================
  Setup the Editing Ingredients Stuff
===================================*/
function amend_ingredients_for_cart () {
  if ( isset($_POST['confirm_amended_subscription']) && $_POST['confirm_amended_subscription'] ) {
    $subscription_ID = $_POST['amended_subscription_id'];
    $orderID = $_POST['amended_order_id'];
    $product_option_IDs = $_POST['product_options'];

    $args = array(
      'post_type'       => 'product',
      'post__in'        => array_filter(explode("|",$product_option_IDs)),
      'posts_per_page'  => 500
    );
    $array_dupes = array_count_values($_SESSION['temp_tea_ids']);
    $prods = new WP_Query( $args );
    while ( $prods->have_posts() ) : $prods->the_post();
      $text .= get_the_title() . ' x' . $array_dupes[get_the_ID()] . '|';
    endwhile;


    update_post_meta( $orderID, 'Subscription Tea Choice IDs', sanitize_text_field( $product_option_IDs ) );
    update_post_meta( $orderID, 'Subscription Tea Choices Text', sanitize_text_field( $text ));

    wp_redirect('/my-teachest/#my-tea');
    exit();
  }
}
add_action( 'wp_loaded', 'amend_ingredients_for_cart' );


/*=====================================
 * Add the field to the checkout
 ===================================*/
function my_custom_checkout_field( $checkout ) {

  if(isset($_SESSION['temp_tea_ids'])) {

    $tea_IDs = $_SESSION['temp_tea_ids'];

    $csv = '';
    $text = '';

    foreach($tea_IDs as $tea_ID) {
      $csv .= $tea_ID . '|';
    }

    $args = array(
      'post_type'       => 'product',
      'post__in'        => $_SESSION['temp_tea_ids'],
      'posts_per_page'  => 500
    );
    $array_dupes = array_count_values($_SESSION['temp_tea_ids']);
    $prods = new WP_Query( $args );
    while ( $prods->have_posts() ) : $prods->the_post();
      $text .= get_the_title() . ' x' . $array_dupes[get_the_ID()] . '|';
    endwhile;

    echo '<div id="tea_box_options">';
      woocommerce_form_field( 'subscription_tea_choices_IDs', array(
          'type'          => 'text',
          'class'         => array('my-field-class form-row-wide'),
          'label'         => __(''),
          'placeholder'   => __('Enter something'),
          ), $csv);

      woocommerce_form_field( 'subscription_tea_choices_Text', array(
          'type'          => 'text',
          'class'         => array('my-field-class form-row-wide'),
          'label'         => __(''),
          'placeholder'   => __('Enter something'),
          ), $text);
    echo '</div>';
  }
}
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );


/*=====================================
 * Save the order meta with field value
 ===================================*/
function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['subscription_tea_choices_IDs'] ) ) {
        update_post_meta( $order_id, 'Subscription Tea Choice IDs', sanitize_text_field( $_POST['subscription_tea_choices_IDs'] ) );
    }
    if ( ! empty( $_POST['subscription_tea_choices_Text'] ) ) {
        update_post_meta( $order_id, 'Subscription Tea Choices Text', sanitize_text_field( $_POST['subscription_tea_choices_Text'] ) );
    }
}
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );


/*=====================================
 * Display field value on the order edit page
 ===================================*/
function my_custom_checkout_field_display_admin_order_meta($order){
    $products = get_post_meta( $order->id, 'Subscription Tea Choice IDs', true );
    $products_arr = explode('|',$products);

    $args = array(
      'post_type'       => 'product',
      'post__in'        => $products_arr,
    );
    $array_dupes = array_count_values($products_arr);
    $prods = new WP_Query( $args );

    echo '<h4>'.__('Subscribed Teas').':</h4>';

    while ( $prods->have_posts() ) : $prods->the_post();
      echo '<div class="internal_tea"><a href="/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.get_the_title().'</a> x'.$array_dupes[get_the_ID()].'</div>';
    endwhile;
}
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );




// alter the subscriptions error
function my_woocommerce_same_email_error( $error ) {
    if( 'An account is already registered with your email address. Please login.' == $error ) {
        $error = 'An account has already been registered with this email address. Please <a href="/my-teachest/">login</a> or <a href="/my-teachest/lost-password/">reset your password</a>.';
    }
    return $error;
}
add_filter( 'woocommerce_add_error', 'my_woocommerce_same_email_error' );

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );

function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group';

            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}



?>

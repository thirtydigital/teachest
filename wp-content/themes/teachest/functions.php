<?php
global $woocommerce;

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

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Add new register fields for WooCommerce registration.
 *
 * @return string Register fields HTML.
 */
function wooc_extra_register_fields() {
	?>
  <div class="form-group">
    <label for="reg_billing_first_name" class="col-sm-4 control-label text-uppercase"><?php _e( 'First name', 'woocommerce' ); ?> <span class="">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="input-text form-control input-lg" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </div>
  </div>

  <div class="form-group">
    <label for="reg_billing_last_name" class="col-sm-4 control-label text-uppercase"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="input-text form-control input-lg" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </div>
  </div>

	<?php
}

add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

/**
 * Save the extra register fields.
 *
 * @param  int  $customer_id Current customer ID.
 *
 * @return void
 */
function wooc_save_extra_register_fields( $customer_id ) {
	if ( isset( $_POST['billing_first_name'] ) ) {
		update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
		update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
	}

	if ( isset( $_POST['billing_last_name'] ) ) {
		update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	}
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

/*=====================================
 Redirect user after successful login.
===================================*/
function ras_login_redirect( $redirect_to ) {
  if ( isset( $_POST['product-subscription'] ) && '1' == $_POST['product-subscription'] ) {
    $redirect_to = '/checkout/';
  }
 else {
   $redirect_to = '/my-account/';
 }
 return $redirect_to;
}
add_filter('woocommerce_login_redirect', 'ras_login_redirect');
add_filter('woocommerce_registration_redirect', 'ras_login_redirect');


function add_sub_to_basket() {
	if ( isset( $_POST['product-subscription'] ) && '1' == $_POST['product-subscription'] ) {
    // var_dump($_POST['product-subscription']);
    // $$woocommerce->cart->add_to_cart( $product_id, $nos, $variationid, $spec, null );

    // Collect the product info send through
    $productID = $_POST['productID'];
    $productPrice = $_POST['productPrice'];
    $productSchedule = $_POST['productSchedule'];

    $args = array(
      'post_parent' => $productID,
      'post_type' => array('product_variation'),
      'meta_query' => array(
        array(
          'key' => '_subscription_price',
          'value' => $productPrice
        ),
        array(
          'key' => '_subscription_period_interval',
          'value' => $productSchedule
        )
      )
    );

    $query = new WP_Query($args);

    $query->the_post();
    $variantID = get_the_ID();

    global $woocommerce;
    $woocommerce->cart->add_to_cart( $productID, 1, $variantID);
	}
}
add_action( 'init', 'add_sub_to_basket' );


?>

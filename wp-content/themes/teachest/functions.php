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
		// WordPress default first name field.
		update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );

		// WooCommerce billing first name.
		update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
	}

	if ( isset( $_POST['billing_last_name'] ) ) {
		// WordPress default last name field.
		update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );

		// WooCommerce billing last name.
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	}

}

add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );



require_once( 'lib/woocommerce-api.php' );
?>

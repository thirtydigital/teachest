<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

  <?php do_action( 'woocommerce_review_order_before_cart_contents' );

  foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

    ?>
    <h3 class="spacer"><?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?></h3>
    <p class="spacer">
      <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?><br />
      <?php
        $order_time = '';
        $current_day = date("d");

        switch($current_day) {
          case "01":
          case "02":
          case "03":
          case "04":
            $order_time = strtotime("next Thursday + 1 week");
          break;

          default:
            $order_time = strtotime("next Thursday");
          break;
        }
      ?>
      <strong>You will receive your first Tea Chest on <?php echo date('d/m/Y', $order_time); ?></strong>
    </p>

    <?php
  }
}

do_action( 'woocommerce_review_order_after_cart_contents' );
?>
<span class="text-left">
<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', get_option( 'woocommerce_enable_order_comments', 'yes' ) === 'yes' ) ) : ?>

	<?php foreach ( $checkout->checkout_fields['order'] as $key => $field ) : ?>
    <?php $field['input_class'][] = 'form-control input-lg'; ?>
		<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

	<?php endforeach; ?>

<?php endif; ?>
</span>
<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>

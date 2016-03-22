<?php
/**
 * Display the related orders for a subscription or order
 *
 * @var object $post The primitive post object that is being displayed (as an order or subscription)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="woocommerce_order_items_wrapper">
	<table class="woocommerce_order_items">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Order Number', 'woocommerce-subscriptions' ); ?></th>
				<th><?php esc_html_e( 'Relationship', 'woocommerce-subscriptions' ); ?></th>
				<th><?php esc_html_e( 'Date', 'woocommerce-subscriptions' ); ?></th>
				<th><?php esc_html_e( 'Status', 'woocommerce-subscriptions' ); ?></th>
				<th style="text-align:right;"><?php esc_html_e( 'Total', 'woocommerce-subscriptions' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_subscriptions_related_orders_meta_box_rows', $post ); ?>
		</tbody>
	</table>
</div>

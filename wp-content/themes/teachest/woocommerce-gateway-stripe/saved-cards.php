<h3 id="saved-cards" style="margin-top:40px;"><?php _e( 'Saved cards', 'woocommerce-gateway-stripe' ); ?></h3>
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th><?php _e( 'Card', 'woocommerce-gateway-stripe' ); ?></th>
			<th><?php _e( 'Expires', 'woocommerce-gateway-stripe' ); ?></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ( $cards as $card ) :
			if ( 'card' !== $card->object ) {
				continue;
			}
		?>
		<tr>
            <td><?php printf( __( '%s card ending in %s', 'woocommerce-gateway-stripe' ), $card->brand, $card->last4 ); ?></td>
            <td><?php printf( __( 'Expires %s/%s', 'woocommerce-gateway-stripe' ), $card->exp_month, $card->exp_year ); ?></td>
			<td>
                <form action="" method="POST" class="text-right">
                    <?php wp_nonce_field ( 'stripe_del_card' ); ?>
                    <input type="hidden" name="stripe_delete_card" value="<?php echo esc_attr( $card->id ); ?>">
                    <input type="submit" class="btn btn-tc-default btn-sm text-uppercase" value="<?php _e( 'Delete card', 'woocommerce-gateway-stripe' ); ?>">
                </form>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>

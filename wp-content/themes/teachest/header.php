<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?>
		<?php if (!is_page('home') && (!is_shop()) && (!is_search()) && (!is_product_category())) { ?>
			| <?php the_title(); ?>
		<?php } ?>
		</title>
		<link media="all" rel="stylesheet" href="/wp-content/themes/<?php echo get_template(); ?>/style.css">
		<?php wp_head(); ?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>

    <?php if (is_front_page()) { ?>
      <div style="width: 100%; height: 700px;position:absolute;"
        data-vide-bg="/wp-content/themes/<?php echo get_template(); ?>/dist//video/picdipsip.mp4" data-vide-options="loop: true, muted: true, position: 0% 0%, resizing: false">
      </div>
    <?php } ?>

		<div id="wrapper" class="">
		<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<div class="internal">
					<form>
					  <div class="form-group form-search" role="search" method="get" id="form-search" action="<?php echo home_url( '/' ); ?>">
						<input type="text" class="form-control" placeholder="Search for tea..." value="<?php echo get_search_query(); ?>" name="s" />
					  </div>
					</form>
          <?php if(!is_user_logged_in()) { ?><style>.menu-item-my-account{display:none;}</style><?php } ?>
					<?php wp_nav_menu( array( 'theme_location' => 'sitewide-menu', 'container' => false, 'menu_class' => 'sidebar-nav') ); ?>
          <hr/>
          <div class="">
            <?php wp_nav_menu( array( 'theme_location' => 'subfooter-menu', 'container' => false, 'menu_class' => 'sidebar-nav sidebar-nav-2') ); ?>
          </div>
				</div>
			</div>
			<!-- /#sidebar-wrapper -->
			<header>
				<nav class="navbar">
					<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar" id="menu-toggle" aria-expanded="false" aria-controls="navbar" style="position:fixed">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
					</button>
					<div class="navbar-header pull-right" style="position:fixed;right:0px">
						<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
					</div>
          <?php if ( is_user_logged_in() ) { ?>
  					<div class="pull-right header-user-menu">
  						<a id="drop1" href="/my-teachest/">
  							<span class="glyphicon glyphicon-user"></span>
  						</a>
  					</div>
          <?php } ?>
          <?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) { ?>
            <?php
                $tea_count = count($_SESSION['temp_tea_ids']);

                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                  $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                  $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                  if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    $product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
                    $subscription_max_quantity = get_field('maximum_quantity',$cart_item['product_id']);
                    ?>
                    <div class="navbar-header pull-right">

          						<a class="navbar-trolley hidden-md hidden-lg" href="/cart/"><span style="position: absolute;top: 23px;font-size: 12px;left: 4px;"><?php echo $tea_count; ?>/<?php echo $subscription_max_quantity; ?></span> <i class="fa fa-shopping-cart fa-2x"></i></a>
          					</div>
              <?php
                  }
                }
              ?>
          <?php } ?>
				</nav>
			</header>
		    <!-- Fixed navbar -->
		    <div class="container">

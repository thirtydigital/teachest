<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="jumbotron">
    <div class="container text-center">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <h1 class="display-3 text-uppercase"><?php the_title(); ?></h1>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
  <div class="container-fluid generic-content">
    <div class="container">
      <div class="row">
				<?php wc_get_template_part( 'content', 'single-product' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; ?><?php endif; ?>
<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 1.0
 */
?>
<?php get_header(); ?>
<div class="main-wrapper-inner">
  <div class="units-row">
    <?php get_template_part('navigation','store'); ?>
	<?php if ( have_posts() ) : ?>
	<div class="unit-80 left-m-inner tea-blocks">
      <ul class="blocks-3">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php wc_get_template_part( 'content', 'product' ); ?>
		<?php endwhile; ?>
	  </ul>
	</div>
	<?php else : ?>
		<div class="unit-80 left-m-inner tea-blocks">
		<?php wc_get_template( 'loop/no-products-found.php' ); ?>
		</div>
	<?php endif; ?>

	<div class="unit-20"></div>
  </div>
</div>
<?php do_action( 'woocommerce_sidebar' ); ?>
<?php get_footer(); ?>

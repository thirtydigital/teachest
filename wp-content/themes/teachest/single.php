<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 1.0
 */
?>
<?php get_header();?>
<?php while (have_posts()) : the_post(); ?>
  <?php
  	$picks = get_field('product_picks', get_the_ID());
  	if ($picks) {
  		$picks_arr = array();
  		foreach($picks as $pick) array_push($picks_arr,$pick->ID);
  		$args = array (
  				'post_type'				=> 'product',
  				'post__in' 				=> $picks_arr,
  			);
  	}
  	$products = new WP_Query( $args );
	?>
	<div class="row">
        <div class="col-sm-9 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <br/>
          <div class="col-sm-12">
            <?php
            while ( $products->have_posts() ) : $products->the_post();
              wc_get_template_part( 'content', 'product' );
            endwhile;
            ?>
        </div>
        </div><!-- /.blog-main -->
		<?php do_action( 'woocommerce_sidebar' ); ?>
	</div>
<?php endwhile; ?>
<?php get_footer();?>

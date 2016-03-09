<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 1.0
 */
?>
<?php get_header();?>
<?php while (have_posts()) : the_post(); ?>
  <div class="row">
	<div class="col-xs-12 col-lg-12">
    <?php if (get_field('show_title', get_the_ID() )) { ?>
		<h1><?php the_title(); ?></h1>
    <?php } ?>
		<?php the_content(); ?>
	</div>
  </div><!--/row-->
<?php endwhile; ?>
<?php get_footer();?>

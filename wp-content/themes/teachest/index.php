<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 1.0
 */
?>
<?php get_header();?>
<?php while (have_posts()) : the_post(); ?>

	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
		  <p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
		  </p>
		  <div class="jumbotron">
			<h1><?php the_title(); ?></h1>
		  </div>
		  <div class="row">
			<div class="col-xs-12 col-lg-12">
				<?php the_content(); ?>
			</div>
		  </div><!--/row-->
		</div><!--/.col-xs-12.col-sm-9-->
	</div>
	
<?php endwhile; ?>
<?php get_footer();?>

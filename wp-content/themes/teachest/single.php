<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 2.0
 */
?>
<?php get_header();?>
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
      <div class="col-sm-12">
        <?php 
        if ( has_post_thumbnail() ) { ?>
            <div class='featured-image'><?php the_post_thumbnail(); ?></div>
        <?php } ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?><?php endif; ?>
<?php get_footer();?>

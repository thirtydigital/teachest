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
 * @since Tea Chest 2.0
 */
?>
<?php get_header();?>
<div class="jumbotron">
  <div class="container text-center">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h1 class="display-3 text-uppercase">Blog</h1>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid generic-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="text-center">
            <?php the_post_thumbnail( array(300, 300) ); ?>
          </div>
          <h2 class="text-center text-uppercase"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2><br/>
          <?php the_excerpt(); ?><br/>
          <a href="<?php the_permalink(); ?>" class="text-center btn btn-tc-default btn-lg">Read more</a>
          <hr class="dark" />
        <?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>

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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail() ) { ?>
          <div class='col-lg-4 col-sm-6 col-xs-12 text-center' style='margin-bottom:20px'>
            <?php the_post_thumbnail( 'medium' ); ?>
          </div>
          <div class='col-lg-8 col-sm-6 col-xs-12'>
            <h2 class="text-uppercase" style='margin-top:0'><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2><br/>
            <?php the_excerpt(); ?><br/>
            <a href="<?php the_permalink(); ?>" class="btn btn-tc-default btn-lg">Read more</a>
          </div>
          <div class='col-sm-12'>
            <hr class="dark" />
          </div>
        <?php } else { ?>
        <div class="col-sm-12">
          <h2 class="text-uppercase"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2><br/>
          <?php the_excerpt(); ?><br/>
          <a href="<?php the_permalink(); ?>" class="btn btn-tc-default btn-lg">Read more</a>
          <hr class="dark" />
        </div>
        <?php } ?>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>

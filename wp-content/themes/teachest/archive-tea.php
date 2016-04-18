<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _mbbasetheme
 */

get_header(); ?>
<div class="jumbotron">
  <div class="container text-center">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h1 class="display-3 text-uppercase">Our Range</h1>
      <nav class="tea-categories text-uppercase">
        <?php wp_nav_menu( array( 'theme_location' => 'our-range-categories', 'container' => false, 'menu_class' => 'list-inline') ); ?>
      </nav>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid generic-content">
  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 our-range-tea spacer">
        <div class="media">
          <div class="media-left">
            <?php the_post_thumbnail( array(200,200) ); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-tc-default text-uppercase spacer btn-block">View</a>
          </div>
          <div class="media-body">
            <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
            <p><?php echo get_the_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

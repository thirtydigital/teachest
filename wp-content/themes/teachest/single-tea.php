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
      <div class="col-xs-12 col-sm-4 center-block">
        <?php the_post_thumbnail( array(325,325), array( 'class' => 'img-responsive' ) ); ?>
        <br />
      </div>
      <div class="col-xs-12 col-sm-8">
        <h3 class="media-heading"><?php echo get_the_title(); ?></h3>
        <h4 class="text-uppercase"><?php echo get_field('country_of_origin', get_the_ID()); ?></h4>
        <p><?php echo get_the_content(); ?></p>
        <p>
          <i class="fa fa-minus"></i><i style="position:relative;left:-2px;" class="fa fa-minus"></i>
        </p>
        <p>
          Temp: <?php echo get_field('recommended_temperature', get_the_ID()); ?><sup>&deg;</sup>C<br/>
          Steep: <?php echo get_field('recommended_steep_time', get_the_ID()); ?>
        </br/>
        </p>
      </div>
    </div>
  </div>
</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer();?>

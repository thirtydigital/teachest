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
          <p><?php echo get_the_content(); ?></p>
          <p>
            <i class="fa fa-minus"></i><i style="position:relative;left:-2px;" class="fa fa-minus"></i>
          </p>
          <p>
            <?php if ( get_field('country_of_origin', get_the_ID()) ) { ?>
            Origin: <span class="text-uppercase"><?php echo get_field('country_of_origin', get_the_ID()); ?></span><br />
            <?php } ?>
            <?php if ( get_field('recommended_temperature', get_the_ID()) ) { ?>
            Temp: <?php echo get_field('recommended_temperature', get_the_ID()); ?><sup>&deg;</sup>C<br/>
            <?php } ?>
            <?php if ( get_field('recommended_steep_time', get_the_ID()) ) { ?>
            Steep: <?php echo get_field('recommended_steep_time', get_the_ID()); ?>
            <?php } ?>
            <br />
          </p>
          <a href="/subscribe/" class="btn btn-tc-default btn-xl text-uppercase spacer">Get started</a>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?><?php endif; ?>
<?php get_footer();?>

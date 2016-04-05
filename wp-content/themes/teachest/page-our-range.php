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
      <h1 class="display-3 text-uppercase"><?php echo the_title(); ?></h1>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid generic-content">
  <div class="container">
    <?php $args = array(
      'post_type' => 'tea',
      'posts_per_page' => 10
    );
    $loop = new WP_Query( $args ); $loop_count = 0;
    ?>
    <?php if ( $loop->have_posts() ) { ?>
    <div class="row">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-sm-4 our-range-tea">
        <div class="media">
          <div class="media-left">
            <?php the_post_thumbnail( array(100,100) ); ?>
          </div>
          <div class="media-body">
            <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
            <h4 class="text-uppercase"><?php echo get_field('country_of_origin', get_the_ID()); ?></h4>
            <p><?php echo get_the_content(); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php } ?>
  </div>
</div>
<?php get_footer();?>

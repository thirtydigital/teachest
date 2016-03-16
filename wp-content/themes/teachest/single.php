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
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, dignissim sed metus pulvinar, fringilla fermentum odio. Nulla sed arcu lectus.</p> -->
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid generic-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php wp_link_pages( array(
  				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
  				'after'       => '</div>',
  				'link_before' => '<span>',
  				'link_after'  => '</span>',
  				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
  				'separator'   => '<span class="screen-reader-text">, </span>',
  			) ); ?>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <hr class="dark" />
        <?php if ( comments_open() || get_comments_number() ) {
  				comments_template();
  			}?>
        <hr class="dark" />
        <?php if ( is_singular( 'attachment' ) ) {
  				// Parent post navigation.
  				the_post_navigation( array(
  					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
  				) );
  			} elseif ( is_singular( 'post' ) ) {
  				// Previous/next post navigation.
  				the_post_navigation( array(
  					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
  						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
  						'<span class="post-title">%title</span>',
  					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
  						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
  						'<span class="post-title">%title</span>',
  				) );
  			}?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer();?>

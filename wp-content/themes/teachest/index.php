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
 * @since Tea Chest 2.0
 */
?>
<?php get_header();?>
<div class="jumbotron">
  <div class="container text-center">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h1 class="display-3">Discover a world of teas from our hand picked TeaChests.</h1>
      <p class="width-thin">Select a top level tea type and we will send you a hand curated TeaChest every delivery. </p>
      <a href="#how-it-works" class="btn-scrolldown"><i class="fa fa-chevron-down"></i></a>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container marketing">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2 class="text-uppercase" id="how-it-works">How it works</h2>
      <p class="width-thin">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
        Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
      </p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf.png" class="img-responsive" style="margin-bottom:50px" />
      <h2><span class="step-number">1</span> Select a type of tea</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pretium nibh, eu pharetra orci. Cras sit amet consectetur.</p>
    </div>
    <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf2.png" class="img-responsive" />
      <h2><span class="step-number">2</span> Select quantity</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pretium nibh, eu pharetra orci. Cras sit amet consectetur.</p>
   </div>
   <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-delivery.png" class="img-responsive" />
      <h2><span class="step-number">3</span> Select frequency</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pretium nibh, eu pharetra orci. Cras sit amet consectetur.</p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-sm-12 text-center">
      <h2 class="width-thin">And our TeaChest experts will do the rest</h2>
      <p class="width-thin">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
        Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
      </p>
      <a href="/subscribe/" class="btn btn-tc-default-inverse btn-xl text-uppercase spacer">Get started</a>
    </div>
  </div>
</div>

<div class="container-fluid socialvalidation">
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <p>
          Lorem ipsum dolor sit amet. Morbi bibendum dignissim imperdiet. Nam vitae consequat dolor, eu facilisis.
        </p>
        <p>
          <strong>@andygirvan</strong>
        </p>
      </div>
      <div class="col-sm-4">
        <p>
          Lorem ipsum dolor sit amet. Morbi bibendum dignissim imperdiet. Nam vitae consequat dolor, eu facilisis.
        </p>
        <p>
          <strong>@andygirvan</strong>
        </p>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</div>
<div class="container-fluid tearange">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase">Our Tea Range</h2>
        <p class="width-thin">
          We explore the world for the finest teas from the most interesting locations; hand picking the best selection of teas for you to enjoy in the comfort of your own home.
        </p>
      </div>
    </div>
    <div class="row spacer">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-8 no-padding teabox">
        <div class="col-sm-5 no-padding">
          <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/tea-example.png" class="img-responsive" />
        </div>
        <div class="col-sm-7 teabox-info">
          <h3>Zhejiang Cloud</h3>
          <h4 class="text-uppercase">China</h4>
          <p>Zhejiang Cloud Green tea is a delicacy from the Zhejiang province in China. A single bud and two leaves are picked to produce a thick nutty flavour that makes a mellow tea with a lingering, sweet aftertaste.</p>
          <p>
            <i class="fa fa-minus"></i><i style="position:relative;left:-2px;" class="fa fa-minus"></i>
          </p>
          <p>
            Temp: 80<sup>&deg;</sup>C<br/>
            Steep: 2-3 mins
          </br/>
          </p>
        </div>
      </div>
      <div class="col-sm-2 hidden-xs"></div>
    </div>
    <div class="row spacer">
      <div class="col-sm-12 text-center">
        <p class="width-thin">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, dignissim sed metus pulvinar fringilla.
        </p>
        <a href="/subscribe/" class="btn btn-tc-default btn-xl text-uppercase spacer">Get started</a>
      </div>
    </div>
    <div class="row spacer"></div>
  </div>
</div>
<?php get_footer();?>

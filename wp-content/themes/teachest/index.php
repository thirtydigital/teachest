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
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <h1 class="display-3">Discover a world of teas from our hand picked TeaChests.</h1>
      <p>Select a top level tea type and we will send you a hand curated TeaChest every delivery. </p>
    </div>
    <div class="col-lg-1"></div>
  </div>
</div>
<div class="container marketing">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="text-uppercase">How it works</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
        Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
      </p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-md-4 marketing-panel">
      <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" /> -->
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf.png" class="img-responsive" style="margin-bottom:50px" />
      <h2>Select a type of tea</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    </div>
    <div class="col-md-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf2.png" class="img-responsive" />
      <h2>Select quantity</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
   </div>
    <div class="col-md-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-delivery.png" class="img-responsive" />
      <h2>Select frequency</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-lg-12 text-center">
      <h2>And our TeaChest experts<br/>will do the rest</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
        Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
      </p>
      <a href="#" class="btn btn-tc-default-inverse btn-xl text-uppercase spacer">Get started</a>
    </div>
  </div>
</div>

<div class="container-fluid socialvalidation">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
        <p>
          Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
        </p>
        <p>
          <strong>@andygirvan</strong>
        </p>
      </div>
      <div class="col-lg-4 col-sm-12">
        <p>
          Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
        </p>
        <p>
          <strong>@andygirvan</strong>
        </p>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
<div class="container-fluid tearange">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="text-uppercase">Our Tea Range</h2>
        <p>
          We explore the world for the finest teas from the most interesting locations; hand picking the best selection of teas for you to enjoy in<br /> the comfort of your own home.
        </p>
      </div>
    </div>
    <div class="row spacer">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 no-padding teabox">
        <div class="col-lg-4 no-padding">
          <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/tea-example.png" class="img-responsive" />
        </div>
        <div class="col-lg-8 teabox-info">
          <h3>Zhejiang Cloud</h3>
          <h4 class="text-uppercase">China</h4>
          <br />
          <p>Zhejiang Cloud Green tea is a delicacy from the Zhejiang province in China. A single bud and two leaves are picked to produce a thick nutty flavour that makes a mellow tea with a lingering, sweet aftertaste.</p>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="row spacer">
      <div class="col-lg-12 text-center">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, dignissim sed metus pulvinar fringilla.
        </p>
        <a href="#" class="btn btn-tc-default btn-xl text-uppercase spacer">Get started</a>
      </div>
    </div>
    <div class="row spacer"></div>
  </div>
</div>
<?php get_footer();?>

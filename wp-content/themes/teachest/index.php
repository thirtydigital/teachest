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
  <div class="container">
    <h1 class="display-3">Discover a world of teas from our hand picked TeaChests.</h1>
    <p>Select a top level tea type and we will send you a hand curated TeaChest every delivery.</p>
  </div>
</div>
<div class="container marketing">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2>How it works</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus. <br/>
        Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
      </p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-md-4">
      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    </div>
    <div class="col-md-4">
      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
   </div>
    <div class="col-md-4">
      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-lg-12 text-center">
      <h2>And our experts will do the rest</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
        Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus. <br/>
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
        <h2>Our Tea Range</h2>
        <p>
          Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
        </p>
      </div>
    </div>
    <div class="row spacer">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 teabox">
        <h3>Tea Name</h3>
        <h4>Origin</h4>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="row spacer">
      <div class="col-lg-12 text-center">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
          Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus. <br/>
          Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
        </p>
        <a href="#" class="btn btn-tc-default btn-xl text-uppercase spacer">Get started</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>

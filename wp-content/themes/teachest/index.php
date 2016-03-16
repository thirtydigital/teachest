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
      <h1 class="display-3">Discover a world of teas from our hand-picked TeaChests.</h1>
      <p class="width-thin">Select a top-level tea type and we will send you an individual, expert-picked TeaChest every delivery. </p>
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
        You select a type of tea, how many teabags you want and how often you want them delivered and we’ll send you a selection of the finest teas from all over the world.
      </p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf.png" class="img-responsive" style="margin-bottom:50px" />
      <h2><span class="step-number">1</span> Select type of tea</h2>
      <p>Choose from our range of green, black, herbal, black blended teas or our Expert TeaChest.</p>
    </div>
    <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf2.png" class="img-responsive" />
      <h2><span class="step-number">2</span> Select quantity</h2>
      <p>Choose from either 10 or 15  of the finest-quality teabags with each delivery.</p>
   </div>
   <div class="col-xs-12 col-sm-4 marketing-panel">
      <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-delivery.png" class="img-responsive" />
      <h2><span class="step-number">3</span> Select frequency</h2>
      <p>Have a TeaChest delivered every week, fortnightly or four weeks as per your preference.</p>
    </div>
  </div>
  <div class="row spacer">
    <div class="col-sm-12 text-center">
      <h2 class="width-thin">Our TeaChest experts will do the rest</h2>
      <p class="width-thin spacer-sm">
        We'll put together the best TeaChest possible for you from our vast range and create your own personal journey through the world of teas.
      </p>
      <a href="/subscribe/" class="btn btn-tc-default-inverse btn-xl text-uppercase spacer">GET STARTED</a>
    </div>
  </div>
</div>

<div class="container-fluid socialvalidation">
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4 spacer">
        <i class="fa fa-twitter fa-3x"></i>
        <p>
          Lorem ipsum dolor sit amet. Morbi bibendum dignissim imperdiet. Nam vitae consequat dolor, eu facilisis.
        </p>
        <div class="media">
          <div class="media-left">
            <img class="media-object" alt="45x45" src="//placehold.it/45x45">
          </div>
          <div class="media-body">
            <h4 class="media-heading">@username</h4>
            <p>1 week ago</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 spacer">
        <p>
          Lorem ipsum dolor sit amet. Morbi bibendum dignissim imperdiet. Nam vitae consequat dolor, eu facilisis.
        </p>
        <div class="media">
          <div class="media-left">
            <img class="media-object" alt="45x45" src="//placehold.it/45x45">
          </div>
          <div class="media-body">
            <h4 class="media-heading">@username</h4>
            <p>1 week ago</p>
          </div>
        </div>
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
          We’ve explored the world to find the finest teas from the most interesting locations, hand-picking the very best of them for you to enjoy from the comfort of your own home.
        </p>
      </div>
    </div>
    <div class="row spacer">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-8 teabox" data-ride="carousel">

        <div class="no-padding carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="col-sm-5 no-padding">
                <img src="//placehold.it/325x325" class="img-responsive" />
              </div>
              <div class="col-sm-7 teabox-info">
                <h3>First Tea</h3>
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
            <div class="item">
              <div class="col-sm-5 no-padding">
                <img src="//placehold.it/325x325" class="img-responsive" />
              </div>
              <div class="col-sm-7 teabox-info">
                <h3>Second Tea</h3>
                <h4 class="text-uppercase">America</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, dignissim sed metus pulvinar fringilla.</p>
                <p>
                  <i class="fa fa-minus"></i><i style="position:relative;left:-2px;" class="fa fa-minus"></i>
                </p>
                <p>
                  Temp: 20<sup>&deg;</sup>C<br/>
                  Steep: 10-30 mins
                </br/>
                </p>
              </div>
            </div>
            <div class="item">
              <div class="col-sm-5 no-padding">
                <img src="//placehold.it/325x325" class="img-responsive" />
              </div>
              <div class="col-sm-7 teabox-info">
                <h3>Third Tea</h3>
                <h4 class="text-uppercase">India</h4>
                <p>Lorem ipsum dolor sit amet. Morbi bibendum dignissim imperdiet. Nam vitae consequat dolor, eu facilisis.</p>
                <p>
                  <i class="fa fa-minus"></i><i style="position:relative;left:-2px;" class="fa fa-minus"></i>
                </p>
                <p>
                  Temp: 70<sup>&deg;</sup>C<br/>
                  Steep: 1-4 mins
                </br/>
                </p>
              </div>
            </div>
          </div>
          <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
      <div class="col-sm-2 hidden-xs"></div>
    </div>
    <div class="row spacer">
      <div class="col-sm-12 text-center">
        <p class="width-thin">
          Begin your journey into the world of teas with TeaChest, where you’ll always get the best-quality teas delivered straight to your door.
        </p>
        <a href="/subscribe/" class="btn btn-tc-default btn-xl text-uppercase spacer">Get started</a>
      </div>
    </div>
    <div class="row spacer"></div>
  </div>
</div>
<?php get_footer();?>

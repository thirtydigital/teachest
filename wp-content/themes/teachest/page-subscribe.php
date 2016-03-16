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
      <h1 class="display-3 text-uppercase"><?php the_title(); ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, dignissim sed metus pulvinar, fringilla fermentum odio. Nulla sed arcu lectus.</p>
      <!-- <a href="#how-it-works" class="btn-scrolldown"><i class="fa fa-chevron-down"></i></a> -->
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid subscribe-step">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase" id="step-one">Choose A Tea Type</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
          Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid subscribe-step alt">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase" id="step-two">Choose Quantity and Frequency</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
          Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
        </p>
      </div>
      <div class="hidden-xs col-sm-1"></div>
      <div class="col-sm-2 spacer">
        <img src="//placehold.it/165x165" class="img-responsive" />
        <div class="spacer-sm">Black</div>
        <button class="btn btn-tc-default btn-sm btn-block btn-selected spacer-sm">Selected</button>
      </div>
      <div class="col-sm-2 spacer">
        <img src="//placehold.it/165x165" class="img-responsive" />
        <div class="spacer-sm">Green</div>
        <button class="btn btn-tc-default btn-sm btn-block spacer-sm">Select</button>
      </div>
      <div class="col-sm-2 spacer">
        <img src="//placehold.it/165x165" class="img-responsive" />
        <div class="spacer-sm">Herbal</div>
        <button class="btn btn-tc-default btn-sm btn-block spacer-sm">Select</button>
      </div>
      <div class="col-sm-2 spacer">
        <img src="//placehold.it/165x165" class="img-responsive" />
        <div class="spacer-sm">Black Blended</div>
        <button class="btn btn-tc-default btn-sm btn-block spacer-sm">Select</button>
      </div>
      <div class="col-sm-2 spacer">
        <img src="//placehold.it/165x165" class="img-responsive" />
        <div class="spacer-sm">Variety Chest</div>
        <button class="btn btn-tc-default btn-sm btn-block spacer-sm">Select</button>
      </div>
      <div class="hidden-xs col-sm-1"></div>
    </div>
  </div>
</div>
<div class="container-fluid subscribe-step">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase" id="step-three">Sign Up</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aliquam tortor leo, convallis nec est sit amet, ultrices vehicula risus.
          Aliquam vestibulum aliquam ex, ac blandit ipsum mattis a.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">
        <form class="form-horizontal spacer">
          <!-- <div class="row"> -->
            <div class="form-group">
              <label class="col-sm-4 control-label text-uppercase">First Name<sup>*</sup></label>
              <div class="col-sm-8">
                <input type="text" class="form-control input-lg" id="" placeholder="">
              </div>
            </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
            <div class="form-group">
              <label class="col-sm-4 control-label text-uppercase">Last Name<sup>*</sup></label>
              <div class="col-sm-8">
                <input type="text" class="form-control input-lg" id="" placeholder="">
              </div>
            </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
            <div class="form-group">
              <label class="col-sm-4 control-label text-uppercase">Email Address<sup>*</sup></label>
              <div class="col-sm-8">
                <input type="email" class="form-control input-lg" id="" placeholder="">
              </div>
            </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
            <div class="form-group has-error">
              <label class="col-sm-4 control-label text-uppercase">Choose Password<sup>*</sup></label>
              <div class="col-sm-8">
                <input type="password" class="form-control input-lg" id="" placeholder="">
              </div>
            </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
            <div class="form-group">
              <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-tc-default btn-xl text-uppercase spacer">Submit</button>
              </div>
            </div>
          <!-- </div> -->
        </form>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
  </div>
</div>
<?php get_footer();?>

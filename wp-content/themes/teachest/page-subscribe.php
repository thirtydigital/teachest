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
      <p>You choose the frequency, amount and type of teas you receive in your TeaChest and our experts will do the rest to make sure you get the best of our products every time. </p>
      <p>
        Enter your personal details and payment information to complete your account and manage your TeaChest subscription along with your order details. You can also see a delivery estimate.
      </p>
      <p>
        Complete your account and get started with your TeaChest journey. Whether you’re discovering delicious and exotic new teas or revisiting old favourites, a regular TeaChest delivery will make sure that you never run out.
      </p>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid subscribe-step subscribe-step-type">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase" id="step-one"><span class="step-number">1</span> Choose Tea Type</h2>
        <p class="width-thin">
          Have a favourite type of tea? Choose from our list below or go for the Expert Chest option for a mix of each. You can change this option at any time.
        </p>
        <?php
        $options = array(
        	'debug'           => false,
        	'return_as_array' => true,
        	'validate_url'    => false,
        	'timeout'         => 0,
        	'ssl_verify'      => false,
        );
        try {
          $client = new WC_API_Client( 'http://teachest.dev/', 'ck_c426ba676e32f9cd4a66f7b99a3c41bc6a6cd4f7', 'cs_d2d9719050ab8443a7a51d0dbe0ba9420d5aca72', $options );
          $products = $client->products->get();
        }
        catch ( WC_API_Client_Exception $e ) {
        	echo $e->getMessage() . PHP_EOL;
        	echo $e->getCode() . PHP_EOL;
        }
        ?>
      </div>
      <div class="hidden-xs col-sm-1"></div>
      <?php if ( $products ) { ?>
        <?php foreach($products as $product) { $product = $product[0]; //var_dump($product); ?>
        <div class="col-xs-12 col-sm-2 spacer">
          <div class="col-xs-6 col-sm-12" style="padding:0">
            <img src="<?php echo $product['featured_src']; ?>" class="img-responsive" />
          </div>
          <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
            <div class="spacer-sm"><p><?php echo $product['title']; ?></p></div>
            <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
          </div>
        </div>
        <?php } ?>
      <?php } ?>

      <div class="col-xs-12 col-sm-2 spacer">
        <div class="col-xs-6 col-sm-12" style="padding:0">
          <img src="//placehold.it/165x165" class="img-responsive" />
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
          <div class="spacer-sm"><p>Green</p></div>
          <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-2 spacer">
        <div class="col-xs-6 col-sm-12" style="padding:0">
          <img src="//placehold.it/165x165" class="img-responsive" />
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
          <div class="spacer-sm"><p>Herbal</p></div>
          <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-2 spacer">
        <div class="col-xs-6 col-sm-12" style="padding:0">
          <img src="//placehold.it/165x165" class="img-responsive" />
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
          <div class="spacer-sm"><p>Black Blended</p></div>
          <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-2 spacer">
        <div class="col-xs-6 col-sm-12" style="padding:0">
          <img src="//placehold.it/165x165" class="img-responsive" />
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
          <div class="spacer-sm"><p>Variety Chest</p></div>
          <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
        </div>
      </div>
      <div class="hidden-xs col-sm-1"></div>
    </div>
  </div>
</div>
<div class="container-fluid subscribe-step alt subscribe-step-quantity">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase width-thin" id="step-two"><span class="step-number">2</span> Choose Quantity and Frequency</h2>
        <p class="width-thin spacer">
          Choose to receive either 10 or 15 teabags in your TeaChest and how often you wish to receive them. You may change these settings at any time from your account.
        </p>
      </div>
      <div class="hidden-xs col-sm-3"></div>
      <div class="col-xs-6 col-sm-2 spacer">
        <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-leaf2-inverse.png" class="img-responsive" />
      </div>
      <div class="col-xs-6 col-sm-offset-0 col-sm-2 spacer selected">
        <span class="price">&pound;5.00</span>
        <div class="spacer-sm"><p>for 10 tea bags</p></div>
        <button class="btn btn-tc-default btn-block spacer-sm selected">Selected</button>
      </div>
      <div class="col-xs-6 col-sm-offset-0 col-sm-2 spacer">
        <span class="price">&pound;7.25</span>
        <div class="spacer-sm"><p>for 15 tea bags</p></div>
        <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
      </div>
      <div class="hidden-xs col-sm-3"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-sm-8">
        <hr class="dark" />
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-3"></div>
      <div class="col-xs-6 col-sm-2 spacer">
        <img src="/wp-content/themes/<?php echo get_template(); ?>/src/img/icon-delivery-inverse.png" class="img-responsive" />
      </div>
      <div class="col-xs-6 col-sm-2">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
            Weekly
          </label>
        </div>
      </div>
      <div class="col-xs-6 col-sm-2">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1">
            Fortnightly
          </label>
        </div>
      </div>
      <div class="col-xs-6 col-sm-2">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option1">
            Four weekly
          </label>
        </div>
      </div>
      <div class="hidden-xs col-sm-3"></div>
    </div>
  </div>
</div>
<div class="container-fluid subscribe-step subscribe-step-signup">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase" id="step-three"><span class="step-number">3</span> Sign Up</h2>
        <p class="width-thin">
          Create an account from where you can manage your TeaChest subscription and payment methods.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">
        <form class="form-horizontal spacer" action="/payment/">
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
            <div class="form-group">
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

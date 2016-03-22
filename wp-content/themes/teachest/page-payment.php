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
      <p>Enter your personal details and payment information to complete your account and manage your TeaChest subscription along with your order details. You can also see a delivery estimate.  </p>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<div class="container-fluid payment-step">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase">Billing Details</h2>
        <p>
          Complete your account and get started with your TeaChest journey. 
        </p>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">
        <form class="form-horizontal spacer">
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">First Name<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Last Name<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Address<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder=""><br/>
              <input type="text" class="form-control input-lg" id="" placeholder=""><br/>
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Town/City<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">County<sup>*</sup></label>
            <div class="col-sm-8 select-wrapper">
              <select class="form-control input-lg">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group form-inline">
            <label class="col-sm-4 control-label text-uppercase">Postcode<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Email<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="email" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
        </form>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-sm-8">
        <hr class="dark" />
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
    <div class="row payment-different-address">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase">Ship to a different address?</h2>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6 text-center">
        <div class="checkbox">
          <label class="larger">
            <input type="checkbox"> Ship to a different address
          </label>
        </div>
      </div>
      <div class="col-md-6 hidden payment-different-address-panel">
        <form class="form-horizontal spacer">
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">First Name<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Last Name<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Address<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder=""><br/>
              <input type="text" class="form-control input-lg" id="" placeholder=""><br/>
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">Town/City<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase">County<sup>*</sup></label>
            <div class="col-sm-8 select-wrapper">
              <select class="form-control input-lg">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group form-inline">
            <label class="col-sm-4 control-label text-uppercase">Postcode<sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="form-control input-lg" id="" placeholder="">
            </div>
          </div>
        </form>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-sm-8">
        <hr class="dark" />
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
    <div class="row payment-your-order">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase">Your order</h2>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6 text-center">
        <h3 class="spacer">Black Tea Subscription</h3>
        <p class="spacer">
          10 Teas Weekly<br />
          &pound;5.00 / week<br />
          You will receive your first Tea Chest on 11/02/2016
        </p>
        <div class="form-group spacer text-left">
          <label class="col-sm-4 control-label text-uppercase">Order notes</label>
          <div class="col-sm-8">
            <textarea class="form-control input-lg" id="" placeholder=""></textarea><br />
          </div>
        </div>
        <div class="form-group text-left">
          <label class="col-sm-4 control-label text-uppercase">Promotion code</label>
          <div class="col-sm-8">
            <input type="email" class="form-control input-lg" id="" placeholder="">
          </div>
        </div>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-sm-8">
        <hr class="dark" />
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-uppercase">Payment Details</h2>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">

      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
    <div class="row">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-sm-8">
        <hr class="dark" />
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
    <div class="row payment-submit">
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">
        <div class="col-md-12">
          <div class="checkbox">
            <label>
              <input type="checkbox"> I’ve read and accept the <a href="/terms-and-conditions/" target="_blank">terms &amp; conditions</a>
            </label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to be contacted by TeaChest
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-tc-default btn-xl text-uppercase spacer">Submit</button>
          </div>
        </div>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
  </div>
</div>
<?php get_footer();?>

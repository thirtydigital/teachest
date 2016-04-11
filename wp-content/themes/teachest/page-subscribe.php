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
      </div>
      <div class="hidden-xs col-sm-1"></div>
      <?php
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => 5
      );
      $loop = new WP_Query( $args ); $loop_count = 0;
      ?>
      <?php if ( $loop->have_posts() ) { ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-xs-12 col-sm-2 spacer col-product <?php if ($loop_count===0) { ?>selected<?php } ?>">
          <div class="col-xs-6 col-sm-12" style="padding:0">
            <?php the_post_thumbnail( array(165,165), array( 'class' => 'img-responsive' ) ); ?>
          </div>
          <div class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-sm-12" style="padding:0">
            <div class="spacer-sm"><p><?php the_title(); ?></p></div>
             <?php if ($loop_count===0) { ?>
            <button class="btn btn-tc-default btn-block spacer-sm selected">Selected</button>
            <?php } else { ?>
              <button class="btn btn-tc-default btn-block spacer-sm select">Select</button>
            <?php } ?>
          </div>
        </div>
      <?php $loop_count++; endwhile;  ?>
      <?php } wp_reset_postdata(); ?>
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
      <div class="col-xs-6 col-sm-offset-0 col-sm-2 spacer">
        <span class="price">&pound;3.95</span>
        <div class="spacer-sm"><p>for 10 tea bags</p></div>
        <button class="btn btn-tc-default btn-block spacer-sm">Select</button>
      </div>
      <div class="col-xs-6 col-sm-offset-0 col-sm-2 spacer">
        <span class="price">&pound;5.00</span>
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
            Four Weekly
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
        <?php if (is_user_logged_in()) { ?>
        <?php global $current_user; get_currentuserinfo();?>
        <h2 class="text-uppercase" id="step-three"><span class="step-number">3</span> Checkout</h2>
        <p>
          You're logged in as: <?php echo $current_user->display_name; ?>. <br /><small>Not you? <a href="<?php echo wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) ); ?>">Sign out</a></small>
        </p>
        <?php } else { ?>
          <h2 class="text-uppercase" id="step-three"><span class="step-number">3</span> Sign In / Register</h2>
          <p class="width-thin">
            Create an account from where you can manage your TeaChest subscription and payment methods.
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="col-md-6">
        <div class="woocommerce"><br /><?php wc_print_notices(); ?></div>
        <?php if (is_user_logged_in()) { ?>
          <div class="col-sm-12 text-center">
            <input type="submit" class="btn btn-tc-default btn-xl text-uppercase spacer" name="register" value="<?php esc_attr_e( 'Subscribe', 'woocommerce' ); ?>" />
          </div>
        <?php } else { ?>
        <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
    		<h3 class="text-uppercase spacer"><strong><?php _e( 'Sign In', 'woocommerce' ); ?></strong></h3><br />
        <form method="post" class="login form-horizontal">
          <?php do_action( 'woocommerce_login_form_start' ); ?>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase"><?php _e( 'Email address', 'woocommerce' ); ?><sup>*</sup></label>
            <div class="col-sm-8">
              <input type="text" class="input-text form-control input-lg" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-uppercase"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
            <div class="col-sm-8">
              <input class="input-text form-control input-lg" type="password" name="password" id="password" />
              <p class="lost_password">
        				<small><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a></small>
        			</p>
            </div>
          </div>
          <?php do_action( 'woocommerce_login_form' ); ?>
          <div class="form-group">
            <div class="col-sm-12 text-center">
              <?php wp_nonce_field( 'woocommerce-login' ); ?>
              <?php wp_referer_field(); ?>
              <input type="submit" class="btn btn-tc-default btn-xl text-uppercase" name="login" value="<?php esc_attr_e( 'Sign In', 'woocommerce' ); ?>" />
            </div>
          </div>
          <?php do_action( 'woocommerce_login_form_end' ); ?>
        </form>

        <hr class="dark" />

        <h3 class="text-uppercase spacer"><strong><?php _e( 'Register', 'woocommerce' ); ?></strong></h3><br />
    		<form method="post" class="register form-horizontal">
    			<?php do_action( 'woocommerce_register_form_start' ); ?>
          <div class="form-group">
            <label for="reg_email" class="col-sm-4 control-label text-uppercase"><?php _e( 'Email address', 'woocommerce' ); ?> <span>*</span></label>
            <div class="col-sm-8">
              <input type="email" class="input-text form-control input-lg" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="reg_password" class="col-sm-4 control-label text-uppercase"><?php _e( 'Password', 'woocommerce' ); ?> <span class="">*</span></label>
            <div class="col-sm-8">
              <input type="password" class="input-text form-control input-lg" name="password" id="reg_password" />
            </div>
          </div>
    			<!-- Spam Trap -->
    			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>
    			<?php do_action( 'woocommerce_register_form' ); ?>
    			<?php do_action( 'register_form' ); ?>
          <div class="form-group">
            <div class="col-sm-12 text-center">
              <?php wp_nonce_field( 'woocommerce-register' ); ?>
              <?php wp_referer_field(); ?>
              <input type="submit" class="btn btn-tc-default btn-xl text-uppercase spacer" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
            </div>
          </div>
    			<?php do_action( 'woocommerce_register_form_end' ); ?>
    		</form>
        <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
        <?php } ?>
      </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
  </div>
</div>
<?php get_footer();?>

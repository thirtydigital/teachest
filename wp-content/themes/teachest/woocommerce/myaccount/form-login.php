<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
  <div class="col-sm-12 col-md-6">

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
    <div class="form-group">
      <div class="col-sm-12 text-center">
        <?php wp_nonce_field( 'woocommerce-login' ); ?>
        <?php wp_referer_field(); ?>
        <input type="submit" class="btn btn-tc-default btn-xl text-uppercase" name="login" value="<?php esc_attr_e( 'Sign In', 'woocommerce' ); ?>" />
      </div>
    </div>
    <?php do_action( 'woocommerce_login_form_end' ); ?>
  </form>
  <?php do_action( 'woocommerce_after_customer_login_form' ); ?>

</div>


  <div class="col-sm-12 col-md-6">

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

</div>

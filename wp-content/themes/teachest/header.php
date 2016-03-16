<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Tea Chest
 * @since Tea Chest 2.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<link media="all" rel="stylesheet" href="/wp-content/themes/<?php echo get_template(); ?>/style.css">
    <script src="/wp-content/themes/<?php echo get_template(); ?>/dist/js/all.min.js"></script>
		<?php wp_head(); ?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
    <header>
      <nav class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <div class="pull-left">
              <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
            </div>
            <div class="pull-right">
              <a class="navbar-menu" href="#"><i class="fa fa-bars fa-2x"></i></a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </nav>
      <nav class="fullscreen-nav">
        <ul class="list-unstyled">
          <li>
            <a href="#">My account</a>
          </li>
          <li>
            <a href="#">How it works</a>
          </li>
          <li>
            <a href="#">Our range</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>

        <div class="fullscreen-nav-footer">
          <ul class="list-inline">
            <li>
              <a href="/terms-and-conditions/">Terms &amp; Conditions</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            <li>
              <a href="#">Cookie Policy</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

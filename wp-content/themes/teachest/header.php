<?php /**
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
<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-61226337-1', 'auto'); ga('send', 'pageview'); </script>
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
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'menu_class' => 'list-unstyled') ); ?>
        <div class="fullscreen-nav-footer">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu-footer', 'container' => false, 'menu_class' => 'list-inline') ); ?>
        </div>
      </nav>
    </header>

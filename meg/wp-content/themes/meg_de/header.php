<?php
/**
 * Default Page Header
 *
 * @author Caspar Heinemann
 * @package WordPress
 * @subpackage MEG Bootstrap Wordpress Theme
 */
?>
<!-- Microdata markup added by Google Structured Data Markup Helper! -->
<!-- HTML5! -->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title(); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap/css/bootstrap.min.css">
<!--[if gt IE 7]>
	<link rel="stylesheet" type="text/css" href="http://staging.mobileeventguide.de/wp-content/themes/meg_de/bootstrap/css/ie8-and-up.css" />
<![endif]-->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri();?>/bootstrap/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/bootstrap/js/respond.js"></script>
      <![endif]-->
    <!--[if lt IE 7]>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap/css/bootstrap-ie7.css">
    <![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri();?>/style-mobile.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri();?>/style-responsive.css" />

   <!-- jQuery is just for the demo! Hammer.js works without jQuery :-) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://staging.mobileeventguide.de/wp-content/themes/meg_de/bootstrap/js/modernizr.js"></script>
    <script src="http://staging.mobileeventguide.de/wp-content/themes/meg_de/bootstrap/js/hammer.js"></script>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
    -->
<!-- The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers. -->

<?php
	$options = get_option('bicbswp_theme_options');

        if($options['analytics'] != '' ){

            echo ($options['analytics']);

        }
     ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <nav class="navbar navbar-default"  role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- jbar -->
    <div class="jbar" data-init="jbar" data-jbar='{
			"message" : "jBar, re-imagined. Get version 2.0.0 now!",
			"button"  : "Download",
			"url"     : "http://toddmotto.com/labs/jbar/jbar_v2.zip",
			"state"   : "closed"
		}'></div>
    <!-- /jbar -->

    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="<?php echo get_site_url(); ?>" id="logoTop"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling /// collapse navbar-collapse navbar-ex1-collapse -->
      <div class="navbar-collapse navbar-ex1-collapse in">
        <?php

                if ( has_nav_menu( 'main-menu' ) ) {


                    wp_nav_menu( array(
                        'menu'       => '',
                        'theme_location' => 'main-menu',
                        'depth'      => 2,
                        'container'  => false,
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_page_menu',
                        'walker' => new wp_bootstrap_navwalker())
                    );

                }
                ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
</header>
<!-- End Header. Begin Template Content -->

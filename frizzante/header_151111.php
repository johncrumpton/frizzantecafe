<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:800,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/skeleton.css">
  	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"> -->
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?ver=' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />	
	<?php wp_head(); ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script>
	<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.scrollme.js'></script>


</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

<!-- New 'skeleton' css code -->

    

<div class="section toparea">

    <div class="container">

    	<div id="social-top">

  			<a href="https://twitter.com/Frizzanteltd"><img alt="Social-twitter" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-twitter-grey.svg" width="48"></a>
			<a href="https://www.facebook.com/FrizzanteLDN"><img alt="Social-facebook" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-facebook-grey.svg" width="48"></a>
			<a href="http://instagram.com/frizzantelondon"><img alt="Social-instagram" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-instagram-grey.svg" width="48"></a>
			<a href="https://plus.google.com/114869257670918983538/about"><img alt="Social-google-plus" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-google-plus-grey.svg" width="48"></a>

  		</div><!-- #social-top -->

    	<section class="header">
    		<div id="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Frizzante-logo.svg" /></div>    		
    		<!-- <h1><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>-->		
    	</section>


		<header id="masthead" class="site-header" role="banner">

			<div id="navbar" class="navbar">
				
				<div id="topbarlogo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Frizzante-logo.svg" />
				</div>

				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>					
				</nav><!-- #site-navigation -->

				<div id="nav-social">
					<a href="https://twitter.com/Frizzanteltd"><img alt="Social-twitter" class="h-iblock social social-grey svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-twitter-grey.svg" width="30"></a>
					<a href="https://www.facebook.com/FrizzanteLDN"><img alt="Social-facebook" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-facebook-grey.svg" width="30"></a>
					<a href="http://instagram.com/frizzantelondon"><img alt="Social-instagram" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-instagram-grey.svg" width="30"></a>
					<a href="https://plus.google.com/114869257670918983538/about"><img alt="Social-google-plus" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-google-plus-grey.svg" width="30"></a>
				</div>
			</div><!-- #navbar -->
		
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-GB">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-GB">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en-GB">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

<!-- New 'skeleton' css code -->

    

<div class="section toparea">

    <div class="container">

    	<div id="social-top">

  			<a href="https://twitter.com/frizzantecafe"><img alt="Social-twitter" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-twitter-grey.svg" width="48"></a>
			<a href="https://www.facebook.com/FrizzanteLDN"><img alt="Social-facebook" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-facebook-grey.svg" width="48"></a>
			<a href="http://instagram.com/frizzantecafe"><img alt="Social-instagram" class="h-iblock social svg" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-instagram-grey.svg" width="48"></a>

  		</div><!-- #social-top -->

    	<section class="header">
    		<div id="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Frizzante-new-logo-forks.svg" /></div>    		
    		<!-- <h1><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>-->		
    	</section>


		<header id="masthead" class="site-header" role="banner">

			<div id="navbar" class="navbar">
				
				<div id="topbarlogo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Frizzante-new-logo.svg" />
				</div>

				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>					
				</nav><!-- #site-navigation -->

				<div id="nav-social">
					<a href="https://twitter.com/frizzantecafe"><img alt="Social-twitter" class="h-iblock social social-grey svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-twitter-grey.svg" width="30"></a>
					<a href="https://www.facebook.com/FrizzanteLDN"><img alt="Social-facebook" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-facebook-grey.svg" width="30"></a>
					<a href="http://instagram.com/frizzantecafe"><img alt="Social-instagram" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-instagram-grey.svg" width="30"></a>
					<a href="https://plus.google.com/114869257670918983538/about"><img alt="Social-google-plus" class="h-iblock social svg" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-google-plus-grey.svg" width="30"></a>
				</div>
			</div><!-- #navbar -->
		
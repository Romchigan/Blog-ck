<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body class="background-site" <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding d-flex justify-content-between align-items-end">
					<h1 class="site-title text-uppercase">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<span class="site-title-heading"><?php echo get_theme_mod('header_heading'); ?></span>
								<span class="site-title-name"><?php bloginfo( 'name' ); ?></span>
						</a>
					</h1>
					<div class="site-header-search-wrap">
						<form action="home.php" method="post" class="site-search-form">
							<label for="search">
								<input id="search" type="search" class="site-header-search" placeholder="Search">
							</label>
							<input type="submit" class="site-header-search-submit">
						</form>
					</div>
				</div>
			</div>
			<nav class="site-navigation">
          <?php // substitute the class "container-fluid" below if you want a wider content area ?>
				<div class="container">
					<div class="row">
						<div class="site-navigation-inner col-sm-12">
							<div class="navbar navbar-default d-flex align-items-center">
								<div class="navbar-header">
									<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
										<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- The WordPress Menu goes here -->
                  <?php wp_nav_menu(
                      array(
                          'theme_location' 	=> 'primary',
                          'depth'             => 2,
                          'container'         => 'nav',
                          'container_id'      => 'navbar-collapse',
                          'container_class'   => 'collapse navbar-collapse',
                          'menu_class' 		=> 'nav navbar-nav',
                          'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                          'menu_id'			=> 'main-menu',
                          'walker' 			=> new wp_bootstrap_navwalker()
                      )
                  ); ?>

							</div><!-- .navbar -->
						</div>
					</div>
				</div><!-- .container -->
			</nav><!-- .site-navigation -->
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->


<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8">


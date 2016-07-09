<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Andrew Profile Theme 2013
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
    <div>
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="blogname-container">
         <h1 id="blogname"><?php bloginfo( 'name' ); ?></h1>
       </a>
    </div>
    <nav id="site-navigation" class="nav navigation-main" role="navigation">
       <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'andrewringler_profile_2013' ); ?>"><?php _e( 'Skip to content', 'andrewringler_profile_2013' ); ?></a></div>

       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
	</header>

	<div id="main" class="site-main">

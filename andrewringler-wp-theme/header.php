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
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Open+Sans:800,300,600:latin']
    },
	timeout: 2000 // Set the timeout to two seconds
  });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="navigation-main visually-hidden" role="navigation">
       <h1 class="menu-toggle"><?php _e( 'Menu', 'andrewringler_profile_2013' ); ?></h1>
       <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'andrewringler_profile_2013' ); ?>"><?php _e( 'Skip to content', 'andrewringler_profile_2013' ); ?></a></div>

       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
     </nav><!-- #site-navigation -->
	 
     <div id="profile-header">
		 <?php if( is_home() ) { ?>
	         <img src="<?php bloginfo('template_directory'); ?>/images/andrew_ringler_carson_beach.jpg" id="profile-header-image">
			 <div class="description">
				 <h1><?php bloginfo( 'name' ); ?></h1>
		<?php } else { ?> 
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		          <h1><?php bloginfo( 'name' ); ?></h1>
		        </a>
		<?php } ?> 
		 
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
     </div>
	 
	 
	</header>
	<!-- #masthead -->







	<div id="main" class="site-main">

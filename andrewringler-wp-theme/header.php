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
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type="text/javascript">
  WebFontConfig = {
    google: {
      families: ['Open+Sans:800,300,600:latin']
    }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
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
	</header>
	<!-- #masthead -->

	<div id="main" class="site-main">

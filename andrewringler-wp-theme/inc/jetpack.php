<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Andrew Profile Theme 2013
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function andrewringler_profile_2013_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'andrewringler_profile_2013_jetpack_setup' );

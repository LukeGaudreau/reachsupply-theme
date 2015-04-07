<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package reachsupply
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function reachsupply_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'reachsupply_jetpack_setup' );


/**
 * Prevent Jetpack from enabling modules by default.
 */
add_filter( 'jetpack_get_default_modules', '__return_empty_array', 99 );
<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package thema_gychwynnol
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function thema_gychwynnol_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'thema_gychwynnol_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function thema_gychwynnol_jetpack_setup
add_action( 'after_setup_theme', 'thema_gychwynnol_jetpack_setup' );

function thema_gychwynnol_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function thema_gychwynnol_infinite_scroll_render
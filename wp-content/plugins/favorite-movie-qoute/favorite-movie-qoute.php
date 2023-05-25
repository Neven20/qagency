<?php
/**
 * Plugin Name:       Favorite movie quote
 * Description:       Display favorite movie qoute
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Neven
 * License:           GPL-2.0-or-later
 * License URI:       https://gnu.org/licenses/gpl-2.0.html
 * Text Domain:       favorite-movie-qoute
 *
 * @package           favorite-movie-qoute
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

function favorite_movie_qoute_favorite_movie_qoute_block_init() {
	register_block_type( __DIR__ . '/build', array(
		'render_callback' => 'favorite_movie_qoute_plugin_render_content'
	) );
}
add_action( 'init', 'favorite_movie_qoute_favorite_movie_qoute_block_init' );


function favorite_movie_qoute_plugin_render_content($attributes, $content) {
	 $block_text = $attributes['blockText'];
	 return "<h4 class='movie-quote'>Favorite Movie Quote</h4>'$block_text'";
}

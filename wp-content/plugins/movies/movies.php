<?php

/*
    Plugin Name: Movies
    Description: 
    Version: 1.0
    Author: Neven
    Author URI:
*/

function fictional_post_types(){
    register_post_type('movie', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Movies',
            'add_new_item' => 'Add New Movie',
            'edit_item' => 'Edit Movie',
            'all_items' => 'All Movies',
            'singular_name' => 'Movie'
        ),
        'menu_icon' => 'dashicons-format-video'
    ));    
}

add_action('init', 'fictional_post_types');



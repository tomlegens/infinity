<?php

/*****************
OPTIONS PAGE
 ****************/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'General Settings',
        'menu_title'	=> 'General Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

// ACF field added to body class
// Adapted from http://krogsgard.com/2012/wordpress-body-class-post-meta/
function custom_field_body_class( $classes ) {
    global $wp_query;
    $postid = $wp_query->post->ID;

    $classes[] = get_field('page_class', $postid);

    // return the $classes array
    return $classes;
}

add_filter('body_class','custom_field_body_class');
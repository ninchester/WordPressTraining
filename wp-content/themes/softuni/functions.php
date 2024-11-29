<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'softuni_enqueue_assets');

function softuni_enqueue_assets()
{
    // wp_enqueue_style('softuni-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('softuni-main-style', get_stylesheet_uri() . '/assets/css/', array(), '1.1');
}

/**
 * This is the main function for registering navigation menus
 *
 * @return void
 */
function softuni_register_nav_menus()
{
    register_nav_menu('primary', 'Primary menu');
}
add_action('after_setup_theme', 'softuni_register_nav_menus', 0);

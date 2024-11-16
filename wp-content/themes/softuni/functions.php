<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'softuni_enqueue_assets' );

function softuni_enqueue_assets() {
    wp_enqueue_style( 'softuni', get_stylesheet_directory_uri() . '/css/style.css' );
}

?>

<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'softuni_enqueue_assets');

if (!defined('SOFTUNI_THEME_VER')) {
    define('SOFTUNI_THEME_VER', '1.0.0');
}

function softuni_enqueue_assets()
{
    // Vendor CSS
    wp_enqueue_style('bootstrap-min', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), SOFTUNI_THEME_VER);
    wp_enqueue_style('bootstrap-icons', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), SOFTUNI_THEME_VER);
    wp_enqueue_style('aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css', array(), SOFTUNI_THEME_VER);
    wp_enqueue_style('swiper-bundle-min', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), SOFTUNI_THEME_VER);
    wp_enqueue_style('glightbox-min', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), SOFTUNI_THEME_VER);

    // Theme CSS
    wp_enqueue_style('softuni-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), SOFTUNI_THEME_VER);

    // Vendor JS Files
    wp_enqueue_script('bootstrap-bundle-min', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('php-email-form-validate', get_stylesheet_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('swiper-bundle-min', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('purecounter_vanilla', get_stylesheet_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('glightbox-min', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('imagesloaded-pkgd-min', get_stylesheet_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
    wp_enqueue_script('isotope-pkgd-min', get_stylesheet_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));

    // Main JS File
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), SOFTUNI_THEME_VER, array('in_footer' => true));
}

function enqueue_bootstrap_icons()
{
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_icons');
add_action('admin_enqueue_scripts', 'enqueue_bootstrap_icons');

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

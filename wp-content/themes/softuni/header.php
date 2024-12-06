<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">

    <!-- Favicons -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <?php wp_head(); ?>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="<?php echo get_home_url('/'); ?>" class="logo d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="">
                <h1 class="sitename">Active.</h1>
            </a>
            <?php
            $nav_menu_args = array(
                'container_class'    => 'navmenu',
                'theme_location'    => 'primary',
            );
            wp_nav_menu($nav_menu_args);
            ?>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </div>
    </header>
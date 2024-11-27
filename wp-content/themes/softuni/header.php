<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">

    <?php
    // @TODO: Move to enqueue functions
    ?>
    <!-- Favicons -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

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

            <?php // @TODO: Create WordPress Native menu 
            ?>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
<?php
/*
 * Plugin Name: SoftUni
 * Version: 0.1
 * Description: This is going to be our main plugin for the course
 */

/*
* CPT - done
* Custom Taxonomy - done
* Create a few helper functions
* Update our plugin structure
* Theme vs Plugin functionality - done
* Q&A
* Deploy the code to GitHub
* i18n functions

* 2nd sessions
* ADd some custom taxonomy meta data
*/

if (! defined('SOFTUNI_PLUGIN_VERSION')) {
    define('SOFTUNI_PLUGIN_VERSION', '0.1');
}

if (! defined('SOFTUNI_PLUGIN_ASSETS_URL')) {
    define('SOFTUNI_PLUGIN_ASSETS_URL',  plugin_dir_url(__FILE__) . 'assets');
}

require 'includes/cpt-portfolio.php';
require 'includes/cpt-testimonial.php';
require 'includes/cpt-service.php';

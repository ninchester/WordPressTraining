<?php
/*
* Template Name: Homepage
*
*/
?>

<?php get_header(); ?>

<main class="main">
  <!-- About Section -->
  <?php
  get_template_part('partials/about', 'section')
  ?>
  <!-- /About Section -->

  <!-- Services Section -->
  <?php
  get_template_part('partials/services', 'section')
  ?>
  <!-- /Services Section -->

  <!-- Blog Posts Section -->
  <?php softuni_display_latest_posts(3, 'Recent Posts'); ?>
  <!-- /Blog Posts Section -->

  <!-- Features Section -->
  <?php
  get_template_part('partials/features', 'section')
  ?>
  <!-- /Features Section -->

  <!-- Testimonials Section -->
  <?php
  get_template_part('partials/testimonials', 'section')
  ?>
  <!-- /Testimonials Section -->

</main>

<?php get_footer(); ?>
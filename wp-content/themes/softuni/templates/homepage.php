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

  <?php
  get_template_part('partials/stats', 'section')
  ?>
  <!-- Stats Section -->

  <!-- /Stats Section -->

  <!-- Blog Posts Section -->
  <?php
  get_template_part('partials/blog-posts', 'section')
  ?>
  <!-- /Blog Posts Section -->

  <!-- Tabs Section -->
  <?php
  get_template_part('partials/tabs', 'section')
  ?>
  <!-- /Tabs Section -->

  <!-- Testimonials Section -->
  <?php
  get_template_part('partials/testimonials', 'section')
  ?>
  <!-- /Testimonials Section -->

</main>

<?php get_footer(); ?>
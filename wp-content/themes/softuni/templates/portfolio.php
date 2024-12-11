<?php
/*
* Template Name: Portfolio
*
*/
?>

<?php
$categories = get_terms(array(
  'taxonomy' => 'portfolio-category',
  'hide_empty' => true,
  'fields' => 'all'
));

$portfolio_query = new WP_Query([
  'post_type'      => 'portfolio',
  'posts_per_page' => -1,
]);
?>

<?php get_header(); ?>

<main class="main">
  <?php if ($portfolio_query->have_posts()) : ?>
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" id="all" class="filter-portfolio-category filter-active">All</li>
            <?php
            if (!empty($categories)) {
              foreach ($categories as $category) {
                echo '<li class="filter-portfolio-category" id="' . $category->term_id . '">' . $category->name . '</li>';
              }
            }
            ?>
          </ul>

          <div class="portfolio-items row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php if (function_exists('render_portfolio_items_from_plugin')) {
              echo render_portfolio_items_from_plugin($portfolio_query);
            } ?>

          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->
  <?php endif; ?>
</main>

<?php get_footer(); ?>
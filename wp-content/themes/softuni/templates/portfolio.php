<?php
/*
* Template Name: Portfolio
*
*/
?>

<?php
  $categories = get_terms(array(
    'taxonomy' => 'potfolio-category',
    'hide_empty' => true,
    'fields' =>'all'
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
            <li data-filter="*" class="filter-active">All</li>
            <?php
            if (!empty($categories)) {
              foreach ($categories as $category) {
                  echo '<li>' . $category->name . '</li>';
              }
            }
            ?>
          </ul>

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="thumb d-block">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded', 'title' => 'Portfolio  Thumbnail']) ?>
                    </a>
                <?php endif; ?>
                <div class="portfolio-info">
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            <?php endwhile; ?>

            </div><!-- End Portfolio Container -->

          </div>

        </div>

      </section><!-- /Portfolio Section -->
    <?php endif; ?>

  </main>

  <?php get_footer(); ?>
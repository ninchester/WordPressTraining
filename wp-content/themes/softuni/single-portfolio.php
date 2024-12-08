<?php get_header(); ?>
<?php
$portfolio_client = get_post_meta(get_the_ID(), 'portfolio_client', true);
$portfolio_url = get_post_meta(get_the_ID(), 'portfolio_url', true);
$portfolio_date = get_post_meta(get_the_ID(), 'portfolio_date', true);
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Portfolio Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo get_home_url('/'); ?>">Home</a></li>
                    <li class="current">Portfolio Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between gy-4 mt-4">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="portfolio-description">
                        <h2><?php echo get_the_title(); ?></h2>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-featured-image mt-1">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-auto', 'title' => 'Feature image']) ?>
                            </div>
                        <?php endif; ?>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <?php if (!empty($portfolio_client) || !empty($portfolio_date) || !empty($portfolio_url)) : ?>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <?php if (!empty($portfolio_client)) : ?>
                                    <li><strong>Client</strong><?php echo $portfolio_client; ?></li>
                                <?php endif; ?>
                                <?php if (!empty($portfolio_date)) : ?>
                                    <li><strong>Project date</strong><?php echo $portfolio_date; ?></li>
                                <?php endif; ?>
                                <?php if (!empty($portfolio_url)) : ?>
                                    <li><strong>Project URL</strong> <a href="<?php echo $portfolio_url; ?>"><?php echo $portfolio_url; ?></a></li>
                                    <li><a href="<?php echo $portfolio_url; ?>" class="btn-visit align-self-start">Visit Website</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- /Portfolio Details Section -->
</main>

<?php get_footer(); ?>
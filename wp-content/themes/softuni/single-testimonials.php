<?php get_header(); ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo get_home_url('/'); ?>">Home</a></li>
                    <li class="current"><?php echo get_the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article class="article">
                            <section id="testimonials" class="testimonials section">
                                <div class="testimonial mx-auto">
                                    <figure class="img-wrap">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Image']) ?>
                                        <?php endif; ?>
                                    </figure>
                                    <h3 class="name"><?php echo get_the_title(); ?></h3>
                                    <blockquote>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                    </blockquote>
                                </div>
                            </section>
                        </article>
                    </div>
                </section><!-- /Blog Details Section -->
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
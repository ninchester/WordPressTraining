<?php get_header(); ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Blog</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo get_home_url('/'); ?>">Home</a></li>
                    <li class="current"><?php echo get_the_archive_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <?php if (have_posts()) : ?>
        <!-- Blog Posts 2 Section -->
        <section id="blog-posts-2" class="blog-posts-2 section">

            <div class="container">

                <div class="row gy-5">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4 col-md-6">
                            <article>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-img ">
                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Post Thumbnail']) ?>
                                    </div>
                                <?php endif; ?>

                                <div class="meta-top">
                                    <?php echo get_the_date() ?>
                                </div>

                                <h2 class="title">
                                    <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                            </article>
                        </div><!-- End post list item -->
                    <?php endwhile; ?>

                </div><!-- End blog posts list -->

            </div>

        </section><!-- /Blog Posts 2 Section -->
    <?php else : ?>
        No posts found
    <?php endif; ?>

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

        <div class="container">
            <div class="d-flex justify-content-center">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

    </section><!-- /Blog Pagination Section -->

</main>

<?php get_footer(); ?>
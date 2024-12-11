<?php get_header(); ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo get_home_url('/'); ?>"><?php _e('Home') ?></a></li>
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
                            <h2 class="title"><?php echo get_the_title(); ?></h2>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-featured-image mt-1">
                                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-auto', 'title' => 'Feature image']) ?>
                                </div>
                            <?php endif; ?>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?php echo get_the_date(); ?></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <?php the_content(); ?>
                            </div><!-- End post content -->
                            <?php if (!empty(get_the_category())) : ?>
                                <div class="meta-bottom">
                                    <i class="bi bi-tags"></i>

                                    <ul class="tags">
                                        <?php foreach (get_the_category() as $category) { ?>
                                            <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a></li>
                                        <? } ?>
                                    </ul>
                                </div><!-- End meta bottom -->
                            <?php endif; ?>
                        </article>
                    </div>
                </section><!-- /Blog Details Section -->
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
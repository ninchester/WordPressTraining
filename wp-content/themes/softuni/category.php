<?php get_header(); ?>

<section class="section-padding">
    <div class="container">
        <div style="color: red;"><?php echo get_the_archive_title(); ?></div>
        <div class="row">
            <?php if (have_posts()) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-lg-3 col-md-6">
                                <article class="post-grid mb-5">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a class="post-thumb mb-4 d-block" href="<?php echo get_the_permalink(); ?>">
                                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100', 'title' => 'Post Thumbnail']) ?>
                                        </a>
                                    <?php endif; ?>
                                    <span class="text-muted letter-spacing text-uppercase font-sm"><?php echo get_the_date() ?></span>
                                    <h3 class="post-title mt-1"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </article>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            <?php else : ?>
                No posts found
            <?php endif; ?>

            <div class="m-auto">

                <div class="pagination mt-5 pt-4">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
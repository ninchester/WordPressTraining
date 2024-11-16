<?php get_header(); ?>

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <h2 class="post-title mt-2">
                            <?php echo get_the_title(); ?>
                        </h2>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-featured-image mt-5">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100', 'title' => 'Feature image']) ?>
                            </div>
                        <?php endif; ?>
                    </div>


                    <div class="post-body">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
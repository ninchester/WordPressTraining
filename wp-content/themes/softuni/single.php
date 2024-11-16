<?php get_header(); ?>

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <h2 class="post-title mt-2">
                            <?php echo get_the_title(); ?>
                        </h2>
                        <div class="post-meta">
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by <?php echo get_the_author_meta('first_name'); ?></span>
                            <span class="text-uppercase font-sm letter-spacing-1"><?php echo get_the_date(); ?></span>
                        </div>

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
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">
                        <div class="sidebar-widget about mb-5 text-center p-3">
                            <div class="about-author">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author.jpg" alt="" class="img-fluid">
                            </div>
                            <h4 class="mb-0 mt-4">Liam Mason</h4>
                            <p>Travel Blogger</p>
                            <p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my
                                journey on this blog!</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/liammason.png" alt="" class="img-fluid">
                        </div>

                        <div class="sidebar-widget follow mb-5 text-center">
                            <h4 class="text-center widget-title">Follow Me</h4>
                            <div class="follow-socials">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-youtube"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
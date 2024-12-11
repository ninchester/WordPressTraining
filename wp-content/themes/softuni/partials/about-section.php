<?php
$page_id = get_page_by_path('about')->ID;
if ($page_id && get_post($page_id)) : ?>
    <section id="about" class="about section">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <?php if (has_post_thumbnail($page_id)) : ?>
                        <div class="post-featured-image mt-1">
                            <?php echo get_the_post_thumbnail($page_id, 'full', ['class' => 'img-fluid', 'title' => 'Feature image']) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <span class="section-subtitle" data-aos="fade-up"><?php _e('Welcome'); ?></span>
                    <h1 class="mb-4" data-aos="fade-up">
                        <?php echo get_the_title($page_id) ?>
                    </h1>
                    <p data-aos="fade-up">
                        <?php echo get_the_excerpt($page_id); ?>
                    </p>
                    <p class="mt-5" data-aos="fade-up">
                        <a href="<?php echo get_the_permalink($page_id); ?>" class="btn btn-get-started">Get Started</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
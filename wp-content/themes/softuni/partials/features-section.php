<?php

$query = new WP_Query([
    'post_type'      => 'feature',
    'posts_per_page' => -1,
]);

?>
<?php if ($query->have_posts()) : ?>
    <section id="tabs" class="tabs section light-background">
        <div class="container">
            <div class="row gap-x-lg-4 justify-content-between">
                <div class="col-lg-4 js-custom-dots">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi <?php echo esc_attr(get_field('icon', get_the_ID())); ?>"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3><?php the_title(); ?></h3>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->
                    <?php endwhile; ?>
                </div>

                <div class="col-lg-8">
                    <div class="swiper init-swiper-tabs">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoHeight": true,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "320": {
                                        "slidesPerView": 1,
                                        "spaceBetween": 40
                                    },
                                    "1200": {
                                        "slidesPerView": 1,
                                        "spaceBetween": 1
                                    }
                                }
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php
                                    $image = get_field('image', get_the_ID());
                                    if (is_array($image) && isset($image['url'])) {
                                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                                    } else {
                                        echo 'No image available.';
                                    } ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
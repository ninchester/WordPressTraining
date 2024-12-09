<?php

$query = new WP_Query([
    'post_type'      => 'testimonials',
    'posts_per_page' => -1,
]);

?>
<?php if ($query->have_posts()) : ?>
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Happy Customers</p>
            <h2>Testimonials</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
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
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
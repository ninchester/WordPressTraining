<?php

$query = new WP_Query([
    'post_type'      => 'service',
    'posts_per_page' => -1,
]);

?>
<?php if ($query->have_posts()) : ?>
    <section id="services" class="services section light-background">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up">
                            <div class="services-icon">
                                <?php
                                $icon_class = get_post_meta(get_the_ID(), '_service_icon_class', true);
                                if ($icon_class) {
                                    echo '<i class="' . esc_attr($icon_class) . '"></i>';
                                } else {
                                    echo '<i class="bi bi-question-circle"></i>';
                                }
                                ?>
                            </div>
                            <div>
                                <h3><?php echo get_the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
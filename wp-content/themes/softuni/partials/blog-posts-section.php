<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $number_of_posts,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
    <section id="blog-posts" class="blog-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $title ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="thumb d-block">
                                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded', 'title' => 'Post Thumbnail']) ?>
                                </a>
                            <?php endif; ?>
                            <div class="post-content">
                                <div class="meta">
                                    <?php if (!empty(get_the_category())) : ?>
                                        <i class="bi bi-tags"></i>

                                        <?php foreach (get_the_category() as $category) { ?>
                                            <a class="cat" href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a>
                                        <? } ?>
                                    <?php endif; ?>
                                    •
                                    <span class="date"><?php echo get_the_date(); ?></span>
                                </div>
                                <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
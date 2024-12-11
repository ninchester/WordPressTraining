<?php get_header(); ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo home_url('/'); ?>"><?php _e('Home') ?></a></li>
                    <li class="current"><?php echo get_the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article class="article">
                            <section id="services" class="services section">
                                <div class="services-item mx-auto">
                                    <?php
                                    $icon_class = get_post_meta(get_the_ID(), '_service_icon_class', true);
                                    echo '<div class="services-icon">';
                                    if ($icon_class) {
                                        echo '<i class="' . esc_attr($icon_class) . '"></i>';
                                    } else {
                                        echo '<i class="bi bi-question-circle"></i>';
                                    }
                                    echo  '</div>'
                                    ?>
                                    <h3 class="name"><?php echo get_the_title(); ?></h3>
                                    <blockquote>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                    </blockquote>
                                </div>
                            </section>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
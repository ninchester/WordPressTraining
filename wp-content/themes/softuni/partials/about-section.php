<section id="about" class="about section">

    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
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
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1">
                <span class="section-subtitle" data-aos="fade-up">Welcome FROM THE TEMPLATE</span>
                <h1 class="mb-4" data-aos="fade-up">
                    Excepteur sint occaecat cupidatat non proident
                </h1>
                <p data-aos="fade-up">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated they
                    live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.
                </p>
                <p class="mt-5" data-aos="fade-up">
                    <a href="#" class="btn btn-get-started">Get Started</a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php

/**
 * This is the assets function where we'll enqueue our scripts and styles
 *
 */

function softuni_plugin_enqueue_assets()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'ajax-script',
        plugins_url('../assets/scripts/scripts.js', __FILE__),
        ['jquery'],
        1.0
    );

    wp_localize_script(
        'ajax-script',
        'my_ajax_object',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );
}
add_action('wp_enqueue_scripts', 'softuni_plugin_enqueue_assets');

/**
 * Renders the portfolio items based on the input query parameter.
 * 
 * @param mixed $query WP_Query for filtering portfolio items
 * @return string Rendered html with portfolio data
 */
function render_portfolio_items_from_plugin($query)
{
    $html = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $html .= '<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">';

            if (has_post_thumbnail()) {
                $html .= '<a href="' . get_the_permalink() . '" class="thumb d-block">';
                $html .= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', [
                    'class' => 'img-fluid rounded',
                    'title' => 'Portfolio Thumbnail',
                ]);
                $html .= '</a>';
            }

            $html .= '<div class="portfolio-info">';
            $html .= '<h4>' . get_the_title() . '</h4>';
            $html .= '<p>' . get_the_excerpt() . '</p>';
            $html .= '<a href="' . get_the_permalink() . '" title="More Details" class="details-link">';
            $html .= '<i class="bi bi-link-45deg"></i></a>';
            $html .= '</div></div>';
        }

        wp_reset_postdata(); // Reset post data after the loop
    } else {
        $html = '<p>No portfolio items found.</p>';
    }

    return $html; // Return the constructed HTML
}


/**
 * Dynamic function that handles the AJAX filtering of portfolio
 *
 * @return void
 */
function filter_portfolio()
{
    $filter_id = esc_attr($_POST['filter_id']);
    $args = [
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
    ];

    if ($filter_id && $filter_id !== 'all') {
        $args['tax_query'] = [
            [
                'taxonomy' => 'portfolio-category',
                'field'    => 'id',
                'terms'    => $filter_id,
            ],
        ];
    }

    $query = new WP_Query($args);
    $html = render_portfolio_items_from_plugin($query);
    wp_send_json_success(['html' => $html]);
}

add_action('wp_ajax_nopriv_filter_portfolio', 'filter_portfolio');
add_action('wp_ajax_filter_portfolio', 'filter_portfolio');


/**
 * This is the callback function to display social media links with a shortcode
 * 
 * @param mixed $atts User attributes
 * @return string Html representation of the generated shortcode
 */
function display_social_links_shortcode($atts)
{
    $attributes = shortcode_atts(array(
        'facebook'  => '',
        'twitter'   => '',
        'instagram' => '',
        'linkedin'  => '',
        'youtube'   => '',
    ), $atts);

    $output = '<div class="footer"><div class="widget"><ul class="list-unstyled social-icons light mb-3">';

    if (!empty($attributes['facebook'])) {

        $output .= '<li><a href="' . esc_url($attributes['facebook']) . '" target="_blank">
                        <span class="bi bi-facebook" />
                    </a></li>';
    }
    if (!empty($attributes['twitter'])) {
        $output .= '<li><a href="' . esc_url($attributes['twitter']) . '" target="_blank">
                        <span class="bi bi-twitter" />
                    </a></li>';
    }
    if (!empty($attributes['instagram'])) {
        $output .= '<li><a href="' . esc_url($attributes['instagram']) . '" target="_blank">
                        <span class="bi bi-instagram" />
                    </a></li>';
    }
    if (!empty($attributes['linkedin'])) {
        $output .= '<li><a href="' . esc_url($attributes['linkedin']) . '" target="_blank">
                        <span class="bi bi-linkedin" />
                    </a></li>';
    }
    if (!empty($attributes['youtube'])) {
        $output .= '<li><a href="' . esc_url($attributes['youtube']) . '" target="_blank">
                        <span class="bi bi-youtube" />
                    </a></li>';
    }

    $output .= '</div></div></ul>';

    return $output;
}
add_shortcode('my_social_links', 'display_social_links_shortcode');

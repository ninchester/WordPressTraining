<?php
if (! class_exists('Softuni_Portfolio')) :
    class Softuni_Portfolio
    {
        public function __construct()
        {
            add_action('init', array($this, 'softuni_register_portfolio_cpt'));
            add_action('init', array($this, 'softuni_register_portfolio_category_taxonomy'));
            add_action('add_meta_boxes', array($this, 'portfolio_details_metabox'));
            add_action('save_post', array($this, 'custom_save_metabox'));
        }

        /**
         * Register a custom post type called "portfolio".
         *
         * @see get_post_type_labels() for label keys.
         */
        public function softuni_register_portfolio_cpt()
        {
            $labels = array(
                'name'                  => _x('Portfolio Items', 'Post type general name', 'softuni'),
                'singular_name'         => _x('Portfolio', 'Post type singular name', 'softuni'),
                'menu_name'             => _x('Portfolio Items', 'Admin Menu text', 'softuni'),
                'name_admin_bar'        => _x('Portfolio', 'Add New on Toolbar', 'softuni'),
                'add_new'               => __('Add New', 'softuni'),
                'add_new_item'          => __('Add New Portfolio', 'softuni'),
                'new_item'              => __('New Portfolio', 'softuni'),
                'edit_item'             => __('Edit Portfolio', 'softuni'),
                'view_item'             => __('View Portfolio', 'softuni'),
                'all_items'             => __('All Portfolio Items', 'softuni'),
                'search_items'          => __('Search Portfolio Items', 'softuni'),
                'parent_item_colon'     => __('Parent Portfolio Items:', 'softuni'),
                'not_found'             => __('No Portfolio Items found.', 'softuni'),
                'not_found_in_trash'    => __('No Portfolio Items found in Trash.', 'softuni'),
                'featured_image'        => _x('Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni'),
                'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'archives'              => _x('Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni'),
                'insert_into_item'      => _x('Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni'),
                'uploaded_to_this_item' => _x('Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni'),
                'filter_items_list'     => _x('Filter Portfolio Items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni'),
                'items_list_navigation' => _x('Portfolio Items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni'),
                'items_list'            => _x('Portfolio Items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'portfolio'),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'show_in_rest'       => true,
                'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            );

            register_post_type('portfolio', $args);
        }

        /**
         * Register custom taxonomy "portfolio-category"
         *
         * @return void
         */
        public function softuni_register_portfolio_category_taxonomy()
        {

            $labels = array(
                'name'              => _x('Categories', 'taxonomy general name', 'softuni'),
                'singular_name'     => _x('Category', 'taxonomy singular name', 'softuni'),
                'search_items'      => __('Search Categories', 'softuni'),
                'all_items'         => __('All Categories', 'softuni'),
                'parent_item'       => __('Parent Category', 'softuni'),
                'parent_item_colon' => __('Parent Category:', 'softuni'),
                'edit_item'         => __('Edit Category', 'softuni'),
                'update_item'       => __('Update Category', 'softuni'),
                'add_new_item'      => __('Add New Category', 'softuni'),
                'new_item_name'     => __('New Category Name', 'softuni'),
                'menu_name'         => __('Category', 'softuni'),
            );

            $args = array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'show_in_rest'      => true,
                'rewrite'           => array('slug' => 'category'),
            );

            register_taxonomy('portfolio-category', 'portfolio', $args);
        }

        /**
         * Callback function that renders the portfolio metabox
         * @param mixed $post The CPT portfolio
         * @return void
         */
        public function portfolio_details_metabox_callback($post)
        {
            // Add a nonce field for security
            wp_nonce_field('portfolio_details_metabox_nonce_action', 'portfolio_details_metabox_nonce');

            $portfolio_client = get_post_meta($post->ID, 'portfolio_client', true);

            echo '<label for="portfolio_client">Client: </label>';
            echo '<input type="text" id="portfolio_client" name="portfolio_client" value="' . esc_attr($portfolio_client) . '" style="width: 100%;" />';
            echo '<br />';

            $portfolio_url = get_post_meta($post->ID, 'portfolio_url', true);

            echo '<label for="portfolio_url">URL: </label>';
            echo '<input type="text" id="portfolio_url" name="portfolio_url" value="' . esc_attr($portfolio_url) . '" style="width: 100%;" />';

            $portfolio_date = get_post_meta($post->ID, 'portfolio_date', true);
            echo '<label for="portfolio_date" style="display:block; margin-top:10px;">Project Date: </label>';
            echo '<input type="date" id="portfolio_date" name="portfolio_date" value="' . esc_attr($portfolio_date) . '" style="width: 100%;" />';
        }
        /**
         * Explanation
         * Metabox Registration: The add_meta_box function creates a metabox for the your_custom_post_type post type.
         * Metabox Display: The callback function renders a text input field for entering "Custom Text."
         * Data Saving: The save_post action saves the text entered in the metabox when the post is saved.
         * Gutenberg Compatibility: Registering the meta field with show_in_rest => true makes it accessible in the REST API, which is useful for integrating with the block editor.
         * This setup ensures that your metabox is compatible with both the Classic Editor and Gutenberg. Let me know if you'd like to expand this with specific Gutenberg integrations or additional fields! 
         * @return void
         */
        public function portfolio_details_metabox()
        {
            add_meta_box(
                'portfolio_details_metabox_id',           // Unique ID for the metabox
                'Portfolio Details',                      // Title of the metabox
                array($this, 'portfolio_details_metabox_callback'),     // Callback function that renders the metabox
                'portfolio',                            // Post type where it will appear
                'side',                                 // Context: where on the screen (side, normal, or advanced)
                'default',                               // Priority: default, high, low
                array(
                    '__block_editor_compatible_meta_box' => true,
                    '__back_compat_meta_box'             => false,
                )
            );
        }

        /**
         * Saves the data provided in the portfolio metabox
         * @param mixed $post_id The ID of the CPT portfolio
         * @return void
         */
        public function custom_save_metabox($post_id)
        {
            // Check for nonce security
            if (
                ! isset($_POST['portfolio_details_metabox_nonce']) ||
                ! wp_verify_nonce($_POST['portfolio_details_metabox_nonce'], 'portfolio_details_metabox_nonce_action')
            ) {
                return;
            }

            // Check for autosave or bulk edit
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            // Check user permissions
            if (! current_user_can('edit_post', $post_id)) {
                return;
            }

            if (isset($_POST['_inline_edit'])) {
                return;
            }

            if (isset($_POST['portfolio_client'])) {
                update_post_meta($post_id, 'portfolio_client', sanitize_text_field($_POST['portfolio_client']));
            }

            if (isset($_POST['portfolio_client'])) {
                update_post_meta($post_id, 'portfolio_client', sanitize_text_field($_POST['portfolio_client']));
            }

            if (isset($_POST['portfolio_url'])) {
                update_post_meta($post_id, 'portfolio_url', esc_url_raw($_POST['portfolio_url']));
            }

            if (isset($_POST['portfolio_date'])) {
                $portfolio_date = sanitize_text_field($_POST['portfolio_date']);
                if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $portfolio_date)) {
                    update_post_meta($post_id, 'portfolio_date', $portfolio_date);
                }
            }
        }
    }
endif;
$softuni_portfolio = new Softuni_Portfolio();

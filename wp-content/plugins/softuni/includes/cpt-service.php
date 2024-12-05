<?php

if (! class_exists('Softuni_Service') ) :
    class Softuni_Service {
        public function __construct() {
            add_action( 'init', array( $this, 'softuni_register_service_cpt' ) );
            add_action('add_meta_boxes', array( $this, 'add_service_icon_meta_box'));
            add_action('save_post', array ( $this, 'save_service_icon_meta'));
        }
        /**
         * Register a custom post type called "service".
         *
         * @see get_post_type_labels() for label keys.
         */
        public function softuni_register_service_cpt() {
            $labels = array(
                'name'                  => _x('Services', 'Post type general name', 'softuni'),
                'singular_name'         => _x('Service', 'Post type singular name', 'softuni'),
                'menu_name'             => _x('Services', 'Admin Menu text', 'softuni'),
                'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'softuni'),
                'add_new'               => __('Add New', 'softuni'),
                'add_new_item'          => __('Add New Service', 'softuni'),
                'new_item'              => __('New Service', 'softuni'),
                'edit_item'             => __('Edit Service', 'softuni'),
                'view_item'             => __('View Service', 'softuni'),
                'all_items'             => __('All Services', 'softuni'),
                'search_items'          => __('Search Service', 'softuni'),
                'parent_item_colon'     => __('Parent Service:', 'softuni'),
                'not_found'             => __('No Service found.', 'softuni'),
                'not_found_in_trash'    => __('No Service found in Trash.', 'softuni'),
                'featured_image'        => _x('Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni'),
                'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'archives'              => _x('Services archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni'),
                'insert_into_item'      => _x('Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni'),
                'uploaded_to_this_item' => _x('Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni'),
                'filter_items_list'     => _x('Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni'),
                'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni'),
                'items_list'            => _x('Services list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'Service'),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'show_in_rest'       => true,
                'supports'           => array('title', 'editor', 'thumbnail'),
            );

            register_post_type('service', $args);
        }
        
        public function add_service_icon_meta_box() {
            add_meta_box(
                'service_icon_meta',
                'Service Icon',
                array($this, 'render_service_icon_meta_box'),
                'service',
                'side'
            );
        }

        public function render_service_icon_meta_box($post) {
            $icon_class = get_post_meta($post->ID, '_service_icon_class', true);
        
            $icons = [
                'bi bi-bullseye',
                'bi bi-command',
                'bi bi-bar-chart',
            ];
        
            wp_nonce_field('save_service_icon', 'service_icon_nonce');
            ?>
            <p>
                <label for="service_icon_class">Select an Icon:</label>
                <select name="service_icon_class" id="service_icon_class" class="widefat">
                    <option value="">Select an Icon</option>
                    <?php foreach ($icons as $icon) : ?>
                        <option value="<?php echo esc_attr($icon); ?>" <?php selected($icon_class, $icon); ?>>
                            <?php echo ucfirst(str_replace('bi bi-', '', $icon));?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <strong>Preview:</strong>
                <i id="icon-preview" class="<?php echo esc_attr($icon_class); ?>" style="font-size: 24px; margin-top: 10px;"></i>
            </p>
            <script>
                jQuery(document).ready(function($) {
                    $('#service_icon_class').on('change', function() {
                        $('#icon-preview').attr('class', $(this).val());
                    });
                });
            </script>
            <?php
        }
        

        public function save_service_icon_meta($post_id) {
            if (!isset($_POST['service_icon_nonce']) || !wp_verify_nonce($_POST['service_icon_nonce'], 'save_service_icon')) {
                return;
            }
        
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }
        
            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
        
            if (isset($_POST['service_icon_class'])) {
                update_post_meta($post_id, '_service_icon_class', sanitize_text_field($_POST['service_icon_class']));
            }
        }
    }

endif;
$softuni_service = new Softuni_Service();
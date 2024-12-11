<?php

if (! class_exists('Softuni_Feature')) :
    class Softuni_Feature
    {
        public function __construct()
        {
            add_action('init', array($this, 'softuni_register_features_cpt'));
        }

        /**
         * Register a custom post type called "feature".
         *
         * @see get_post_type_labels() for label keys.
         */
        public function softuni_register_features_cpt()
        {
            $labels = array(
                'name'                  => _x('Features', 'Post type general name', 'softuni'),
                'singular_name'         => _x('Feature', 'Post type singular name', 'softuni'),
                'menu_name'             => _x('Features', 'Admin Menu text', 'softuni'),
                'name_admin_bar'        => _x('Features', 'Add New on Toolbar', 'softuni'),
                'add_new'               => __('Add New', 'softuni'),
                'add_new_item'          => __('Add New Feature', 'softuni'),
                'new_item'              => __('New Feature', 'softuni'),
                'edit_item'             => __('Edit Feature', 'softuni'),
                'view_item'             => __('View Feature', 'softuni'),
                'all_items'             => __('All Features', 'softuni'),
                'search_items'          => __('Search Features', 'softuni'),
                'parent_item_colon'     => __('Parent Feature:', 'softuni'),
                'not_found'             => __('No Features found.', 'softuni'),
                'not_found_in_trash'    => __('No Features found in Trash.', 'softuni'),
                'featured_image'        => _x('Feature Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni'),
                'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni'),
                'archives'              => _x('Features archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni'),
                'insert_into_item'      => _x('Insert into Features', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni'),
                'uploaded_to_this_item' => _x('Uploaded to this Features', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni'),
                'filter_items_list'     => _x('Filter Features list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni'),
                'items_list_navigation' => _x('Features list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni'),
                'items_list'            => _x('Features list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'features'),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'show_in_rest'       => true,
                'supports'           => array('title', 'editor', 'thumbnail'),
            );

            register_post_type('feature', $args);
        }
    }
endif;
$softuni_feature = new Softuni_Feature();

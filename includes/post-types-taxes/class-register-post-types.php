<?php
/**
 * Register post types.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "burcon_post_type" and replace with your post type database name.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'burcon-plugin' ),
            'singular_name'         => __( 'Custom Post', 'burcon-plugin' ),
            'menu_name'             => __( 'Custom Posts', 'burcon-plugin' ),
            'all_items'             => __( 'All Custom Posts', 'burcon-plugin' ),
            'add_new'               => __( 'Add New', 'burcon-plugin' ),
            'add_new_item'          => __( 'Add New Custom Post', 'burcon-plugin' ),
            'edit_item'             => __( 'Edit Custom Post', 'burcon-plugin' ),
            'new_item'              => __( 'New Custom Post', 'burcon-plugin' ),
            'view_item'             => __( 'View Custom Post', 'burcon-plugin' ),
            'view_items'            => __( 'View Custom Posts', 'burcon-plugin' ),
            'search_items'          => __( 'Search Custom Posts', 'burcon-plugin' ),
            'not_found'             => __( 'No Custom Posts Found', 'burcon-plugin' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'burcon-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'burcon-plugin' ),
            'featured_image'        => __( 'Featured image for this custom post', 'burcon-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'burcon-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'burcon-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'burcon-plugin' ),
            'archives'              => __( 'Custom Post archives', 'burcon-plugin' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'burcon-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'burcon-plugin' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'burcon-plugin' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'burcon-plugin' ),
            'items_list'            => __( 'Custom Posts List', 'burcon-plugin' ),
            'attributes'            => __( 'Custom Post Attributes', 'burcon-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'burcon-plugin' ),
        ];

        $args = [
            'label'               => __( 'Custom Posts', 'burcon-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'burcon-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'burcon_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'burcon_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'burcon_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        register_post_type(
            'burcon_post_type',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;
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
         * Post Type: Intro Slides.
         */

        $labels = [
            'name'                  => __( 'Intro Slides', 'burcon-plugin' ),
            'singular_name'         => __( 'Intro Slide', 'burcon-plugin' ),
            'menu_name'             => __( 'Intro Slides', 'burcon-plugin' ),
            'all_items'             => __( 'All Intro Slides', 'burcon-plugin' ),
            'add_new'               => __( 'Add New', 'burcon-plugin' ),
            'add_new_item'          => __( 'Add New Slide', 'burcon-plugin' ),
            'edit_item'             => __( 'Edit Slide', 'burcon-plugin' ),
            'new_item'              => __( 'New Slide', 'burcon-plugin' ),
            'view_item'             => __( 'View Slide', 'burcon-plugin' ),
            'view_items'            => __( 'View Slides', 'burcon-plugin' ),
            'search_items'          => __( 'Search Slides', 'burcon-plugin' ),
            'not_found'             => __( 'No Slides Found', 'burcon-plugin' ),
            'not_found_in_trash'    => __( 'No Slides Found in Trash', 'burcon-plugin' ),
            'parent_item_colon'     => __( 'Parent Slide', 'burcon-plugin' ),
            'featured_image'        => __( 'Featured image for this slide', 'burcon-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this slide', 'burcon-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this slide', 'burcon-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this slide', 'burcon-plugin' ),
            'archives'              => __( 'Slide Archives', 'burcon-plugin' ),
            'insert_into_item'      => __( 'Insert into Slide', 'burcon-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Slide', 'burcon-plugin' ),
            'filter_items_list'     => __( 'Filter Slides', 'burcon-plugin' ),
            'items_list_navigation' => __( 'Slides list navigation', 'burcon-plugin' ),
            'items_list'            => __( 'Slides List', 'burcon-plugin' ),
            'attributes'            => __( 'Slide Attributes', 'burcon-plugin' ),
            'parent_item_colon'     => __( 'Parent Slide', 'burcon-plugin' ),
        ];

        $args = array(
            'label'               => __( 'Intro Slides', 'burcon-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'For the slideshow on the front page.', 'burcon-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => true,
            'rest_base'           => '',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => false,
            'query_var'           => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-gallery',
            'supports'            => [
                'title',
                'thumbnail',
                'page-attributes'
            ],
        );

        register_post_type(
            'intro-slides',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;
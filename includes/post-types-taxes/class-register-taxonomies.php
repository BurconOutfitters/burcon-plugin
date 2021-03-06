<?php
/**
 * Register taxonomies.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace CC_Plugin\Includes\Taxonomies_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "ccp_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'burcon-plugin' ),
            'singular_name'              => __( 'Taxonomy', 'burcon-plugin' ),
            'menu_name'                  => __( 'Taxonomy', 'burcon-plugin' ),
            'all_items'                  => __( 'All Taxonomies', 'burcon-plugin' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'burcon-plugin' ),
            'view_item'                  => __( 'View Taxonomy', 'burcon-plugin' ),
            'update_item'                => __( 'Update Taxonomy', 'burcon-plugin' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'burcon-plugin' ),
            'new_item_name'              => __( 'New Taxonomy', 'burcon-plugin' ),
            'parent_item'                => __( 'Parent Taxonomy', 'burcon-plugin' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'burcon-plugin' ),
            'popular_items'              => __( 'Popular Taxonomies', 'burcon-plugin' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'burcon-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'burcon-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'burcon-plugin' ),
            'not_found'                  => __( 'No Taxonomies Found', 'burcon-plugin' ),
            'no_terms'                   => __( 'No Taxonomies', 'burcon-plugin' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'burcon-plugin' ),
            'items_list'                 => __( 'Taxonomies List', 'burcon-plugin' )
        ];

        $args = [
            'label'              => __( 'Taxonomies', 'burcon-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'ccp_taxonomy',
            [
                'ccp_post_type'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;
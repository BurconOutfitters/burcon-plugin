<?php
/**
 * Functions for post types and taxonomies.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Functions for post types and taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
class Post_Type_Tax_Functions {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		add_action( 'admin_menu', [ $this, 'change_post_label' ] );

		add_action( 'init', [ $this, 'change_post_object' ] );

		add_action( 'admin_menu', [ $this, 'menu_news_icon' ] );

		add_filter('post_updated_messages', [ $this, 'news_messages' ] );

		// Replace "Post" in the update messages.
		add_filter( 'post_updated_messages', [ $this, 'update_messages' ], 99 );

	}

	/**
	 * Change all incidents of Post to News.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	function change_post_label() {

		global $menu, $submenu;

		$menu[5][0] = 'News';
		$submenu['edit.php'][5][0]  = __( 'News Posts', 'burcon-plugin' );
		$submenu['edit.php'][10][0] = __( 'Add News', 'burcon-plugin' );
		$submenu['edit.php'][16][0] = __( 'News Tags', 'burcon-plugin' );

		echo '';

	}

	/**
	 * Change the post object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	function change_post_object() {

		global $wp_post_types;

		$labels = $wp_post_types['post']->labels;
		$labels->name               = __( 'News Posts', 'burcon-plugin' );
		$labels->singular_name      = __( 'News', 'burcon-plugin' );
		$labels->add_new            = __( 'Add News', 'burcon-plugin' );
		$labels->add_new_item       = __( 'Add News', 'burcon-plugin' );
		$labels->edit_item          = __( 'Edit News', 'burcon-plugin' );
		$labels->new_item           = __( 'News Post', 'burcon-plugin' );
		$labels->view_item          = __( 'View News', 'burcon-plugin' );
		$labels->search_items       = __( 'Search News', 'burcon-plugin' );
		$labels->not_found          = __( 'No News found', 'burcon-plugin' );
		$labels->not_found_in_trash = __( 'No News found in Trash', 'burcon-plugin' );
		$labels->all_items          = __( 'All News', 'burcon-plugin' );
		$labels->menu_name          = __( 'News', 'burcon-plugin' );
		$labels->name_admin_bar     = __( 'News Post', 'burcon-plugin' );

	}

	/**
	 * Change the icon in the admin menu.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	function menu_news_icon() {

		global $menu;

		foreach ( $menu as $key => $val ) {

			if ( __( 'News' ) == $val[0] ) {
				$menu[$key][6] = 'dashicons-megaphone';
			}

		}

	}

	/**
	 * Change post messages.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $messages Gets the array of post messages.
	 * @return array Returns the ammended array of post messages.
	 */
	function news_messages( $messages ) {

		global $post, $post_ID;

		// The new array of post messages.
		$messages['post'] = [

			// Unused. Messages start at index 1.
			0  => '',

			1  => sprintf(
				'%1s <a href="%2s">%3s</a>.',
				__( 'News Updated.', 'burcon-plugin' ),
				esc_url( get_permalink( $post_ID ) ),
				__( 'View News Post', 'burcon-plugin' )
			),

			2  => __( 'Custom field updated.', 'burcon-plugin' ),
			3  => __( 'Custom field deleted.', 'burcon-plugin' ),
			4  => __( 'News updated.', 'burcon-plugin' ),

			/* translators: %s: date and time of the revision */
			5  => isset( $_GET['revision'] ) ? sprintf(
				__( 'News post restored to revision from %1s' ),
				wp_post_revision_title( (int) $_GET['revision'], false )
			) : false,

			6  => sprintf(
				'%1s <a href="%2s">%3s</a>.',
				__( 'News published.', 'burcon-plugin' ),
				esc_url( get_permalink( $post_ID ) ),
				__( 'View News Post', 'burcon-plugin' )
			),

			7  => __( 'News saved.', 'burcon-plugin' ),

			8  => sprintf(
				'%1s <a target="_blank" href="%2s">%3s</a>.',
				__( 'News submitted.', 'burcon-plugin' ),
				esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ),
				__( 'Preview News Post', 'burcon-plugin' )
			),

			9  => sprintf(
				'%1s <strong>%2s</strong>. <a target="_blank" href="%3s">%4s</a>.',
				__( 'News scheduled for:', 'burcon-plugin' ),

				// translators: Publish box date format, see http://php.net/date
				date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ),
				esc_url( get_permalink( $post_ID ) ),
				__( 'Preview News Post', 'burcon-plugin' )
			),

			10 => sprintf(
				'%1s <a target="_blank" href="%2s">%3s</a>.',
				__( 'News draft updated.', 'burcon-plugin' ),
				esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ),
				__( 'Preview News Post', 'burcon-plugin' )
			)
		];

		// Return the ammended array of post messages.
		return $messages;

	}

	/**
	 * Replace "Post" in the update messages for custom post types.
	 *
	 * Example: where the edit screen reads "Post updated" and "View post"
	 * it would read "Project updated" and "View project" for post type Project.
	 *
	 * @since  1.0.0
	 * @access public
	 * @global object post
	 * @global int post_ID
	 * @param array $messages
	 * @return string Returns the text appropriate for each condition.
	 */
	public function update_messages( $messages ) {

		global $post, $post_ID;

		$post_types = get_post_types(
			[
				'show_ui'  => true,
				'_builtin' => false
			],
			'objects' );

		foreach ( $post_types as $post_type => $post_object ) {

			$messages[ $post_type ] = [
				0  => '', /* Unused. Messages start at index 1 */

				1  => sprintf(
					__( '%1s updated. <a href="%2s">View %3s</a>', 'burcon-plugin' ), $post_object->labels->singular_name,
					esc_url( get_permalink( $post_ID ) ),
					$post_object->labels->singular_name
				),
				2  => __( 'Custom field updated.', 'burcon-plugin' ),
				3  => __( 'Custom field deleted.', 'burcon-plugin' ),
				4  => sprintf(
					__( '1%s updated.', 'burcon-plugin' ),
					$post_object->labels->singular_name
				),
				5  => isset( $_GET['revision']) ? sprintf(
					__( '%1s restored to revision from %2s', 'burcon-plugin' ),
					$post_object->labels->singular_name,
					wp_post_revision_title( (int) $_GET['revision'], false )
					) : false,
				6  => sprintf(
					__( '%1s published. <a href="%2s">View %3s</a>', 'burcon-plugin' ),
					$post_object->labels->singular_name,
					esc_url( get_permalink( $post_ID ) ),
					$post_object->labels->singular_name
				),
				7  => sprintf(
					__( '%1s saved.', 'burcon-plugin' ),
					$post_object->labels->singular_name
				),
				8  => sprintf(
					__( '%1s submitted. <a target="_blank" href="%2s">Preview %3s</a>', 'burcon-plugin' ),
					$post_object->labels->singular_name,
					esc_url( add_query_arg( 'preview', 'true',
					get_permalink( $post_ID ) ) ),
					$post_object->labels->singular_name
				),
				9  => sprintf(
					__( '%1s scheduled for: <strong>%2s</strong>. <a target="_blank" href="%3s">Preview %4s</a>', 'burcon-plugin'  ),
					$post_object->labels->singular_name,
					date_i18n( __( 'M j, Y @ G:i', 'burcon-plugin' ),
					strtotime( $post->post_date ) ),
					esc_url( get_permalink( $post_ID ) ),
					$post_object->labels->singular_name
				),
				10 => sprintf(
					__( '%1s draft updated. <a target="_blank" href="%2s">Preview %3s</a>', 'burcon-plugin'  ),
					$post_object->labels->singular_name,
					esc_url( add_query_arg( 'preview', 'true',
					get_permalink( $post_ID ) ) ),
					$post_object->labels->singular_name
				),
			];

		}

		return $messages;
	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ccp_type_taxe_functions() {

	return Post_Type_Tax_Functions::instance();

}

// Run an instance of the class.
ccp_type_taxe_functions();
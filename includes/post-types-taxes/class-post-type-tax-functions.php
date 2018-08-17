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

		// Replace "Post" in the update messages.
		add_filter( 'post_updated_messages', [ $this, 'update_messages' ], 99 );

		// Replace post type title placeholders.
		add_filter( 'enter_title_here', [ $this, 'title_placeholders' ] );

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

	/**
	 * Replace post type title placeholders in classic editor.
	 *
	 * Has no affect on the WordPress block editor.
	 *
	 * No text choices have been made. This is included as a
	 * head start in development of a site-specific plugin.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param string $title
	 * @return string Returns conditional text.
	 *
	 * @todo Add a check for the block or classic editor?
	 */
	public function title_placeholders( $title ) {

		// Get the current post edit screen.
		$screen = get_current_screen();

		if ( '' == $screen->post_type ) {
			$title = __( '', 'burcon-plugin' );
		} elseif ( '' == $screen->post_type ) {
			$title = __( '', 'burcon-plugin' );
		}

		return $title;
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
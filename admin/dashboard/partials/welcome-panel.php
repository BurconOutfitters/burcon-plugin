<?php
/**
 * Custom welcome panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    Burcon_Plugin
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Burcon_Plugin\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the current user name for the greeting.
$current_user = wp_get_current_user();
$user_name    = $current_user->display_name;

/**
 * Site logo.
 */
$logo_id  = get_theme_mod( 'custom_logo' );
$get_logo = wp_get_attachment_image_src( $logo_id , 'full' );
if ( function_exists( 'the_custom_logo' ) ) {
	$output = '<img src="' . esc_url( $get_logo[0] ) . '">';
} else {
	$output = null;
}
$logo = apply_filters( 'burcon_welcome_logo', $output );

// Add a filterable subheading.
$subheading = sprintf(
	'<h3>%1s</h3>',
	esc_html__( 'Here are some quick links to start editing content&hellip;', 'burcon-plugin' )
);
$subheading = apply_filters( 'burcon_welcome_subheading', $subheading );

// Add a filterable description.
$about_desc = apply_filters( 'burcon_welcome_about', __( 'Put your welcome message here.', 'burcon-plugin' ) );

?>
<?php do_action( 'burcon_before_welcome_panel_content' ); ?>
<div class="welcome-panel-content custom">
	<?php do_action( 'burcon_welcome_panel_content_before' ); ?>
	<header class="welcome-panel-header">
		<?php do_action( 'burcon_welcome_panel_header_before' ); ?>
		<div class="welcome-panel-header-wrap">
			<div class="dashboard-logo">
				<?php echo $logo; ?>
			</div>
			<div class="dashboard-greeting">
				<?php echo sprintf(
					'<h2>%1s %2s</h2>',
					get_bloginfo( 'name' ),
					__( 'Dashboard' )
				); ?>
				<p class="about-description"><?php echo $about_desc; ?></p>
			</div>
			<div class="dashboard-summary">
				<h2><?php _e( 'Website Summary', 'burcon-plugin' ); ?></h2>
				<?php wp_dashboard_right_now(); ?>
			</div>
		</div>
		<?php echo $subheading; ?>
	<?php do_action( 'burcon_welcome_panel_header_after' ); ?>
	</header>
	<div class="welcome-panel-column-container">
		<?php do_action( 'burcon_welcome_panel_column_container_before' ); ?>

		<div class="welcome-panel-column">
			<?php do_action( 'burcon_welcome_panel_column_first_before' ); ?>

				<?php if ( is_active_sidebar( 'burcon_welcome_widget_first' ) ) {

					dynamic_sidebar( 'burcon_welcome_widget_first' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column One', 'burcon-plugin' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'burcon-plugin' ),
						__( 'to this area', 'burcon-plugin' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'burcon_welcome_panel_column_first_after' ); ?>
		</div>
		<div class="welcome-panel-column">
			<?php do_action( 'burcon_welcome_panel_column_second_before' ); ?>

			<?php if ( is_active_sidebar( 'burcon_welcome_widget_second' ) ) {

					dynamic_sidebar( 'burcon_welcome_widget_second' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column Two', 'burcon-plugin' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'burcon-plugin' ),
						__( 'to this area', 'burcon-plugin' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'burcon_welcome_panel_column_second_after' ); ?>
		</div>
		<div class="welcome-panel-column welcome-panel-last">
			<?php do_action( 'burcon_welcome_panel_column_last_before' ); ?>

			<?php if ( is_active_sidebar( 'burcon_welcome_widget_last' ) ) {

					dynamic_sidebar( 'burcon_welcome_widget_last' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column Three', 'burcon-plugin' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'burcon-plugin' ),
						__( 'to this area', 'burcon-plugin' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'burcon_welcome_panel_column_last_after' ); ?>
		</div>

		<?php do_action( 'burcon_welcome_panel_column_container_after' ); ?>
	</div>

	<?php do_action( 'burcon_welcome_panel_content_after' ); ?>
</div>
<?php do_action( 'burcon_after_welcome_panel_content' ); ?>
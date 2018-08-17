<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CC_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'burcon-plugin' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'burcon-plugin' ),
	esc_url( admin_url( '?page=' . BURCON_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'burcon-plugin' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'burcon-plugin' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'burcon-plugin' ); ?></h3>
<ul>
<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Make Menus and Widgets top level menu items', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Remove select admin menu items', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Remove WordPress logo from admin bar', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Remove access to theme and plugin editors', 'burcon-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'burcon-plugin' ); ?></h3>
<ul>
<li><?php _e( 'Add three admin bar menus', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Add custom post types to the At a Glance widget', 'burcon-plugin' ); ?></li>
<li><?php _e( 'Custom admin footer message', 'burcon-plugin' ); ?></li>
</ul>
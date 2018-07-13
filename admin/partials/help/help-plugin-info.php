<?php
/**
 * Content for the plugin More Information help tab.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php echo sprintf(
	'%1s %2s %3s',
	__( 'More information about the', 'burcon-plugin' ),
	get_bloginfo( 'name' ),
	__( 'plugin', 'burcon-plugin' )
); ?></h3>
<h4><?php _e( 'The plugin source', 'burcon-plugin' ); ?></h4>
<p><?php _e( 'Following is the the link to this plugin as it comes out of the box. Change this information to complement your site-specific version.', 'burcon-plugin' ); ?></p>
<p><a href="https://github.com/ControlledChaos/burcon-plugin" target="_blank">https://github.com/ControlledChaos/burcon-plugin</a></p>
<h4><?php _e( 'Ask for development help', 'burcon-plugin' ); ?></h4>
<?php echo sprintf(
	'<p>%1s <a href="mailto:greg@ccdzine.com">greg@ccdzine.com</a></p>',
	__( 'If you would like help developing this plugin for your project, contact the plugin author, Greg Sweet, at' )
 ); ?>
<?php
/**
 * About page introduction output.
 *
 * Since you are going to change this content it may have been a
 * waste of my time to put the text here into translation functions.
 * However, I like to do things properly and I want this to serve as
 * an example of how it should be done for your project.
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
<!-- Tabbed content heading -->
<h2><?php _e( 'Plugin Overview', 'burcon-plugin' ); ?></h2>

<p><?php _e( 'This is a tool — a means to an end. But it can be used as is without further development.', 'burcon-plugin' ); ?></p>

<!-- Section heading -->
<h3><?php _e( 'Introduction', 'burcon-plugin' ); ?></h3>

<p><?php _e( 'This is a parent plugin, or a plugin framework, that provides consistent functionality accross all websites under the management of Burcon Outfitters. It was built with extensibility in mind so that each website in the network may add funcionality peculiar to its specific needs.' ); ?></p>

<!-- Section heading -->
<h3><?php _e( 'Compatibility', 'burcon-plugin' ); ?></h3>

<ul class="burcon_bullet-list">
	<li><?php _e( 'This plugin was written in a WordPress 4.9+ environment with no concern for backwards compatitbility.', 'burcon-plugin' ); ?></li>
	<li><?php _e( 'This plugin was written on a local server running PHP 7.0', 'burcon-plugin' ); ?></li>
	<li><?php _e( 'The short array syntax ( "[]" rather than "array()" ) requires PHP 5.4+', 'burcon-plugin' ); ?></li>
</ul>
<?php echo sprintf(
	'<p>%1s</p>',
	__( 'Sample editor blocks are included in preparation for WordPress 5.0 with it\'s new user interface. Until that release, the <a href="%2s" target="_blank">Gutenberg</a> plugin is required to use the blocks.', 'burcon-plugin' ),
	esc_url( 'https://wordpress.org/plugins/gutenberg/' )
 ); ?>
<?php echo sprintf(
	'<p>%1s <a href="%2s" target="_blank">%3s</a> %4s <a href="%5s" target="_blank">%6s</a> %7s <a href="%8s" target="_blank">%9s</a> %10s <a href="%11s" target="_blank">%12s</a> %13s</p>',
	__( 'For a nicer user experience, this plugin is recommended for use with', 'burcon-plugin' ),
	esc_url( 'https://www.advancedcustomfields.com/pro/' ),
	'Advanced Custom Fields PRO',
	__( 'or the', 'burcon-plugin' ),
	esc_url( 'https://wordpress.org/plugins/advanced-custom-fields/' ),
	__( 'free version of ACF', 'burcon-plugin' ),
	__( 'plus the', 'burcon-plugin' ),
	esc_url( 'https://www.advancedcustomfields.com/add-ons/options-page/' ),
	__( 'Options Page', 'burcon-plugin' ),
	__( 'addon. However, most of the ACF features are duplicated using the', 'burcon-plugin' ),
	esc_url( 'https://developer.wordpress.org/plugins/settings/settings-api/' ),
	__( 'WordPress settings API', 'burcon-plugin' ),
	__( 'to reduce third-party dependencies.', 'burcon-plugin' )
 ); ?>

<!-- Section heading -->
<h3><?php _e( 'Additional Information', 'burcon-plugin' ); ?></h3>

<p><?php _e( 'You can find more information, including instructions for renaming this plugin, in the help tab at the top of this page.' ); ?></p>
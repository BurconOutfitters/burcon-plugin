<?php
/**
 * Content for the Remove Emoji Script help tab.
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
<div>
	<h3><?php _e( 'Remove Emoji Script', 'burcon-plugin' ); ?></h3>
	<p><?php _e( 'WordPress includes this script to allow emojis to work in older browsers. If your users work with modern browsers than this script is unnecessary.' ); ?></p>
</div>
<?php
/**
 * Remove Privacy Menu
 *
 * @package     Remove Privacy Menu
 * @author      Per Soderlind
 * @copyright   2018 Per Soderlind
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Remove Privacy Menu
 * Plugin URI: https://github.com/soderlind/remove-privacy-menu
 * GitHub Plugin URI: https://github.com/soderlind/remove-privacy-menu
 * Description: Hides the Settings->Privacy menu by disabling the manage_privacy_options capability.
 * Version:     0.0.1
 * Author:      Per Soderlind
 * Author URI:  https://soderlind.no
 * Text Domain: remove-privacy-menu
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace Soderlind\Administrator;

add_filter(
	'map_meta_cap', function( $caps, $cap, $user_id, $args ) {
		if ( 'manage_privacy_options' == $cap ) {
			$caps[] = 'do_not_allow';
		}
		return $caps;
	}, 10, 4
);



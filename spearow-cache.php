<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.brechtryckaert.com
 * @since             1.0.0
 * @package           Spearow_Cache
 *
 * @wordpress-plugin
 * Plugin Name:       Spearow Cache
 * Plugin URI:        https://www.brechtryckaert.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Brecht Ryckaert
 * Author URI:        https://www.brechtryckaert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       spearow-cache
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-spearow-cache-activator.php
 */
function activate_spearow_cache() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spearow-cache-activator.php';
	Spearow_Cache_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-spearow-cache-deactivator.php
 */
function deactivate_spearow_cache() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spearow-cache-deactivator.php';
	Spearow_Cache_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_spearow_cache' );
register_deactivation_hook( __FILE__, 'deactivate_spearow_cache' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-spearow-cache.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_spearow_cache() {

	$plugin = new Spearow_Cache();
	$plugin->run();

}
run_spearow_cache();

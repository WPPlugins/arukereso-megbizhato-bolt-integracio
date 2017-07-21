<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://plus-kreativ.hu
 * @since             1.0.0
 * @package           Wc_Arukereso_Megbizthato_Bolt
 *
 * @wordpress-plugin
 * Plugin Name:       Woocommerce Árukereső - Megbízható bolt integráció
 * Plugin URI:        http://plus-kreativ.hu
 * Description:       Árukereső - Megbízható bolt program integrálása Woocommerce rendszerhez
 * Version:           1.0.0
 * Author:            Dávid Richárd
 * Author URI:        http://plus-kreativ.hu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-arukereso-megbizthato-bolt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-arukereso-megbizthato-bolt-activator.php
 */
function activate_wc_arukereso_megbizthato_bolt() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-arukereso-megbizthato-bolt-activator.php';
	Wc_Arukereso_Megbizthato_Bolt_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-arukereso-megbizthato-bolt-deactivator.php
 */
function deactivate_wc_arukereso_megbizthato_bolt() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-arukereso-megbizthato-bolt-deactivator.php';
	Wc_Arukereso_Megbizthato_Bolt_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_arukereso_megbizthato_bolt' );
register_deactivation_hook( __FILE__, 'deactivate_wc_arukereso_megbizthato_bolt' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-arukereso-megbizthato-bolt.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_arukereso_megbizthato_bolt() {

	$plugin = new Wc_Arukereso_Megbizthato_Bolt();
	$plugin->run();

}
run_wc_arukereso_megbizthato_bolt();

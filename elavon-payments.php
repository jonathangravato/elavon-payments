<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://tkorlando.com
 * @since             1.0.0
 * @package           Elavon_Payments
 *
 * @wordpress-plugin
 * Plugin Name:       Elavon Payments
 * Plugin URI:        https://github.com/tkorlando/converge-payments
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            TK Orlando
 * Author URI:        http://tkorlando.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       elavon-payments
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-elavon-payments-activator.php
 */
function activate_elavon_payments() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elavon-payments-activator.php';
	Elavon_Payments_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-elavon-payments-deactivator.php
 */
function deactivate_elavon_payments() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elavon-payments-deactivator.php';
	Elavon_Payments_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_elavon_payments' );
register_deactivation_hook( __FILE__, 'deactivate_elavon_payments' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-elavon-payments.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_elavon_payments() {

	$plugin = new Elavon_Payments();
	$plugin->run();

}
run_elavon_payments();

<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              <%= url %>
 * @since             <%= version %>
 * @package           <%= pluginName.fileCase %>
 *
 * @wordpress-plugin
 * Plugin Name:       <%= pluginName.titleCase %>
 * Plugin URI:        <%= url %>
 * Description:       <%= description %>
 * Version:           <%= version %>
 * Author:            <%= author.name %>
 * Author URI:        <%= author.uri %>
 * License:           <%= license.name %>
 * License URI:       <%= license.uri %>
 * Text Domain:       <%= pluginName.fileCase %>
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-<%= pluginName.fileCase %>-activator.php
 */
function activate_<%= pluginName.snakeCase %>() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-<%= pluginName.fileCase %>-activator.php';
	<%= pluginName.classCase %>_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-<%= pluginName.fileCase %>-deactivator.php
 */
function deactivate_<%= pluginName.snakeCase %>() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-<%= pluginName.fileCase %>-deactivator.php';
	<%= pluginName.classCase %>_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_<%= pluginName.snakeCase %>' );
register_deactivation_hook( __FILE__, 'deactivate_<%= pluginName.snakeCase %>' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-<%= pluginName.fileCase %>.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    <%= version %>
 */
function run_<%= pluginName.snakeCase %>() {

	$plugin = new <%= pluginName.classCase %>();
	$plugin->run();

}
run_<%= pluginName.snakeCase %>();

<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              {{- url}}
 * @since             {{- version}}
 * @package           {{- plugin_name}}
 *
 * @wordpress-plugin
 * Plugin Name:       {{- plugin_name}}
 * Plugin URI:        {{- plugin_uri}}
 * Description:       {{- description}}
 * Version:           {{- version}}
 * Author:            {{- author}}
 * Author URI:        {{- author_uri}}
 * License:           {{- license}}
 * License URI:       {{- license_uri}}
 * Text Domain:       {{- text_domain}}
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-{{- plugin_name_strict}}-activator.php
 */
function activate_{{- plugin_name}}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{{- plugin_name_strict}}-activator.php';
	{{- plugin_name_camelcase}}_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-{{- plugin_name_strict}}-deactivator.php
 */
function deactivate_{{- plugin_name}}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{{- plugin_name_strict}}-deactivator.php';
	{{- plugin_name_camelcase}}_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_{{- plugin_name_strict}}' );
register_deactivation_hook( __FILE__, 'deactivate_{{- plugin_name_strict}}' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-{{- plugin_name_strict}}.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    {{- version}}
 */
function run_{{- plugin_name_strict_lower}}() {

	$plugin = new {{- plugin_name_camelcase}}();
	$plugin->run();

}
run_{{- plugin_name_strict_lower}}();

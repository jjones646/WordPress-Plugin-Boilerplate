<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       {{- url}}
 * @since      {{- version}}
 *
 * @package    {{- plugin_name}}
 * @subpackage {{- plugin_name}}/{{- parent_parent_dir}}
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      {{- version}}
 * @package    {{- plugin_name}}
 * @subpackage {{- plugin_name}}/{{- parent_parent_dir}}
 * @author     {{- author}} <{{- author_uri}}>
 */
class {{- plugin_name_camelcase}}_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    {{- version}}
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'{{- plugin_name_strict}}',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       <%= url %>
 * @since      <%= version %>
 *
 * @package    <%= pluginName.fileCase %>
 * @subpackage <%= pluginName.fileCase %>/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      <%= version %>
 * @package    <%= pluginName.fileCase %>
 * @subpackage <%= pluginName.fileCase %>/includes
 * @author     <%= author.name %> <<%= author.uri %>>
 */
class <%= pluginName.classCase %>_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    <%= version %>
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'<%= pluginName.fileCase %>',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       {{- url}}
 * @since      {{- version}}
 *
 * @package    {{- plugin_name}}
 * @subpackage {{- plugin_name}}/{{- parent_parent_dir}}
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      {{- version}}
 * @package    {{- plugin_name}}
 * @subpackage {{- plugin_name}}/{{- parent_parent_dir}}
 * @author     {{- author}} <{{- author_uri}}>
 */
class {{- plugin_name_camelcase}}_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    {{- version}}
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    {{- version}}
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    {{- version}}
	 * @param    string    $plugin_name     The name of this plugin.
	 * @param    string    $version    		The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    {{- version}}
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {{- plugin_name_camelcase}}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {{- plugin_name_camelcase}}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/{{- plugin_name_strict}}-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    {{- version}}
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {{- plugin_name_camelcase}}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {{- plugin_name_camelcase}}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/{{- plugin_name_strict}}-admin.js', array( 'jquery' ), $this->version, false );

	}

}

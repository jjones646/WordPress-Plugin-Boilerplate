<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       <% url %>
 * @since      <% version %>
 *
 * @package    <% pluginName.fileCase %>
 * @subpackage <% pluginName.fileCase %>/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      <% version %>
 * @package    <% pluginName.fileCase %>
 * @subpackage <% pluginName.fileCase %>/includes
 * @author     <% author.name %> <<% author.uri %>>
 */
class <% pluginName.classCase %> {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    <% version %>
	 * @access   protected
	 * @var      <% pluginName.classCase %>_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    <% version %>
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    <% version %>
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    <% version %>
	 */
	public function __construct() {

		$this->plugin_name = '<% pluginName.fileCase %>';
		$this->version = '<% version %>';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - <% pluginName.classCase %>_Loader. Orchestrates the hooks of the plugin.
	 * - <% pluginName.classCase %>_i18n. Defines internationalization functionality.
	 * - <% pluginName.classCase %>_Admin. Defines all hooks for the admin area.
	 * - <% pluginName.classCase %>_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    <% version %>
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-<% pluginName.fileCase %>-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-<% pluginName.fileCase %>-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-<% pluginName.fileCase %>-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-<% pluginName.fileCase %>-public.php';

		$this->loader = new <% pluginName.classCase %>_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the <% pluginName.classCase %>_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    <% version %>
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new <% pluginName.classCase %>_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    <% version %>
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new <% pluginName.classCase %>_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    <% version %>
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new <% pluginName.classCase %>_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    <% version %>
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since    <% version %>
	 * @return   string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since    <% version %>
	 * @return   <% pluginName.classCase %>_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since    <% version %>
	 * @return   string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}

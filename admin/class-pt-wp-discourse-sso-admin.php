<?php
/**
 * PrimeTime WP Discourse SSO
 *
 * @package   WP_Discourse_SSO_Admin
 * @author    ET Cook <e@etc.io>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */

class WP_Discourse_SSO_Admin {

	/**
	 * Instance of this class.
	 *
	 * @since    0.1
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Slug of the plugin screen.
	 *
	 * @since    0.1
	 *
	 * @var      string
	 */
	protected $plugin_screen_hook_suffix = null;

	/**
	 * Initialize the plugin by loading admin scripts & styles and adding a
	 * settings page and menu.
	 *
	 * @since     0.1
	 */
	private function __construct() {

		$plugin = WP_Discourse_SSO::get_instance();
		$this->plugin_slug = $plugin->get_plugin_slug();

		require_once(PT_WP_DISCOURSE_SSO_DIR.'admin/includes/class.settings.php');

	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     0.1
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}
}

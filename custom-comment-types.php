<?php
/**
 * Plugin Name: Custom Comment Types
 * Plugin URI: https://github.com/aaroncampbell/custom-comment-types
 * Description: Official plugin for the Custom Comment Types featured project - https://core.trac.wordpress.org/ticket/35214
 * Version: 0.1.0
 * Author: Custom Comment Types Team
 * Author URI: https://core.trac.wordpress.org/ticket/35214
 * License: GPLv2 or later
 * Text Domain: custom-comment-types
 */

class Custom_Comment_Types {

	/**
	 * @access private
	 * @var Custom_Comment_Types - Static property to hold our singleton instance
	 */
	private static $instance = false;

	/**
	 * Function to instantiate our class and make it a singleton
	 */
	public static function get_instance() {

		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Private constructor to enforce the singleton. Use of Custom_Comment_Types::get_instance()
	 */
	protected function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		// Translations
		load_plugin_textdomain( 'custom-comment-types' );
	}
}

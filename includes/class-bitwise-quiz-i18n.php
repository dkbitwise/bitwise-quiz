<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://bitwiseacademy.com/
 * @since      1.0.0
 *
 * @package    Bitwise_Quiz
 * @subpackage Bitwise_Quiz/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bitwise_Quiz
 * @subpackage Bitwise_Quiz/includes
 * @author     Bitwise <info@bitwiseacademy.com>
 */
class Bitwise_Quiz_i18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'bitwise-quiz', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/' );
	}
}

<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bitwiseacademy.com/
 * @since             1.0.0
 * @package           Bitwise_Quiz
 *
 * @wordpress-plugin
 * Plugin Name:       Bitwise Quiz
 * Plugin URI:        https://bitwiseacademy.com/
 * Description:       It will communicate with the quiz server for fetching quiz and reports
 * Version:           1.0.0
 * Author:            Bitwise
 * Author URI:        https://bitwiseacademy.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bitwise-quiz
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BITWISE_QUIZ_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bitwise-quiz-activator.php
 */
function activate_bitwise_quiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-quiz-activator.php';
	Bitwise_Quiz_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bitwise-quiz-deactivator.php
 */
function deactivate_bitwise_quiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-quiz-deactivator.php';
	Bitwise_Quiz_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bitwise_quiz' );
register_deactivation_hook( __FILE__, 'deactivate_bitwise_quiz' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-quiz.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bitwise_quiz() {

	$plugin = new Bitwise_Quiz();
	$plugin->run();

}
run_bitwise_quiz();

<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://bitwiseacademy.com/
 * @since      1.0.0
 *
 * @package    Bitwise_Quiz
 * @subpackage Bitwise_Quiz/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Bitwise_Quiz
 * @subpackage Bitwise_Quiz/public
 * @author     Bitwise <info@bitwiseacademy.com>
 */
class Bitwise_Quiz_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of the plugin.
	 * @param string $version The version of this plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bitwise_Quiz_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bitwise_Quiz_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bitwise-quiz-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bitwise_Quiz_Loader as all of the hooks are defined in that particular class.
		 *
		 * The Bitwise_Quiz_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bitwise-quiz-public.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Shortcode display
	 */
	public function bitwise_quiz_loader_function() {
		$quiz_server_url = 'http://localhost/quizes';
		$quiz_server_url .= '/wp-json/wp/v2';
		$quiz_server_url .= '/sfwd-quiz?posts_per_page=5';

		$request_uri  = 'https://quiz.bitwise.academy/quizzes';
		$request_uri  .= '/geometric-sequences/';
		$request_args = array( 'access' => 'open', 'user' => 'bitwise', 'pass' => 'JKC7HwfFCZ4MCZNjdGteAn4vUu7TYonZ' );

		$query       = http_build_query( $request_args );
		$request_uri .= '?' . $query;

		require plugin_dir_path( __FILE__ ) . '/templates/bitwise-quiz-loader-template.php';
	}
}

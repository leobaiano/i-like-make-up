<?php
/**
 * Plugin Name: Ilmu
 * Plugin URI:
 * Description: Based project to create plugins for WordPress
 * Author: leobaiano
 * Author URI: http://leobaiano.com.br
 * Version: 1.0.0
 * License: GPLv2 or later
 * Text Domain: ilmu
	 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly.

/**
 * Ilmu
 *
 * @author   Leo Baiano <ljunior2005@gmail.com>
 */
class Ilmu {
	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Slug.
	 *
	 * @var string
	 */
	protected static $text_domain = 'ilmu';

	/**
	 * Initialize the plugin
	 */
	private function __construct() {
		// Load plugin text domain
		add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );

		// Load styles and script
		add_action( 'wp_enqueue_scripts', array( $this, 'load_styles_and_scripts' ) );

		// Load Helpers
		add_action( 'init', array( $this, 'load_helper' ) );

		// Include Files
		add_action( 'init', array( $this, 'include_files' ) );

		// Create CPT
		add_action( 'init', array( $this, 'create_cpts' ) );
	}

	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @return void
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( self::$text_domain, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Load styles and scripts
	 *
	 */
	public function load_styles_and_scripts(){
	}

	/**
	 * Load auxiliary and third classes are in the class directory
	 *
	 */
	public function load_helper() {
		$class_dir = plugin_dir_path( __FILE__ ) . "/helper/";
		foreach ( glob( $class_dir . "*.php" ) as $filename ){
			include $filename;
		}
	}

	public function create_cpts() {
		new LB_Post_Type_Ilmu( 'Gerenciador do tema', 'Gerenciador do tema', array( 'title' ), 'ilmu' );
		new LB_Post_Type_Ilmu( 'banner-principal', 'Banner Principal', array( 'title' ), 'ilmu' );
		new LB_Post_Type_Ilmu( 'banner-secundario', 'Banner Secundario', array( 'title' ), 'ilmu' );
		new LB_Post_Type_Ilmu( 'marcas-produtos', 'Marcas', array( 'title', 'thumbnail' ), 'ilmu' );

		new LB_Post_Type_Ilmu( 'produtos-promocao', 'Promoção', array( 'title', 'thumbnail' ), 'ilmu' );
		new LB_Post_Type_Ilmu( 'mais-vendidos', '+ Vendidos', array( 'title', 'thumbnail' ), 'ilmu' );
		new LB_Post_Type_Ilmu( 'produtos-tendencias', 'Tendências', array( 'title', 'thumbnail' ), 'ilmu' );
	}

	public function include_files() {
		return false;
	}
} // end class Baianada();
add_action( 'plugins_loaded', array( 'Ilmu', 'get_instance' ), 0 );

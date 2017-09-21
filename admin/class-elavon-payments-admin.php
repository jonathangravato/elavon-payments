<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://tkorlando.com
 * @since      1.0.0
 *
 * @package    Elavon_Payments
 * @subpackage Elavon_Payments/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Elavon_Payments
 * @subpackage Elavon_Payments/admin
 * @author     TK Orlando <jonathan@tkorlando.com>
 */
class Elavon_Payments_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elavon_Payments_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elavon_Payments_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/elavon-payments-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elavon_Payments_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elavon_Payments_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/elavon-payments-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     *
     */
    public function display_admin_page() {
		add_menu_page(
				'Elavon Payments', 			//$page_title
				'Elavon Payments', 			//$menu_title
				'manage_options', 			//$capability
				'elavon-payments', 			//$menu_slug
				array($this, 'show_page'), 	//$function
				'', 						//$icon_url
				'3.0' 						//$position number on menu from top
			);
	}

	public function evalon_payments_register_settings() {

    }

	public function show_page(){
		include plugins_url( 'elavon-payments/admin/partials/elavon-payments-admin-display.php' );
	}

}

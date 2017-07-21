<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://plus-kreativ.hu
 * @since      1.0.0
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/admin
 * @author     Dávid Richárd <r.david@plus-kreativ.hu>
 */
class Wc_Arukereso_Megbizthato_Bolt_Admin {

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
		 * defined in Wc_Arukereso_Megbizthato_Bolt_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Arukereso_Megbizthato_Bolt_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		if ( 'settings_page_wc-arukereso-megbizthato-bolt' == get_current_screen() -> id ) {
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wc-arukereso-megbizthato-bolt-admin.css', array(), $this->version, 'all' );
		}
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
		 * defined in Wc_Arukereso_Megbizthato_Bolt_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Arukereso_Megbizthato_Bolt_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wc-arukereso-megbizthato-bolt-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
 * Regisztrálunk egy admin menüt
 * @since    1.0.0
 */
 
public function add_plugin_admin_menu() {

    /*
     * Hozzáadunk egy beállítás oldalt a Beállítások menüpont alá.
     */
    add_options_page( 'Woocommerce Árukereső - Megbízható Bolt', 'Megbízható bolt', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
    );
}

 /**
 * Beállítások link hozzáadása a bővítmény oldalnál is.
 *
 * @since    1.0.0
 */
 
public function add_action_links( $links ) {
    /*
    *  Dokumentáció : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
    */
   $settings_link = array(
    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Beállítások', $this->plugin_name) . '</a>',
   );
   return array_merge(  $settings_link, $links );

}

/**
 * Beállítások oldal renderelése.
 *
 * @since    1.0.0
 */
 
public function display_plugin_setup_page() {
    include_once( 'partials/wc-arukereso-megbizthato-bolt-admin-display.php' );
}

public function options_update() {
    register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
 }
 
public function validate($input) {
    $valid = array();

    //Webapi
    $valid['webapi'] = sanitize_text_field($input['webapi']);
    
    return $valid;
 }

}


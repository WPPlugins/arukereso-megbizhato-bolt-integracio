<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://plus-kreativ.hu
 * @since      1.0.0
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/public
 * @author     Dávid Richárd <r.david@plus-kreativ.hu>
 */
class Wc_Arukereso_Megbizthato_Bolt_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->wc_webapi_options = get_option($this->plugin_name);
	}
	
	public function wc_webapi(){
        if(!empty($this->wc_webapi_options['webapi'])){

			if(!empty($this->wc_webapi_options['webapi'])){
				$webapikulcs = $this->wc_webapi_options['webapi'];
			}else{
				$webapikulcs = '0';
			}
			
		}
		
		update_option( 'arukereso_webapi_kulcs', $webapikulcs, '', 'yes' );
    }
	
	public function arukereso_webapi() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/megbizhato-bolt.php';
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
		 * defined in Wc_Arukereso_Megbizthato_Bolt_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Arukereso_Megbizthato_Bolt_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	//	wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wc-arukereso-megbizthato-bolt-public.css', array(), $this->version, 'all' );

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
		 * defined in Wc_Arukereso_Megbizthato_Bolt_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Arukereso_Megbizthato_Bolt_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wc-arukereso-megbizthato-bolt-public.js', array( 'jquery' ), $this->version, false );

	}
	
	

}

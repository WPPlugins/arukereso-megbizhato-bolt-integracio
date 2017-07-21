<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://plus-kreativ.hu
 * @since      1.0.0
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/includes
 * @author     Dávid Richárd <r.david@plus-kreativ.hu>
 */
class Wc_Arukereso_Megbizthato_Bolt_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-arukereso-megbizthato-bolt',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

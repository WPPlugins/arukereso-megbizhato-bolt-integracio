<?php

/**
 * Fired during plugin activation
 *
 * @link       http://plus-kreativ.hu
 * @since      1.0.0
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/includes
 * @author     Dávid Richárd <r.david@plus-kreativ.hu>
 */
class Wc_Arukereso_Megbizthato_Bolt_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option( 'arukereso_webapi_kulcs', '0', '', 'yes' );
	}

}

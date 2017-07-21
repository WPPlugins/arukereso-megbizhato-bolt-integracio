<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://plus-kreativ.hu
 * @since      1.0.0
 *
 * @package    Wc_Arukereso_Megbizthato_Bolt
 * @subpackage Wc_Arukereso_Megbizthato_Bolt/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2 class="plugincim"><?php echo esc_html(get_admin_page_title()); ?></h2>
    
    <form method="post" name="megbizhato_bolt" action="options.php">
	<?php
        //Beállítások begyűjtése
        $options = get_option($this->plugin_name);
        $webapi = $options['webapi'];
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>
        <fieldset>
            <legend class="screen-reader-text"><span>WebApi kulcs megadása</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-webapi">
                <input type="text" id="<?php echo $this->plugin_name; ?>-webapi" name="<?php echo $this->plugin_name; ?>[webapi]" value="<?php if(!empty($webapi)) echo $webapi; ?>"/>
                <span class="webapispan"><?php esc_attr_e('WebApi kulcs megadása', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <div id="apikuldo">
			<?php submit_button('Mentés', 'primary','submit', TRUE); ?>
		</div>

    </form>

</div>
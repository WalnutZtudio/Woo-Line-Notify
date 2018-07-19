<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://walnutztudio.com
 * @since      1.0.0
 *
 * @package    Wz_line_notify
 * @subpackage Wz_line_notify/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wz_line_notify
 * @subpackage Wz_line_notify/includes
 * @author     WalnutZtudio <walnutztudio@gmail.com>
 */
class Wz_line_notify_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wz_line_notify',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

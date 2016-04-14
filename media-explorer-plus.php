<?php
/**
 * Plugin Name: Media Explorer Plus
 * Depends: Media Explorer
 * Plugin URI: https://github.com/gedex/mexp-flickr
 * Description: Flickr extension for the Media Explorer.
 * Version: 0.1.1
 * Author: Akeda Bagus and Barrett Golding
 * Author URI: http://gedex.web.id/
 * Text Domain: mexpplus
 * Domain Path: /languages
 * License: GPL v2 or later
 * Requires at least: 3.6
 * Tested up to: 4.5
 * Plugin prefix: mexpplus
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */


/* ------------------------------------------------------------------------ *
 * Plugin init and uninstall
 * ------------------------------------------------------------------------ */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( defined( 'MEXPPLUS_VERSION' ) ) {
    return;
}

define( 'MEXPPLUS_VERSION', '0.1.2' );

/* ------------------------------------------------------------------------ *
 * Required Plugin Files
 * ------------------------------------------------------------------------ */
include_once( dirname( __FILE__ ) . '/includes/admin-options.php' );

/**
 * Class that acts as plugin bootstrapper.
 *
 * @author Akeda Bagus <admin@gedex.web.id>
 */
class MEXP_Flickr {

	/**
	 * Plugin version.
	 */
	const VERSION = '0.1.0';

	/**
	 * Constructor.
	 *
	 * - Defines constants used in this plugin.
	 * - Autoloader registration.
	 * - Loads the translation used in this plugin.
	 * - Loads Flickr service.
	 *
	 * @since 0.1.0
	 * @access public
	 * @return void
	 */
	public function __construct() {

		$this->define_constants();

		// Autloader registration.
		spl_autoload_register( array( $this, 'loader' ) );

		$this->i18n();

		// Loads the Flickr service.
		add_filter( 'mexp_services', array( $this, 'load_flickr_service' ) );
	}

	/**
	 * Autoloader for this plugin. The convention for a class to be loaded:
	 *
	 * - Prefixed with this class name and '_'
	 * - Filename in lowercase without the prefix separated by '-'.
	 *
	 * @since 0.1.2
	 * @access public
	 * @param string $classname Class name
	 * @return void
	 */
	public function loader( $classname ) {
		if ( false === strpos( $classname, __CLASS__ . '_' ) )
			return;

		$classname = str_replace( __CLASS__ . '_', '', $classname );
		$filename  = str_replace( '_', '-', strtolower( $classname ) );

		require_once MEXP_FLICKR_SERVICES_DIR . $filename . '.php';
	}

	/**
	 * Define constants used by the plugin.
	 *
	 * @since 0.1.0
	 * @access public
	 * @return void
	 */
	public function define_constants() {
		define( 'MEXP_FLICKR_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		define( 'MEXP_FLICKR_SERVICES_DIR', MEXP_FLICKR_DIR . trailingslashit( 'services/flickr' ) );

		define( 'MEXP_FLICKR_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
	}

	/**
	 * Loads the translation files.
	 *
	 * @since 0.1.0
	 * @access public
	 * @return void
	 */
	public function i18n() {
		load_plugin_textdomain( 'mexp-flickr', false, 'media-explorer-plus/languages' );
	}

	/**
	 * Loads Flickr service.
	 *
	 * @since 0.1.0
	 * @access public
	 * @filter mexp_services
	 * @param @param array $services Associative array of Media Explorer services to load; key is a string, value is a MEXP_Template object.
	 * @return array $services Associative array of Media Explorer services to load; key is a string, value is a MEXP_Template object.
	 */
	public function load_flickr_service( array $services ) {
		$services[ MEXP_Flickr_Service::NAME ] = new MEXP_Flickr_Service;
		return $services;
	}
}

add_action( 'plugins_loaded', function() {
	$GLOBALS['mexp_flickr'] = new MEXP_Flickr();
} );




/**
 *
 *
 * @since   0.1.0
 */
function mexpplus_flickr_data( $return, $data, $url ) {
    if ( is_object( $data ) && property_exists( $data, 'provider_name' ) && 'Flickr' === $data->provider_name && strpos( $url, '@N' ) ) {
    	// MEXP embed URL: http://www.flickr.com/photos/32323502@N00/11793785093
    	// vs pasted Flickr URL: http://www.flickr.com/photos/{username}}/11793785093
    	$return = $data->html;
    	$return = "<figure class=\"mexp-flickr\">{$return}";
    	$return .= "<figcaption class=\"wp-caption-text mexp-flickr-caption\">";
    	$return .= "{$data->title} (<a href=\"{$data->license_url}\">cc</a>: <a href=\"{$data->author_url}\">{$data->author_name}</a>)";
    	$return .= "</figcaption></figure>";
    }

    return $return;
}
add_filter( 'oembed_dataparse', 'mexpplus_flickr_data', 10, 3 );


/* ------------------------------------------------------------------------ *
 * Add services
 * ------------------------------------------------------------------------ */

/**
 * Twitter
 *
 * @since   0.1.0
 */
function mexpplus_twitter_credentials_callback() {

	// Get your developer keys and tokens at: https://apps.twitter.com/
	// Add your keys and tokens here.
	return array(
		'consumer_key'       => 'ZVMfDAPCJ5IT4hMSdNEiDMklg',
		'consumer_secret'    => '2snhuTBL7NtZOhvpBmNGySX4kdfglO8gqQYseIbQ90ZT1VUPdU',
		'oauth_token'        => '22964713-zFYwtymRaHUPeCto7MqVauH7IAC3CsPXGsn2pZGGT',
		'oauth_token_secret' => 'ur41T9UCBnLdDU7LuPTmU1ALwXcPPD2dxytt2gcSx2lqf'
	);

}
add_filter( 'mexp_twitter_credentials', 'mexpplus_twitter_credentials_callback' );

/**
 * YouTube
 *
 * @since   0.1.0
 */
function mexpplus_youtube_developer_key_callback() {

	// Add your developer key here.
	// Get your developer key at: <https://code.google.com/apis/console>
	return 'AIzaSyAboJIw70PHz5Nju3XwITQLavY7NPCXhn0';

}
add_filter( 'mexp_youtube_developer_key', 'mexpplus_youtube_developer_key_callback' );

/**
 * Remove Instagram (for now)
 *
 * @since   0.1.0
 */
function mexp_service_instagram_not( array $services ) {
	$services['instagram'] = null;

	return $services;
}
add_filter( 'mexp_services', 'mexp_service_instagram_not', 20 );

/*
add_filter( 'mexp_instagram_credentials', 'mexpplus_instagram_credentials_callback' );

function mexpplus_instagram_credentials_callback( $credentials ) {

	// Add your developer key here.
	// Get your developer key at: <https://instagram.com/developer>
	return array(
		'access_token' => 'da78a1918b934ab5bf8f47c774f0a9a6',
	);

}
*/


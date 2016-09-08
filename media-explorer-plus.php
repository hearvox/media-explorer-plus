<?php
/**
 * Plugin Name: Media Explorer Plus
 * Depends: Media Explorer
 * Plugin URI: http://hearingvoices.com/tools/mexp-plus/
 * Description: Flickr extension for the Media Explorer.
 * Version: 0.1.4
 * Author:  Barrett Golding
 * Author URI: http://hearingvoices.com/
 * Text Domain: mexpplus
 * Domain Path: /languages
 * License: GPL v2 or later
 * Requires at least: 3.6
 * Tested up to: 4.5
 * Plugin prefix: mexpplus
 *
 * Uses code from MEXP Flickr by Akeda Bagus <http://gedex.web.id/>:
 * https://github.com/gedex/mexp-flickr
 * https://wordpress.org/plugins/mexp-flickr/
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

define( 'MEXPPLUS_VERSION', '0.1.4' );

/* ------------------------------------------------------------------------ *
 * Required Plugin Files
 *
 * ------------------------------------------------------------------------ */
include_once( dirname( __FILE__ ) . '/includes/admin-options.php' );

/**
 * Load the TGM_Plugin_Activation class.
 *
 * Requires Media Explorer plugin (and handles download from GitHub).
 *
 */
require_once dirname( __FILE__ ) . '/includes/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'mexpplus_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function mexpplus_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		array(
			'name'      => 'Media Explorer',
			'slug'      => 'media-explorer',
			'source'    => 'https://github.com/Automattic/media-explorer/archive/master.zip',
			'required'  => true, // Triggers notices for 'required' plugin (vs. 'recommended').
			'version'   => '1.2', // Minumum version for active plugin, else user gets update notice.
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'mexpplus',              // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',           // Parent menu slug.
		'capability'   => 'manage_options',        // Capability needed to view plugin install page (associated with the parent menu).
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'mexpplus' ),
			'menu_title'                      => __( 'Install Plugins', 'mexpplus' ),
			/* translators: %s: plugin name. */
			'installing'                      => __( 'Installing Plugin: %s', 'mexpplus' ),
			/* translators: %s: plugin name. */
			'updating'                        => __( 'Updating Plugin: %s', 'mexpplus' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'mexpplus' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). */
				'This Media Explorer Plus plugin requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'mexpplus'
			),


		/*
            // Unused TGMPA settings:

			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'mexpplus'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'mexpplus'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'mexpplus'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'mexpplus'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'mexpplus'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'mexpplus'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'mexpplus'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'mexpplus'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'mexpplus' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'mexpplus' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'mexpplus' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'mexpplus' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'mexpplus' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'mexpplus' ),
			'dismiss'                         => __( 'Dismiss this notice', 'mexpplus' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'mexpplus' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'mexpplus' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.

		*/

		),
	);

	tgmpa( $plugins, $config );
}


/**
 * Class that acts as plugin bootstrapper.
 *
 * From:
 * @author Akeda Bagus <admin@gedex.web.id>
 * @link https://github.com/gedex/mexp-flickr
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

		// Autoloader registration.
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

		require_once MEXPPLUS_FLICKR_SERVICES_DIR . $filename . '.php';
	}

	/**
	 * Define constants used by the plugin.
	 *
	 * @since 0.1.0
	 * @access public
	 * @return void
	 */
	public function define_constants() {
		define( 'MEXPPLUS_FLICKR_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		define( 'MEXPPLUS_FLICKR_SERVICES_DIR', MEXPPLUS_FLICKR_DIR . trailingslashit( 'services/flickr' ) );

		define( 'MEXPPLUS_FLICKR_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
	}

	/**
	 * Loads the translation files.
	 *
	 * @since 0.1.0
	 * @access public
	 * @return void
	 */
	public function i18n() {
		load_plugin_textdomain( 'mexpplus', false, 'media-explorer-plus/languages' );
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
	$GLOBALS['mexpplus_flickr'] = new MEXP_Flickr();
} );




/**
 * Adds HTML to the default embed.
 *
 * Seems (???) to add mouseover text:  title, author, share icons.
 *
 * @since   0.1.0
 */
function mexpplus_flickr_data( $return, $data, $url ) {
    if ( is_object( $data ) && property_exists( $data, 'provider_name' ) && 'Flickr' === $data->provider_name && strpos( $url, '@N' ) ) {

    	$return = $data->html;

/*
        // You can auto-add HTML with data to the embed, e.g.:
    	$return = "<figure class=\"mexp-flickr\">{$return}";
    	$return .= "<figcaption class=\"wp-caption-text mexp-flickr-caption\">";
    	$return .= "{$data->title} (<a href=\"{$data->license_url}\">cc</a>: <a href=\"{$data->author_url}\">{$data->author_name}</a>)";
    	$return .= "</figcaption></figure>";
*/

        // MEXP embed URL: http://www.flickr.com/photos/32323502@N00/11793785093
        // vs pasted Flickr URL: http://www.flickr.com/photos/{username}}/11793785093
    }

    return $return;

    // oembed_result
}
add_filter( 'oembed_dataparse', 'mexpplus_flickr_data', 10, 3 );


/* ------------------------------------------------------------------------ *
 * Keys for default services included in Media Explorer plugin.
 * ------------------------------------------------------------------------ */
/*

Array returned by get_option( 'mexpplus' ):

array(3) {
  ["credentials"]=>
  array(6) {
    ["flickr_key"]=>
    string(32) "47a58e28dfdf95e41be62410eb8bcf03"
    ["twitter_key"]=>
    string(25) "ZVMfDAPCJ5IT4hMSdNEiDMklg"
    ["twitter_key_secret"]=>
    string(50) "2snhuTBL7NtZOhvpBmNGySX4kdfglO8gqQYseIbQ90ZT1VUPdU"
    ["twitter_access_token"]=>
    string(50) "22964713-zFYwtymRaHUPeCto7MqVauH7IAC3CsPXGsn2pZGGT"
    ["twitter_access_token_secret"]=>
    string(45) "ur41T9UCBnLdDU7LuPTmU1ALwXcPPD2dxytt2gcSx2lqf"
    ["youtube_api_key"]=>
    string(39) "AIzaSyAboJIw70PHz5Nju3XwITQLavY7NPCXhn0"
  }
  ["licenses"]=>
  array(1) {
    ["flickr_licences"]=>
    array(9) {
      [0]=>
      string(1) "0"
      [1]=>
      string(1) "1"
      [2]=>
      string(1) "2"
      [3]=>
      string(1) "3"
      [4]=>
      string(1) "4"
      [5]=>
      string(1) "5"
      [6]=>
      string(1) "6"
      [7]=>
      string(1) "7"
      [8]=>
      string(1) "8"
    }
  }
  ["version"]=>
  string(5) "0.1.4"
}

/* ------------------------------------------------------------------------ *
 * Add connections to API services.
 * ------------------------------------------------------------------------ */

/* ------------------------------------------------------------------------ *
 * Services added by (required) Media Explorer plugin .
 * ------------------------------------------------------------------------ */
/**
 * Twitter
 *
 * Get developer keys and tokens at: <https://apps.twitter.com/>
 * Enter value on Settings page for MEXP Plus.
 *
 * Filter priority (20) set to run after same filter in Media Explorer plugin.
 *
 * @uses mexpplus_get_options()
 * @since   0.1.0
 */
function mexpplus_twitter_credentials_callback() {
	$options = mexpplus_get_options();

	return array(
		'consumer_key'       => $options['credentials']['twitter_key'],
		'consumer_secret'    => $options['credentials']['twitter_key_secret'],
		'oauth_token'        => $options['credentials']['twitter_access_token'],
		'oauth_token_secret' => $options['credentials']['twitter_access_token_secret'],
	);
}
add_filter( 'mexp_twitter_credentials', 'mexpplus_twitter_credentials_callback', 20 );

/**
 * YouTube
 * Get developer key at: https://code.google.com/apis/console
 * Enter value on Settings page for MEXP Plus.
 *
 * Filter priority (20) set to run after same filter in Media Explorer plugin.
 *
 * @uses mexpplus_get_options()
 * @since   0.1.0
 */
function mexpplus_youtube_developer_key_callback() {
	$options = mexpplus_get_options();

	return $options['credentials']['youtube_api_key'];
}
add_filter( 'mexp_youtube_developer_key', 'mexpplus_youtube_developer_key_callback', 20 );

/**
 * Remove Instagram (for now)
 *
 * @since   0.1.0
 */
function mexpplus_service_instagram_not( array $services ) {
	$services['instagram'] = null;

	return $services;
}
add_filter( 'mexp_services', 'mexpplus_service_instagram_not', 20 );

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

/* ------------------------------------------------------------------------ *
 * Services added by this plugin .
 * ------------------------------------------------------------------------ */

/**
 * Flickr
 *
 * Get your API key at: <https://www.flickr.com/services/apps/create/>
 * Enter value on Settings page for MEXP Plus.
 *
 * @uses mexpplus_get_options()
 * @since   0.1.0
 */
function mexpplus_flickr_api_key_callback() {
	$options = mexpplus_get_options();

	return $options['credentials']['flickr_key'];
}
add_filter( 'mexpplus_flickr_api_key', 'mexpplus_flickr_api_key_callback' );




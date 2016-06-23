<?php

/**
 * Admin Settings Page (Dashboard> Settings> Postscript)
 *
 * @link    http://hearingvoices.com/tools/
 * @since   0.1.0
 *
 * @package    Media_Explorer_Plus
 * @subpackage Media_Explorer_Plus/includes
 */

/* ------------------------------------------------------------------------ *
 * Wordpress Settings API
 * ------------------------------------------------------------------------ */

/**
 * Adds submenu item to Settings dashboard menu.
 *
 * Sets Settings page screen ID: 'settings_page_postscript'.
 */
function mexpplus_settings_menu() {
    $mexpplus_options_page = add_options_page(
        __('Media Explorer Plus', 'mexpplus' ),
        __( 'MEXP Plus', 'mexpplus' ),
        'manage_options',
        'mexpplus',
        'mexpplus_settings_display'
    );

    // Adds contextual Help tab on Settings page.
    // add_action( "load-$mexpplus_options_page", 'mexpplus_help_tab');
}
add_action('admin_menu', 'mexpplus_settings_menu');

/**
 * Adds tabs, sidebar, and content to contextual Help tab on Settings page.
 *
 * Sets Settings page screen ID: 'settings_page_postscript'.
 */
function mexpplus_help_tab() {
    $current_screen = get_current_screen();

    // Default tab.
    $current_screen->add_help_tab(
        array(
            'id'        => 'settings',
            'title'     => __( 'Settings', 'mexpplus' ),
            'content'   =>
                '<p><strong>' . __( 'Media Explorer Plus', 'mexpplus' ) . '</strong></p>' .
                '<p>' . __( 'Enter your YouTube, Twitter, and Flickr API keys.', 'mexpplus' ) . '</p>',
        )
    );

    // Second tab.
    if ( current_user_can( 'manage_options' ) ) {
        $current_screen->add_help_tab(
            array(
                'id'        => 'tech',
                'title'     => __( 'Tech Notes', 'mexpplus' ),
                'content'   =>
                    '<ul>' .
                        '<li>' . __( 'Handles are stored in custom taxonomies.', 'mexpplus' ) . '</li>' .
                        '<li>' . __( 'Only registered handles can be added as taxonomy terms.', 'mexpplus' ) . '</li>' .
                        '<li>' . __( 'Post-counts for terms track which posts enqueue which handles.', 'mexpplus' ) . '</li>' .
                        '<li>' . __( 'Post-counts for terms track which posts enqueue which handles.', 'mexpplus' ) . '</li>' .
                        '<li>' . __( 'The <a href="#metabox">example</a> below shows how your settings effect the Edit Post screen\'s meta box.', 'mexpplus' ) . '</li>' .
                    '</ul>',
            )
        );
    }

    // Sidebar.
    $current_screen->set_help_sidebar(
        '<p><strong>' . __( 'Reference:', 'mexpplus' ) . '</strong></p>' .
        '<p><a href="https://codex.wordpress.org/Function_Reference/wp_register_script">'     . __( 'Register scripts',     'postscript' ) . '</a></p>' .
        '<p><a href="https://developer.wordpress.org/reference/functions/wp_enqueue_script/#defaults" target="_blank">' . __( 'Default scripts', 'mexpplus' ) . '</a></p>' .
        '<p><a href="http://hearingvoices.com/tools/postscript/">' . __( 'Postscript plugin', 'jetpack' ) . '</a></p>'
    );
}

/**
 * Renders settings menu page.
 */
function mexpplus_settings_display() {
    ?>
    <div class="wrap">
        <h2>Media Explorer Plus (v <?php echo MEXPPLUS_VERSION; ?>) <?php _e('Settings', 'mexpplus' ); ?></h2>
        <!-- Create the form that will be used to render our options. -->
        <form method="post" action="options.php">
            <?php settings_fields( 'mexpplus' ); ?>
            <?php do_settings_sections( 'mexpplus' ); ?>
            <?php submit_button(); ?>
            <p class="wp-ui-text-icon"><?php _e( 'This plugin created as part of a <a href="https://www.rjionline.org/stories/series/storytelling-tools/">Reynold Journalism Institute</a> fellowship.', 'mexpplus' ); ?></p>
        </form>
    </div><!-- .wrap -->
    <?php
}

/* ------------------------------------------------------------------------ *
 * Setting Registrations
 * ------------------------------------------------------------------------ */

/**
 * Creates settings fields via WordPress Settings API.
 */
function mexpplus_options_init() {

    // Array to pass to $callback functions as add_settings_field() $args (last param).
    $options = mexpplus_get_options(); // Option: 'mexpplus'.

    add_settings_section(
        'mexpplus_api_section',
        __( 'Enter API keys and tokens', 'mexpplus' ),
        'mexpplus_api_section_callback',
        'mexpplus'
    );

    add_settings_section(
        'mexpplus_licenses_section',
        __( 'Creative Commons licenses', 'mexpplus' ),
        'mexpplus_licenses_section_callback',
        'mexpplus'
    );
/*
    add_settings_section(
        'mexpplus_template_section',
        __( 'Flickr embed template', 'mexpplus' ),
        'mexpplus_template_section_callback',
        'mexpplus'
    );

    add_settings_field(
        'mexpplus_licenses',
        __( '<em>Flickr</em> Key', 'mexpplus' ),
        'mexpplus_licenses_callback',
        'mexpplus',
        'mexpplus_licenses_section',
        $args = $options
    );
*/
    register_setting(
        'mexpplus',
        'mexpplus'
    );

}
add_action('admin_init', 'mexpplus_options_init');

/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */

/*
Placeholders to add to array (localize):
Enter your Flickr Key from Flickr App Garden here.
Enter your Twitter Key from Twitter Apps here.
Enter your Twitter Key Secret here.
Enter your Twitter Access Token here.
Enter your Twitter Access Token Secret here.
Enter your YouTube API Key from Google APIs here.
*/

/**
 * Outputs text for the top of the Settings screen.
 */
function mexpplus_api_section_callback() {
    $options = mexpplus_get_options(); // Option: 'mexpplus'.

    // API service name and credential type ($services and $options keys must match)
    $services = array(
        'flickr_key'                  => array( 'Flickr', 'Key' ),
        'twitter_key'                 => array( 'Twitter', 'Key' ),
        'twitter_key_secret'          => array( 'Twitter', 'Key Secret' ),
        'twitter_access_token'        => array( 'Twitter', 'Access Token' ),
        'twitter_access_token_secret' => array( 'Twitter', 'Access Token Secret' ),
        'youtube_api_key'             => array( 'YouTube', 'API Key' ),
    );
    ?>
    <fieldset>
        <legend><?php _e( 'Get your API keys at: ', 'mexpplus' ); ?> <a href="https://www.flickr.com/services/apps/create/">Flickr</a> | <a href="https://apps.twitter.com/">Twitter</a> | <a href="https://code.google.com/apis/console">YouTube</a></legend>
        <ul class="inside">
        <?php
        foreach ( $options['credentials'] as $cred => $value ) {
        ?>
            <li><label><span style="text-align: right; padding-right: 20px; display: block; width: 200px; float: left;"><em><?php echo esc_html( $services[$cred][0] ); ?></em> <?php echo esc_html( $services[$cred][1] ); ?></span> <input type="text" id="<?php echo esc_attr( $cred ); ?>" value="<?php echo esc_attr( $value ); ?>" name="mexpplus[credentials][<?php echo esc_attr( $cred ); ?>]" id="<?php echo esc_attr( $cred ); ?>" class="regular-text code" style="display: block; width: 400px;"/></label></li>
        <?php
        }
        ?>
        </ul>
    </fieldset>
    <?php
}

/**
 * Outputs text for the top of the Add Scripts/Styles section.
 *
 * @link https://www.flickr.com/creativecommons/
 * @link https://www.flickr.com/services/api/flickr.photos.licenses.getInfo.html
 */
function mexpplus_licenses_section_callback() {
    $options = mexpplus_get_options(); // Option: 'mexpplus'.

    // Flikcr licenses: Creative Communs, USA.gov, and Flickr Commons.
    $flickr_cc_licences = array(
        array(
            'cc'   => '',
            'id'   => '0',
            'name' => 'All Rights Reserved',
            'url'  => '',
        ),
        array(
            'cc'   => 'CC BY-NC-SA 2.0',
            'id'   => '1',
            'name' => 'Attribution-NonCommercial-ShareAlike 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by-nc-sa/2.0/',
        ),
        array(
            'cc'   => 'CC BY-NC 2.0',
            'id'   => '2',
            'name' => 'Attribution-NonCommercial 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by-nc/2.0/',
        ),
        array(
            'cc'   => 'CC BY-NC-ND 2.0',
            'id'   => '3',
            'name' => 'Attribution-NonCommercial-NoDerivs 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by-nc-nd/2.0/',
        ),
        array(
            'cc'   => 'CC BY 2.0',
            'id'   => '4',
            'name' => 'Attribution 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by/2.0/',
        ),
        array(
            'cc'   => 'CC BY-SA 2.0',
            'id'   => '5',
            'name' => 'Attribution-ShareAlike 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by-sa/2.0/',
        ),
        array(
            'cc'   => 'CC BY-ND 2.0',
            'id'   => '6',
            'name' => 'Attribution-NoDerivs 2.0 Generic',
            'url'  => 'http://creativecommons.org/licenses/by-nd/2.0/',
        ),
        array(
            'cc'   => '',
            'id'   => '7',
            'name' => 'Flickr Commons',
            'url'  => 'http://flickr.com/commons/usage/',
        ),
        array(
            'cc' => '',
            'id'   => '8',
            'name' => 'United States Government Work',
            'url' => 'http://www.usa.gov/copyright.shtml',
        ),
    );
    ?>
    <fieldset>
        <legend><?php _e( 'Check the licenses you wish to browse:', 'mexpplus' ); ?></legend>
        <ul class="inside">
        <?php
        //
        foreach ( $flickr_cc_licences as $licence ) {
            $cc = ( empty( $licence['cc'] ) ) ? '' : " ({$licence['cc']})";
            $checked = ( $licence['id'] === '0' ) ? '' : ' checked';
        ?>
            <li><label><input type="checkbox" id="license-<?php echo esc_attr( $licence['id'] ); ?>" value="<?php echo esc_attr( $licence['id'] ); ?>" name="mexpplus[licenses][flickr_licences][]"<?php echo $checked; ?> /> <a href="<?php echo esc_url( $licence['url'] ); ?>"><?php echo esc_html( $licence['name'] ); ?></a><?php echo esc_html( $cc ); ?></label></li>
        <?php
        }
        ?>
        </ul>
    </fieldset>
    <?php
}

/**
 * Outputs text for the top of the Remove Scripts/Styles section.
 */
function mexpplus_template_section_callback() {
    $options = mexpplus_get_options(); // Option: 'mexpplus'.
    ?>
    <fieldset>
        <legend><?php _e( 'Enter HTML for before and sfter the Flickr embed:', 'mexpplus' ); ?></legend>
        <p>
            Before the image:<br />
            <textarea id="mexp-flickr-before" class="code" name="mexpplus[templates][flickr_before]" cols="80" rows="2"><?php echo esc_html( $options['templates']['flickr_before'] ); ?></textarea>
        </p>
        <p>
            After the image:<br />
            <textarea id="mexp-flickr-after" class="code" name="mexpplus[templates][flickr_before]" cols="80" rows="2"><?php echo esc_html( $options['templates']['flickr_after'] ); ?></textarea>
        </p>
        <div class="description">
            <?php esc_attr_e( 'You can use these image data tags in your HTML:', 'mexpplus' ); ?><br />
            <code>%%title%%</code> | <code>%%author_url%%</code> | <code>%%author_name%%</code> | <code>%%license_url%%</code> | <code>%%license_type%%</code>
        </div>
    </fieldset>
    <?php



/*
    Add to mexpplus_api_section_callback():
    // @todo: combine with mexpplus_flickr_data().
    $flickr_before = '<figure class="mexp-flickr">';
    $flickr_after  = '<figcaption class="mexp-flickr-caption">';
    $flickr_after .= '%%title%% (<a href="%%license_url%%">cc</a>: <a href="%%author_url%%">%%author_name%%</a>)';
    $flickr_after .= '</figcaption></figure>';

    Add to mexpplus_upgrade_options():
     $defaults = ...
        'templates' => array(
            'flickr_before' =>  htmlentities( $flickr_before ),
            'flickr_after'  =>  htmlentities( $flickr_after ),
        ),

*/

}

/* ------------------------------------------------------------------------ *
 * Field Callbacks (Get/Set Admin Option Array)
 * ------------------------------------------------------------------------ */
/**
 * mexpplus_get_options() returns:
 * Array
 * (
 *     [credentials] => Array
 *         (
 *             [flickr_key]                  => {Key}
 *             [twitter_key]                 => {Consumer_Key}
 *             [twitter_key_secret]          => {Consumer_Secret}
 *             [twitter_access_token]        => {Access_Token}
 *             [twitter_access_token_secret] => {Access_Token_Secret}
 *             [youtube] => {API_Key}
 *         )
 *
 *     [licenses] => Array
 *         (
 *             [flickr_licences] => Array
 *                 (
 *                     [0] => 0
 *                     [1] => 1
 *                     [2] => 2
 *                     [3] => 3
 *                     [4] => 4
 *                     [5] => 5
 *                     [6] => 6
 *                     [7] => 7
 *                     [8] => 8
 *                 )
 *         )
 *
 *     [version] => MEXPPLUS_VERSION
 * )
 */

/* ------------------------------------------------------------------------ *
 * Functions to get/set options array.
 * ------------------------------------------------------------------------ */

/**
 * Retrieves an option, and array of plugin settings, from database.
 *
 * Option functions based on Jetpack Stats:
 * @link https://github.com/Automattic/jetpack/blob/master/modules/stats.php
 *
 * @since   0.1.0
 *
 * @uses    mexpplus_upgrade_options()
 * @return  array   $options    Array of plugin settings
 */
function mexpplus_get_options() {
    $options = get_option( 'mexpplus' );

    /* Set version if not the latest. */
    if ( ! isset( $options['version'] ) || $options['version'] < MEXPPLUS_VERSION ) {
        $options = mexpplus_upgrade_options( $options );
    }

    return $options;
}

/**
 * Sets an option in database (an array of plugin settings).
 *
 * Note: update_option() adds option if it doesn't exist.
 *
 * @since   0.1.0
 *
 * @param   array   $option     Array of plugin settings
 */
function mexpplus_set_options( $options ) {
    update_option( 'mexpplus', $options );
}

/**
 * Makes array of plugin settings, merging default and new values.
 *
 * @since   0.1.0
 *
 * @uses    mexpplus_set_options()
 * @param   array   $options        Array of plugin settings
 * @return  array   $new_options    Merged array of plugin settings
 */
function mexpplus_upgrade_options( $options ) {
    $defaults = array(
        'credentials'      => array(
            'flickr_key' => '',
            'twitter_key' => '',
            'twitter_key_secret' => '',
            'twitter_access_token' => '',
            'twitter_access_token_secret' => '',
            'youtube_api_key' => '',
        ),
        'licenses' => array(
            'flickr_licenses' =>  '0,1,2,3,4,5,6,7,8',
        ),
    );

    if ( is_array( $options ) && ! empty( $options ) ) {
        $new_options = array_merge( $defaults, $options );
    } else {
        $new_options = $defaults;
    }

    $new_options['version'] = MEXPPLUS_VERSION;

    mexpplus_set_options( $new_options );

    return $new_options;
}

/* ------------------------------------------------------------------------ *
 * Functions to get/set a specific options array item.
 * ------------------------------------------------------------------------ */

/**
 * Retrieves a specific setting (an array item) from an option (an array).
 *
 * @since   0.1.0
 *
 * @uses    mexpplus_get_options()
 * @param   array|string    $option     Array item key
 * @return  array           $option_key Array item value
 */
function mexpplus_get_option( $option_key = NULL ) {
    $options = mexpplus_get_options();

    // Returns valid inner array key ($options[$option_key]).
    if ( isset( $options ) && $option_key != NULL && isset( $options[ $option_key ] ) ) {
            return $options[ $option_key ];
    } else { // Inner array key not valid.
    return NULL;
    }
}

/**
 * Sets a specified setting (array item) in the option (array of plugin settings).
 *
 * @since   0.1.0
 *
 * @uses    mexpplus_set_options()
 * @param   string  $option     Array item key of specified setting
 * @param   string  $value      Array item value of specified setting
 * @return  array   $options    Array of plugin settings
 */
function mexpplus_set_option( $option, $value ) {
    $options = mexpplus_get_options();

    $options[$option] = $value;

    mexpplus_set_options( $options );
}

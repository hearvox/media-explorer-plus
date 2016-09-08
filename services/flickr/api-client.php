<?php

/**
 * Class that acts as plugin bootstrapper.
 *
 * Adatped from:
 * @author Akeda Bagus <admin@gedex.web.id>
 * @link https://github.com/gedex/mexp-flickr
 *
 */
class MEXP_Flickr_API_Client {

	const BASE_URL = 'https://api.flickr.com/services/rest';

	/**
	 * API Key.
	 *
	 * @var string
	 * @access private
	 */
	private $api_key;

	/**
	 * Constructor. Sets API key.
	 *
	 * @param string $api API key
	 * @return void
	 */
	public function __construct( $api_key ) {
		$this->api_key = $api_key;
	}

	/**
	 * Makes a request to Flickr API.
	 *
	 * @param array $args
	 * @return WP_Error|array
	 */
	public function request( array $args ) {
		if ( ! isset( $args['api_key'] ) )
			$args['api_key'] = $this->api_key;

		$options = mexpplus_get_options(); // Option: 'mexpplus'.

		// Get user-selected CC licenses (default: '1,2,3,4,5,6,7,8').
		// This data seems to add mouseover text to the image: title, author, share icons.
		$args['license'] = implode( ',', $options['licenses']['flickr_licences']);
		$args['extras'] = 'date_taken,description,license,media,owner_name,geo,tags,machine_tags';

		foreach ( $args as $key => $value ) {
			$args[ $key ] = urlencode( $value );
		}




		// $url_bg = 'https://api.flickr.com/services/rest?method=flickr.photos.search&format=json&nojsoncallback=1&page=0&per_page=19&api_key=47a58e28dfdf95e41be62410eb8bcf03&tags=newspaper-dress';

		// https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=47a58e28dfdf95e41be62410eb8bcf03&format=json&nojsoncallback=1&license=2,3,4,5,6,7,8&extras=date_upload,date_taken,description,license,media,owner_name&tags=newspaper-dress

		$url      = add_query_arg( $args, self::BASE_URL );

		mexpplus_save_url( $url );

		$response = (array) wp_remote_get( $url );

		if ( ! isset( $response['response']['code'] ) || 200 !== (int) $response['response']['code'] ) {
			return new WP_Error(
				'mexp_flickr_unexpected_response',
				sprintf( __( 'Unexpected response from Flickr API with status code %s', 'mexp-flickr' ), $response['response']['code'] )
			);
		}

		$decoded_response = json_decode( $response['body'], true );
		if ( isset( $decoded_response['stat'] ) && 'fail' === $decoded_response['stat'] ) {
			return new WP_Error(
				'mexp_flickr_fail_stat_response',
				$decoded_response['message']
			);
		}

		return $decoded_response;
	}
}

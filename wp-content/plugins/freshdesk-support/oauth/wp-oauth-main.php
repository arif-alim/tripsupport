<?php
/**
 * WordPress OAuth Server Main Class
 * Responsible for being the main handler
 *
 * @author Justin Greer <justin@justin-greer.com>
 * @package WordPress OAuth Server
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class WO_Server {

	/** Plugin Version */
	public $version = WPOAUTH_VERSION;

	/** Environment Type  */
	public $env = 'production';

	/** Server Instance */
	public static $_instance = null;

	/** Default Settings */
	public $defualt_settings = array(
		'enabled'                                => 1,
		'client_id_length'                       => 30,
		'auth_code_enabled'                      => 0,
		'client_creds_enabled'                   => 0,
		'user_creds_enabled'                     => 0,
		'refresh_tokens_enabled'                 => 0,
		'jwt_bearer_enabled'                     => 0,
		'implicit_enabled'                       => 0,
		'require_exact_redirect_uri'             => 0,
		'enforce_state'                          => 0,
		'refresh_token_lifetime'                 => 86400,
		'access_token_lifetime'                  => 3600,
		'use_openid_connect'                     => 0,
		'id_token_lifetime'                      => 3600,
		'token_length'                           => 40,
		'beta'                                   => 0,
		'block_all_unauthenticated_rest_request' => 0,
		'home_url_modify'                        => 0
	);

	function __construct() {

		if ( ! defined( 'WOABSPATH' ) ) {
			define( 'WOABSPATH', dirname( __FILE__ ) );
		}

		if ( ! defined( 'WOURI' ) ) {
			define( 'WOURI', plugins_url( '/oauth', __FILE__ ) );
		}

		if ( ! defined( 'WOCHECKSUM' ) ) {
			define( 'WOCHECKSUM', '28A0834DEB347AECD1D7DC426B62E639' );
		}

		if ( function_exists( '__autoload' ) ) {
			spl_autoload_register( '__autoload' );
		}
		spl_autoload_register( array( $this, 'autoload' ) );

		add_filter( 'rest_authentication_errors', array( $this, '_wo_block_unauthenticated_rest_requests' ) );
		add_filter( 'determine_current_user', array( $this, '_wo_authenicate_bypass' ) );

		add_action( 'init', array( __CLASS__, 'includes' ) );
	}

	/**
	 * Awesomeness for 3rd party support
	 *
	 * Filter; determine_current_user
	 * Other Filter: check_authentication
	 *
	 * This creates a hook in the determine_current_user filter that can check for a valid access_token
	 * and user services like WP JSON API and WP REST API.
	 *
	 * @param  [type] $user_id User ID to
	 *
	 * @author Mauro Constantinescu Modified slightly but still a contribution to the project.
	 *
	 * @return Int User ID
	 */
	public function _wo_authenicate_bypass( $user_id ) {

		if ( $user_id && $user_id > 0 ) {
			return (int) $user_id;
		}

		if ( wo_setting( 'enabled' ) == 0 ) {
			//return (int) $user_id;
		}

		require_once( dirname( WPOAUTH_FILE ) . '/library/WPOAuth2/Autoloader.php' );
		WPOAuth2\Autoloader::register();
		$server  = new WPOAuth2\Server( new WPOAuth2\Storage\Wordpressdb() );
		$request = WPOAuth2\Request::createFromGlobals();
		if ( $server->verifyResourceRequest( $request ) ) {
			$token = $server->getAccessTokenData( $request );
			if ( isset( $token['user_id'] ) && $token['user_id'] > 0 ) {
				return (int) $token['user_id'];
			}
		}

		return null;
	}

	/**
	 * Bock unathenticated REST requests
	 *
	 * @since 3.4.6
	 */
	public function _wo_block_unauthenticated_rest_requests( $result ) {

		$block_all_unathunticated_rest_requests = wo_setting( 'block_all_unauthenticated_rest_request' );

		if ( ! $block_all_unathunticated_rest_requests ) {

			return $result;
		}

		if ( ! is_user_logged_in() ) {
			return new WP_Error( 'rest_not_authorized', 'Authorization is required.', array( 'status' => 401 ) );
		}

		return $result;
	}


	/**
	 * populate the instance if the plugin for extendability
	 *
	 * @return object plugin instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * setup plugin class autoload
	 *
	 * @return void
	 */
	public function autoload( $class ) {
		$path  = null;
		$class = strtolower( $class );
		$file  = 'class-' . str_replace( '_', '-', $class ) . '.php';

		if ( strpos( $class, 'wo_' ) === 0 ) {
			$path = dirname( __FILE__ ) . '/library/' . trailingslashit( substr( str_replace( '_', '-', $class ), 18 ) );
		}

		if ( $path && is_readable( $path . $file ) ) {
			include_once $path . $file;

			return;
		}
	}

	/**
	 * plugin includes called during load of plugin
	 *
	 * @return void
	 */
	public static function includes() {
		if ( is_admin() ) {
			require_once dirname( __FILE__ ) . '/includes/admin-options.php';
			require_once dirname( __FILE__ ) . '/includes/admin/post.php';

			/** include the ajax class if DOING_AJAX is defined */
			if ( defined( 'DOING_AJAX' ) ) {
				require_once dirname( __FILE__ ) . '/includes/ajax/class-wo-ajax.php';
			}
		}

	}

	/**
	 * plugin setup. this is only ran on activation
	 *
	 * @return [type] [description]
	 */
	public function setup() {
		$options = get_option( 'wo_options' );
		if ( ! isset( $options['enabled'] ) ) {
			update_option( 'wo_options', $this->defualt_settings );
		}

		$this->install();
	}

	/**
	 * plugin update check
	 *
	 * @return [type] [description]
	 */
	public function install() {

		global $wpdb;
		$charset_collate = '';

		if ( ! empty( $wpdb->charset ) ) {
			$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
		}

		if ( ! empty( $wpdb->collate ) ) {
			$charset_collate .= " COLLATE {$wpdb->collate}";
		}

		update_option( 'wpoauth_version', $this->version );
		$sql1 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_clients (
			id 					  INT 			UNSIGNED NOT NULL AUTO_INCREMENT,
	        client_id             VARCHAR(191)	NOT NULL UNIQUE,
	        client_secret         VARCHAR(255)  NOT NULL,
	        redirect_uri          VARCHAR(2000),
	        grant_types           VARCHAR(80),
	        scope                 VARCHAR(4000),
	        user_id               VARCHAR(80),
	        name                  VARCHAR(80),
	        description           LONGTEXT,
	        PRIMARY KEY (id)
	      	);
		";

		$sql2 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_access_tokens (
			id					 INT 			UNSIGNED NOT NULL AUTO_INCREMENT,
			access_token         VARCHAR(191) 	NOT NULL,
		    client_id            VARCHAR(255)	NOT NULL,
		    user_id              VARCHAR(80),
		    expires              TIMESTAMP      NOT NULL,
		    scope                VARCHAR(4000),
		    PRIMARY KEY (id)
      		);
		";

		$sql3 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_refresh_tokens (
			refresh_token       VARCHAR(191)    NOT NULL UNIQUE,
		    client_id           VARCHAR(255)    NOT NULL,
		    user_id             VARCHAR(80),
		    expires             TIMESTAMP      	NOT NULL,
		    scope               VARCHAR(4000),
		    PRIMARY KEY (refresh_token)
      		);
		";

		$sql4 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_authorization_codes (
	        authorization_code  VARCHAR(191)    NOT NULL UNIQUE,
	        client_id           VARCHAR(1000)   NOT NULL,
	        user_id             VARCHAR(80),
	        redirect_uri        VARCHAR(2000),
	        expires             TIMESTAMP      	NOT NULL,
	        scope               VARCHAR(4000),
	        id_token            VARCHAR(3000),
	        PRIMARY KEY (authorization_code)
	      	);
		";

		$sql5 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_scopes (
			id					INT 		 UNSIGNED NOT NULL AUTO_INCREMENT,
	        scope               VARCHAR(80)  NOT NULL,
	        is_default          BOOLEAN,
	        PRIMARY KEY (id)
      		);
		";

		$sql6 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_jwt (
        	client_id           VARCHAR(191)  NOT NULL UNIQUE,
        	subject             VARCHAR(80),
        	public_key          VARCHAR(2000) NOT NULL,
        	PRIMARY KEY (client_id)
      		);
		";

		$sql7 = "
			CREATE TABLE IF NOT EXISTS {$wpdb->prefix}oauth_public_keys (
        	client_id            VARCHAR(191) NOT NULL UNIQUE,
        	public_key           VARCHAR(2000),
        	private_key          VARCHAR(2000),
        	encryption_algorithm VARCHAR(100) DEFAULT 'RS256',
        	PRIMARY KEY (client_id)
      		);
		";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql1 );
		dbDelta( $sql2 );
		dbDelta( $sql3 );
		dbDelta( $sql4 );
		dbDelta( $sql5 );
		dbDelta( $sql6 );
		dbDelta( $sql7 );

		/**
		 * Create certificates for signing
		 *
		 * @updated 11.8.17 Key creation now checks for exists before processing.
		 */
		if ( function_exists( 'openssl_pkey_new' ) ) {

			if ( ! wo_has_certificates() ) {
				$cert_locs = wo_get_server_certs();

				$res = openssl_pkey_new( array(
					'private_key_bits' => 2048,
					'private_key_type' => OPENSSL_KEYTYPE_RSA,
				) );
				openssl_pkey_export( $res, $privKey );
				file_put_contents( $cert_locs['private'], $privKey );

				$pubKey = openssl_pkey_get_details( $res );
				$pubKey = $pubKey['key'];
				file_put_contents( $cert_locs['public'], $pubKey );
			}

			// Update plugin version
			$plugin_data    = get_plugin_data( WPOAUTH_FILE );
			$plugin_version = $plugin_data['Version'];
			update_option( 'wpoauth_version', $plugin_version );
		}

	}

	/**
	 * Upgrade method
	 */
	public function upgrade() {

		// Fix
		// https://github.com/justingreerbbi/wp-oauth-server/issues/7
		// https://github.com/justingreerbbi/wp-oauth-server/issues/3
		// And other known issues with increasing the token length
		global $wpdb;
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_refresh_tokens MODIFY refresh_token VARCHAR(191);" );
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_refresh_tokens MODIFY client_id VARCHAR(191);" );

		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_clients MODIFY client_id VARCHAR(191);" );
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_clients MODIFY client_secret VARCHAR(191);" );

		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_public_keys MODIFY client_id VARCHAR(191);" );
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_jwt MODIFY client_id VARCHAR(191);" );
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_authorization_codes MODIFY client_id VARCHAR(191);" );

		/*
		 * Upgrade the Access Token Column to support JWT.
		 *
		 * 1. Check if the index key exists
		 * 2. Drop the constraint
		 * 3. update the VARCHAR length
		 *
		 * @since 3.7.3
		 *
		 */
		$index = $wpdb->get_results( "SHOW KEYS FROM {$wpdb->prefix}oauth_access_tokens" );
		foreach ( $index as $x ) {
			if ( $x->Column_name != 'access_token' ) {
				continue;
			} else if ( $x->Column_name == 'access_token' ) {
				$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_access_tokens DROP INDEX access_token" );
			}
		}
		$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_access_tokens MODIFY access_token VARCHAR(1000);" );

		/**
		 * Update the clients and import then into the CPT format
		 *
		 * 1. Check if the clients table exists - Yes = Step 2
		 * 2. Query the clients table and return all the clients
		 *
		 */
		global $wpdb;
		$check_clients_table = $wpdb->query( "SHOW TABLES LIKE '{$wpdb->prefix}oauth_clients' " );
		if ( $check_clients_table ) {
			$clients = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}oauth_clients " );

			$grant_types = array(
				'authorization_code',
				'implicit',
				'password',
				'client_credentials',
				'refresh_token'
			);

			foreach ( $clients as $client ) {
				$client_data = array(
					'post_title'     => $client->name,
					'post_status'    => 'publish',
					'post_author'    => get_current_user_id(),
					'post_type'      => 'wo_client',
					'comment_status' => 'closed',
					'meta_input'     => array(
						'client_id'     => $client->client_id,
						'client_secret' => $client->client_secret,
						'grant_types'   => $grant_types,
						'redirect_uri'  => $client->redirect_uri,
						'user_id'       => $client->user_id
					)
				);

				wp_insert_post( $client_data );
			}
		}

		// DELETE OLD CLIENTS TABLE
		$wpdb->query( "DROP TABLE {$wpdb->prefix}oauth_clients" );

		// OPTIMIZE DATABASE
		//$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_access_tokens ADD UNIQUE (access_token)" );
		//$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_authorization_codes ADD UNIQUE (authorization_code)" );
		//$wpdb->query( "ALTER TABLE {$wpdb->prefix}oauth_refresh_tokens ADD UNIQUE (refresh_token)" );
	}
}

function _WO() {
	return WO_Server::instance();
}

$GLOBAL['WO'] = _WO();

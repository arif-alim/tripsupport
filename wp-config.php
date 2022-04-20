<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_CACHE', false ); // Added by WP Rocket
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "local" );
/** MySQL database username */
define( 'DB_USER', "root" );
/** MySQL database password */
define( 'DB_PASSWORD', "root" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_HOME', 'http://tripsupport.local' );
define( 'WP_SITEURL', 'http://tripsupport.local' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zl4fjlpfjbu49gpdom3ramqt1sdvp70mvopzac40ex5flwd1y3yjpz9lypipwynx' );
define( 'SECURE_AUTH_KEY',  'ft843reux2wsnacnpykijyhzxt72npvqybrrullukafowagnw7wjzc1zjf4zjlhe' );
define( 'LOGGED_IN_KEY',    'qypbbxg9kno6e6o9wyl5huwneznq7qaoyvn6b9dvhxqlptd4lmrpp3v5apomv2jm' );
define( 'NONCE_KEY',        'gfq8ug3c196bckarh7jdorqsxnfckaexynaybzz3ssy8n64mqsafhnqg3siip4hz' );
define( 'AUTH_SALT',        'woxaawkxjoh6pxc6g5f9dxednvuntm8i0ptt91ywnblfht4mmichpyvxqj66hblb' );
define( 'SECURE_AUTH_SALT', 'ydgoxhgqbr8oopgdgg5k40redmt8vpgtrc2e8vhlcrxabeln5spqeynom41xs5y4' );
define( 'LOGGED_IN_SALT',   'm2cytlx948e2ire2lwvrcgu727iham5pawvbehgch93rkiba3tzgyekbonkvmqub' );
define( 'NONCE_SALT',       'ucac91zt8qtzgfbsiiqbva6wncyeskbad7ltrzvhlmhacpc7k3t1fnnlwxn0b2pl' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstg1_'; // Changed by WP Staging
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'DUP_SECURE_KEY', '/^eRwp{@af>8<I0-/uMUG[3vKNqQsp[Jb>D-1WB$ODBm|I;8@^y%icP(tQ VrFDP' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
define('UPLOADS', 'wp-content/uploads'); 
define( 'WP_PLUGIN_DIR', '/Users/arifalim/Local Sites/tripsupport/app/public/wp-content/plugins' ); 
define('WP_LANG_DIR', __DIR__ . "/wp-content/languages"); 

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'AYvjyopHobPaJ/jM/WjnZkZXN85JovoYzPsockKXUYahKCeobvBFTiAra8Izsjsl0eVIklPrGW+z5eYwU4RUcw==');
define('SECURE_AUTH_KEY',  'cwv8RMK6wJXjS4zvCH7IHwtMLNBZOcbDZ5e2sIYSDEUjn87/TIFVsYw19WrJr+qOfoX2elT2p/WUS16ZKnLcUw==');
define('LOGGED_IN_KEY',    'AkEnDVQgyS1+Ew+yyJ492nW8x8PtXTHlvDh2NvcbdWYMALpNXNwCPSWJOkiYdvoXIVdvCKU1kT3xg7c7Fmubgg==');
define('NONCE_KEY',        '/HKuuC9fCj0hN3Aj6FippRSEkr+JgXJeLrNldsue83BOxfJwuk1lma1Fuf2+G8AsgM99mX9rOlHx7miuXVzd3Q==');
define('AUTH_SALT',        'v/Y/tF3O8rXKbNdMkDKspCRTDPSFy3iX9MEHdIAibqxYt+HgLJJrryp0nEnqirWMzbIpQmUlMMngZ3UUrjsjsg==');
define('SECURE_AUTH_SALT', 'TolO6JMNEryRExyxeM9J8riMSXllYr6T2hYhrjEmFOus7jaamCPUYJ3RgTgH5tpV+mEyJEYs7DpRn++XTtJ62w==');
define('LOGGED_IN_SALT',   'F+Cg9tEdgb2T0GJdyW9j1gFKfe9RMo4UKXe8mxopxWY57ptNDdZ4ZQy59Tyw4cWPedaIpJ5voQT/oUHXBoFCbA==');
define('NONCE_SALT',       'TxB076fXAgVcwEC7sd+1osPTnDhxv7g6V0eNBl3nkJhuoPCnqlvPd1/ZL0UolxLcp/xzHdZBxVuWL+5LiSRSAQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

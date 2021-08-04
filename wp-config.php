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
define( 'DB_NAME', 'artisto_technologies_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}nK<>vVL*W0<CQQDJ]Q1ftwC`db{VT#1AIDBXYJbt@F|EHy{rm_uM7a#G8mGy5c#' );
define( 'SECURE_AUTH_KEY',  'nQxQnwt*^$>VAEa}?R00GBe?vuG{mnlNI|E^}bEDR.km}/Rw6G}$9i?%W1o3)c-|' );
define( 'LOGGED_IN_KEY',    'p9I ynA=;{fa.t[t:l(P8v+wFY66Q/YITBDDyrTnLme1o3~sCU|L+r}s9E*N7gz&' );
define( 'NONCE_KEY',        'gLbB|_0N9.}>fx3.I-HmXs{$hE7^>z`q_-MAZ}Wsv]UZi~Z!}jQlNM&g8I^1*#Y*' );
define( 'AUTH_SALT',        'k_.F ZA?5O_!|RHp|ESNMVBxfd8(*#W7h-y]EJ<Nx%IA7GlJsWx?<f_.h>zOw^-7' );
define( 'SECURE_AUTH_SALT', '*w.a``#e,6BbDWO-%.bbf?!k,+kG)};vsNkw,fK0=|(ji;l~{Aq(}NO;e;boJN;4' );
define( 'LOGGED_IN_SALT',   '](S4#*@X(z_WkYP7)^,j1hJ3sEk86lP<zkq*(762q>kQ2}Tn)TUlCo;ib91P<|dT' );
define( 'NONCE_SALT',       ']?5r5.,3PL[zQw.(rGN@GQ+2mh1J;P^Y@VRxs`^^2UQ)?KbG /xI>A-DLI^S^zB}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

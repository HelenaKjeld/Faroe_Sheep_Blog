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
define( 'AUTH_KEY',          'FQP5@3UfnoE7yOkCfpKX-q$`v^{7z[N_!eSy#6q[6)AVn@^[Von`(t+K=3D0QUlj' );
define( 'SECURE_AUTH_KEY',   'opvwUX`tFMzPI`oa3<RlB&)$q4(l2Soqa0LYOxV~j@xvFHiv._~vvP+oy!|D&U;M' );
define( 'LOGGED_IN_KEY',     'j^C5O.mNny7N2I_FUywpY0d?f%tznoRg2N@31Qd&LrPy!J]NT4|t9ez[HgoL<D98' );
define( 'NONCE_KEY',         'Lp]bAz9qIr#~S.hl29JT>`T7)!&I0-(3=^2v88J~-3:4+QQ>/sCp2z-hqvy/8D Z' );
define( 'AUTH_SALT',         'KKU@=-cs(,Cv7f5mFgzxw~U @!<f$rXw;TlchJFJZX64%rd+<[1D(di=xeA/nzVW' );
define( 'SECURE_AUTH_SALT',  'JyCFDAIJ{:nQxif%Ilxj8|;TaN,rA&+pA2P?l2K>W^V.jGY40yy1do[BFVOti*0R' );
define( 'LOGGED_IN_SALT',    'Tpsmc:qt2siM~(<OWoJ{R6BhDoC%&EmKU/O+m|@O[U(T#rJz)lEqPa!@Y!$q<}IX' );
define( 'NONCE_SALT',        'Gmke,n eXx_2@,|x?1+55Ul){oz-Uez4p$ Pel g/g<^Qbz|m!Ughnh y>TItC2Y' );
define( 'WP_CACHE_KEY_SALT', '3AW`Cr%,Z?K?%BO1 0@3}&j$2g/t_C3 *vmb+ #+ w]$OvfwuNBmX(Mq[G#!dAZ#' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

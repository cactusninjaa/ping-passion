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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ping-pong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         ' TI[|<Pbb:eN;`;lj:`vwyjK[~yU.o{Onq2cLEIhf1=2?(v&V<7|!e7?hxKj&c-O' );
define( 'SECURE_AUTH_KEY',  'OJan4Q>r5_`TF6u plm?exVZ]HjSVXCM]5<]0/6$M9X&.}|Z;.58x5%pUjvN<tN^' );
define( 'LOGGED_IN_KEY',    'Z&meB||h^p=2SZ3zI(mn@*<YHk=[z3xQ|(V..jL4Q^130d[rk]Km=377.>RTV)b ' );
define( 'NONCE_KEY',        'TUYg.EemKwS40WZ>YZK ygwc:O-)a 01~-p#`jsw_zP54;wLc,3<j0`FOBonNNu9' );
define( 'AUTH_SALT',        '*L1nUsd_Wre*lm~#|qknR[^QZG+Sbv)*-sP]kA88%Q,,{.B3=^V3nY4vV1?#1(#C' );
define( 'SECURE_AUTH_SALT', 'DQht/5Y4RdUCZy@CuP<S2 @Yp^w$dd^.z>E$NU9*K;1qT`aA#%6B.8m)kR9{GZOY' );
define( 'LOGGED_IN_SALT',   'vv[OzyJ~Cz1q@PHK[D@o63E;?>xtYS)7>>AC*LxB;e:T43d,jlpk6q+[=pOe>[tQ' );
define( 'NONCE_SALT',       'V*^aeoQ]V2MtVF9:.r5ca*Vwcx%Dg)+cEHL9OLhq8d{6o`p!GUdgSC5TjIj[0a09' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '9ELLn5_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

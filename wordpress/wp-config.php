<?php
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
define( 'DB_NAME', 'wp_demo' );

/** MySQL database username */
define( 'DB_USER', 'silva' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AuACCrWztDYt1ZL6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x>V%u|2 d<>J0E[u[`WcO)rtQ3C?2GSRJ}?S#cHTh5b7gt%Sb2+V=,@^GVAo^l;]' );
define( 'SECURE_AUTH_KEY',  '1j-$/thHU~IYf=h*vb>p44n3rPqp(}dh$A2qe;/MH[].Y)zlMV#s=6 5?M2P>(Nc' );
define( 'LOGGED_IN_KEY',    's@*C3)AgjIS7+7@!3JN~]F`ZB5Qy)+.c *M=]_%);UW)R}aH)(~/Y_~1$NapZm7>' );
define( 'NONCE_KEY',        'lw{m/BQP?3rD>83t1XM@S~]X+_}g()<(F/U .<.^=ct;-eEo/ I/.9,_6F9Qt%|3' );
define( 'AUTH_SALT',        'n]yeFT2l2eX78v~elj:(BXe*zRT$dsv%;,IG-Zd!^1C_XyB<2M|t/<3t9x_tO5#g' );
define( 'SECURE_AUTH_SALT', 'V%1`K(swH#[d_&7IRV}Bu<W9)O4Ed!IGPnaV6~yY[d6N>hEh&rggbi)jk9(v>-F,' );
define( 'LOGGED_IN_SALT',   'Hash!bpGIr+t?y:h%j,o4{uzeV2S]{o<p&OTBW&w:KqIq0XE.UYB8{NWO_G<Ukgo' );
define( 'NONCE_SALT',       'BQI4.[:R]+5BO8q%&A%8]qU)FzQ89YlyeUhexv<}k&A{0hX?(aN:i3LS7vwy0+^2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

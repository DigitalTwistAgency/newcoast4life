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
define( 'DB_NAME', 'local.newcoast4life' );

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
define( 'AUTH_KEY',         'Ipg^.k>MNR_Ljwn9le({ugQ#R8<pB;+8}lysmlsC;g0qs[%j[_k%Q0A3L%U,T(hp' );
define( 'SECURE_AUTH_KEY',  '!kN~*UG&{>g72Qp)a>nHN.:8~z5ttPt3cI5ssc%I/MWR$H_S$n&@oyJ.A{HzMA0C' );
define( 'LOGGED_IN_KEY',    'w-W4D  fL%OO GOZyby#*_$V?X(eD([zt?fYTsJ6R_iy45uQ({(kb:671<?d%;eb' );
define( 'NONCE_KEY',        'sMr@>.6VI?L+gy;qJ/s}ZCJz[WIK#@COkd7QY@ic|.g ;^]`1( w7%YHR$?9sUA1' );
define( 'AUTH_SALT',        '4U7*Nk%w)YMaKj^@#vE3fAn6`w 6+:`:r|x1,=ucB{wD$Fn|zD!BGb&G-h42Lz-y' );
define( 'SECURE_AUTH_SALT', ']Aj84kTD) ?A0O)>V?idXLzb|HE+|FrwpgjLdU)|7s}s7@!=(RbeYjP2%R5lch`v' );
define( 'LOGGED_IN_SALT',   ':f&M~`rOx]Ys/QP?h%<HUxe|%*bv69(X?RVT:0D&}~a5:2l| 2KT7:>=VdIo9j)0' );
define( 'NONCE_SALT',       '#kVzw0_!KCJ?ln5@nZlzOs~@R VXwUigeSAi}iPKV/J|W[SWBatM+&qS/V|kUg61' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Plantydb-main' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ls_ueV%iWL %t#_T#uY%878WY)F_eZm{S-,N*q7ub]@^>YJy&+eD,P3&)%UP2IL#' );
define( 'SECURE_AUTH_KEY',  'I-bPrQXcbl{G8&4]yr,}[X!Ws,2=fn%?,c<#t4H5a_n_VQ3DDVt}FE6%u/.WEDz0' );
define( 'LOGGED_IN_KEY',    '98f@=a%]0jW;~7iQ]dmKkCU.<}?2}yj)=!8[Vd;J[q$&g5v5v>5j54%kSpJAT*lf' );
define( 'NONCE_KEY',        'qW9[I_@mub6i=8YnKww>Sx!n82bz~,,sL{F%MoXc=iez >m?9FcGd0|~c0Q^+u1R' );
define( 'AUTH_SALT',        'L8[i{z|sVsA@FwQ.[=F?b-b9T2^ojsg#CV=)0%bO$JNvf2P~z6yRMX`CmR^=+l-2' );
define( 'SECURE_AUTH_SALT', ',v0G7yUdPI3,ApQ>FEISbrbY_2P2V#:ZEAr](^VBRjBpJDi%iG$jU<0%x1`9ZfH}' );
define( 'LOGGED_IN_SALT',   'TaFVZ[uKeII]DwJ=p@o?^QS}+1`2]4MkN8Mo,y&4`FmOM8SYqV@7G[irN5p/?VLN' );
define( 'NONCE_SALT',       'wv?!IX<#9PcADLG<:XQt$^4u/9PAZDiT}p,:31F)[!Hw9_!+nrl6W~PUQC/{.Wn%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

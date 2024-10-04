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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':HzWC.yow4COgy>-cH0,aR:q7m1]MI>A0J w>q50*ZMXZH^Swx|=_WLu4/GUk|,H' );
define( 'SECURE_AUTH_KEY',  'eeeMh_1k^M5M71cm|TC6tx OPW*IA=k|q#1[oM$h&2*LoW(c+>^+,q3$m8G|^m~5' );
define( 'LOGGED_IN_KEY',    '7 .s3Qs{vUr3!E70|m>?tlojAY+9z0:uyK9OM@Gv`b][6_+AvanP;$gSV..Z5-B!' );
define( 'NONCE_KEY',        '<a~O_iQWtqL7l>t2PBg;`6O,|d&yqJb#jHOxKuM3mTMkD=i!i~(>(*.O*RD-Y_ z' );
define( 'AUTH_SALT',        'ixXH7e$JFZme>l$7M!C.-sG`I9kW)Agp+Ia0u357kOlf tve$n~Nj@KbWTU4WGbh' );
define( 'SECURE_AUTH_SALT', 'zCXc:C.=BqMM.uZ.V|9kM3qV=}(h2USoV>%84&-vvU[XkD0!F`rA4!Pu,`4S&46e' );
define( 'LOGGED_IN_SALT',   '>Z%b<w?M8czJH;vu|2(GH8m|,j;].NNBD5bjg)|Eo;:LNqA0H]S>W6=iRueew A#' );
define( 'NONCE_SALT',       '43ZX;p)/L-0{0fErmp2QSd)_^x6|<>xY_6dm05`P0ncz>r8KV#OE0Jivusw+DC::' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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

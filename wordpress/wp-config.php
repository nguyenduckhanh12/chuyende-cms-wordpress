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
define( 'AUTH_KEY',         't-i|,CTUNiZ=?Lt/:l|JyH3<z_J@Z~rZx]f6!#n@JPMS6v?fZyEooPtxVK7^1nv!' );
define( 'SECURE_AUTH_KEY',  '/G#XJFP*acQAaCYsd6aH6}9*&fP:unQb~_gU.[*6(oq:,:d[SJQ4$YodV<O2c8HW' );
define( 'LOGGED_IN_KEY',    '9yBvs6<WL`0@bGRE.yjO0/P8w|l)2,lIJ13oo+X/w%s8dIu}BnS_y?Sl*AQBz^;x' );
define( 'NONCE_KEY',        '!E6FS(9,y*of<u 3sXw+rsGJ?bRr(DRBEQ$Zz2dA;s0CAm4/sePOah]Ahu$Xf,La' );
define( 'AUTH_SALT',        'W]F[Kb.mUuEfIbBH=8kd(iqN-@^C-V$Mx;)K>8*:F?0B$58V5}6[TFiO,6`Bq@kO' );
define( 'SECURE_AUTH_SALT', '~xYFcP5}44(Wpm2h?b[(PYu1Bd5>1L])H+m>J6-5#EgM(+C4`yKS|n.#O&R[hj!U' );
define( 'LOGGED_IN_SALT',   'e{%D`RU0vy_r4qcXUaW,%%w*&Ni >nA@6RU%;C5rWZ74A#L5vxdc`]5p(Icek+p+' );
define( 'NONCE_SALT',       'G0gIdQBMlC((mK5<a6 3.LNGB)CTW|(5HyikffI12v%Z1GxJQ|z Y#(P??(DP3Ry' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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

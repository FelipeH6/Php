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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'YOX@ARC vXznc2`O=+Jvt}dMY!g!VCb=6pZlWV76qxjuX*[ItV@Z>JJO:/2:UqcC' );
define( 'SECURE_AUTH_KEY',  '$E*n3UX=rwOz.t|;LyMwi!A-6[!9XC./b]Ft{d sNI)!x:Ak)_#YH]Sa4,)X?zk.' );
define( 'LOGGED_IN_KEY',    'J=Z3(TQ9e0oV:D{AkBe{1Fo~p.=m?T?>X9tN(l2EW`=^Ol.HX3J9Or6}{`h}*H=q' );
define( 'NONCE_KEY',        'Dl:D*!,%E{UwQs<M4S-Xm&r]yp_~&;ZoX+3$GJd!C@r<~hCr`::IYAPGGaw``-ER' );
define( 'AUTH_SALT',        'kc_/8[IVl[fddEwM%|).pwh|DH?B-d2nWubeV:jeN(*A^%<1L-39=B?zr+xmW@eC' );
define( 'SECURE_AUTH_SALT', 'G~rQ6]UYRzDCWNx*imu!su;Lzp^a?hHV|3#4K_k6H,p]Zt,plWy~Ct 3qu;mmY0:' );
define( 'LOGGED_IN_SALT',   '4FYG2xNN@uHr^^d)Yu#/BB+yvX#YBL0`9i~`X%v^*Zpa=fFffqqwC^; a]U!(pM9' );
define( 'NONCE_SALT',       'zJ74_16BL/_WP`JwUhE.TWpB51{Y2sI1Qg+WR>)ao4-;%cUi[>1r887YFI@re_$%' );

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
define('FS_METHOD', 'direct');

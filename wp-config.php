<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u475714593_K3Soh' );

/** Database username */
define( 'DB_USER', 'u475714593_Y3Wjb' );

/** Database password */
define( 'DB_PASSWORD', 'Yv59esDTix' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          ']~/}7BkmWRTjn_k((e,(}pV(+i6P8{wuWy}~nPTjlH/sqn*%gu,z&lN!$N]TEQ_p' );
define( 'SECURE_AUTH_KEY',   'Pus}x%|cGL3mZw/S6]e^csCkV.1ERmc&1}=px4d)|<%|EDy92jjZ!.3SAWk}C=tR' );
define( 'LOGGED_IN_KEY',     '6Aq(3Jn2e$[0@q[U2 4sxh:75/PJ=BOO6prrZ,Bbil-=*5)aT/U#&nu w6i&/Mq#' );
define( 'NONCE_KEY',         '*;P+J]k)SE,}Q+auSpMN#$PN=f9*d%:O7x]g+-J2NlUMGg({iySDr7QM0%p`g[=/' );
define( 'AUTH_SALT',         'elW7g/)g@~}c_dKx?0PYQx?zUuf2@eZQ]iHp|LRO]FS<!gkKl6 *~Wy-HzvIGPX^' );
define( 'SECURE_AUTH_SALT',  'O3!*T<koR05(OJ0P&#s:&N:%1]-%h60#y||D`fHaN?ZqIeOL4yj#x^P.da?lJ90<' );
define( 'LOGGED_IN_SALT',    '}5X[Jvh!ZA,6#kg+K*_rq]UC:LJ[yi,N=GL,+[&g/P9&3<I`;@HSmDCP+n{w(eZT' );
define( 'NONCE_SALT',        '7NJ/gz5(b(j!H)zvwPeWz!oAzrRn5b.a)RBXquI:fL_lKGAad9V]lM/TC?l9ppP>' );
define( 'WP_CACHE_KEY_SALT', 'a<})yyme7QfdiE7y$BeDg*F.`NO>?p.tAnA98.Yrd51c376[`DY-MNREkrh*dp</' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

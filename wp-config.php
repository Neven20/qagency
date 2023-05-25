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
define( 'DB_NAME', 'qagency' );

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
define( 'AUTH_KEY',         'eT2-^$^?cQ2a^D.m1#T?}4bT:h08)W?J, V0V*{x1%A~,K>OY>+-yB^EA]pGez}J' );
define( 'SECURE_AUTH_KEY',  'VMN ^rrZTbtVC<`M-@~AXo/EPXpepHWlYdTjOU2JOIOA`x8j6p8Xw@i.VTo!AVO%' );
define( 'LOGGED_IN_KEY',    '1@]PAgzZ:(<}%qMk$++3BW=Qk}$l7/ 6{1<yc?_[{.R-lpz,` ?`Mpq)hOba1[&v' );
define( 'NONCE_KEY',        'CJ<nS[~ZDVZr)M;3bcb5#dcE{>as~P;C&,_8}EVXN{v)X4LAD)z(nAF`U25^.n3*' );
define( 'AUTH_SALT',        'hF!F%}Y,t9PTkzub(JW9p/nxB]H9IoY2nuPQt*y-g|sSdqIS8j!-,cqj)y]Nf&5r' );
define( 'SECURE_AUTH_SALT', 'vT-uM%N3F:$7rjvZu|LqD4pBw%@a&0.qTJM3-DU#})#xn|O[3AS7z6!(TuuiS^Ag' );
define( 'LOGGED_IN_SALT',   '%9|^u3walD%Kd<l?[z:Vrf#dj<2R1}>Zl&-x)^)QJ[6$i)#C0s(rtDS6GwItBuZ[' );
define( 'NONCE_SALT',       's.c?HxPV8+U?,*jY6mC!r`.?P@.ded[m=g>?<_8Cdw~6Xd_}Dyzm?1>+`8G:j*!G' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

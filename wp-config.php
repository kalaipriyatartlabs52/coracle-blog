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
define( 'DB_NAME', 'coracle_blog' );

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
define( 'AUTH_KEY',         'uFyQSB91P|wZ1I|@F7,&ucoT~NMe5Wn/9.9_>n{Z@/:Vh}D,Q`h^NGx)v8t{lC4o' );
define( 'SECURE_AUTH_KEY',  'iW~[6al@b1vuA6Oer=qe!Ud18w?TX6z%]9j L;D:+U(mvt~ yqo3(=lE#&99MiV#' );
define( 'LOGGED_IN_KEY',    '+MGx=SA=;T?PPU({{Vu!@n/a]+Igu%wE}>s^stt;,=725gu )H_LP0nz~%vom-T.' );
define( 'NONCE_KEY',        '^b(>}@SUSZ`5CkX_$rjQqNtl|*OSf&y2gq*P/%~@HBznKN,c0S6K&-flk<AoV4CI' );
define( 'AUTH_SALT',        '@kS9GM{f.LpnRw;NT<T2|19-Y#lvF(x{Yi/Xrp)pQlFr3`;$LvB?|m)O<L|,Ry&Y' );
define( 'SECURE_AUTH_SALT', 's%n=+cI?A4a_{1an/*Q4L^T6J%)!?RWI:&1QqJO:Wg.FLs`:` =at_BEg89iW~MT' );
define( 'LOGGED_IN_SALT',   'G!whC|HOZKGMr:TNxKj;W,ocaN4@gWaI^tI;S@+$S*g3(`akH*8/T_*xI<pAQoYt' );
define( 'NONCE_SALT',       'sDQfGc5iay>7)&Z!pA]ml8vTnAM5><J[MN:+D+6Wd;4Yi5X@y0IBM4z/cT=bWy:#' );

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

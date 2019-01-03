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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'blogadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wl04121998');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^bGXZUE(gGXUnb(`B-fz[ oDI{y!Jr%S5W#u$8rp?: )gh%X.rVL;-1K=LPf{e]T');
define('SECURE_AUTH_KEY',  '- ^3,0WJzw)7}e)j]>`HC<zj)xwnS(M+)J)>6KP)zJd*/` i+|(-PvN)UCmvdMx(');
define('LOGGED_IN_KEY',    '6HTDPF},6]42Lwa0~NLBXzQ_?%=Sln ^Q@VUwU*~(SH(:ZB[g5ZFB>}f.Ftr%t7e');
define('NONCE_KEY',        'obM$`L$tI:D<71[P@r2>gtH_iQ[2~f-,Ax[H~7r=Oi6F-t<<Joir$arpafbvp{:m');
define('AUTH_SALT',        'e3AIDEGD~W-b,Lmp0i``wtI]0#e)i5W&_GoZ`D#t7AKt@BK5Y#.b1bs]NsqS9%bn');
define('SECURE_AUTH_SALT', 'P5w|rNEUOe:q%yZ<?],=si}A|Lo_ahW-a#ZX3/Ru<XGMu0rmM[qbJRJbw!8:|e4@');
define('LOGGED_IN_SALT',   'DX2:8Tsp+DW{~y5#W(pae-!1~m1^}src3$)l#:LBsJDP-12kq$-~.-S9Ej0:Nge%');
define('NONCE_SALT',       '?K>tbA>d^May<Qyo^&M}ElU*l0AVxcc5*SH;p5tFwJ>ZwMhrJ]-wrG:+`:b3)z.8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'S.|j:yxIz</c@S>V6|g?ETX8=k,<xpf(pUxXaINM)WY@UTH>R~3sZw+X:myYeeHQ');
define('SECURE_AUTH_KEY',  'U?nq]Dip*&K]!xN]q3li B]!R9-nLmRcW#RP= z||q7_<~2:esi|CX<H68mS7osu');
define('LOGGED_IN_KEY',    'yKz#c:pBuk.J9q!*5<]oJO0mB2!9_RNE.Gx<x2C}FGfA|sw_lmuy]uw;bo:#;p@X');
define('NONCE_KEY',        '#P9?GD%|QQB;Rr!(tsIpo,zE-cU){Df[cA.w~iS|E}H~oS=:AuO#u90j7azCS,I1');
define('AUTH_SALT',        'pfi7j2-%OB[C@3l|mMrOgQ8@jTmg<$G;I2z0[L_3t6X6F`ZM&*U#SY?(v#ijMfon');
define('SECURE_AUTH_SALT', '2ou(DJCnpWb1::J|J/70[q%7G!pR6bFm78OmLJoN$)cq!E)?IduKq=p[R?(e-WU%');
define('LOGGED_IN_SALT',   'Y5D!!qIO]MHd(miFz.jCaWLJWB3*cpn-,DI;/T]1wtQ,dG19_klluVoc=*4W*God');
define('NONCE_SALT',       '2oVw*:E&0Meiq[B/zjK#.jcK{Q? pYSk-dH}y)$}%S|t4vcnPL:(h6{0s1@)|R*E');

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'wpdatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'B}|e-Bx pe`4,2Bcvf[c<||4!l1hM&OA|sq4(8CW6CHr[<&TxHkFxqB{!EOP<CFy');
define('SECURE_AUTH_KEY',  'mh*D<Xp.ON#>8qrG^sz<G:+Gl+WP,Tv|~HZ^T0ta)5gM`zT@-]+F*|4R*Kco}DPC');
define('LOGGED_IN_KEY',    'zCLOK;K=o?X5JJ8.?pNOdA<K+3%S-[PnWR-10OF&#BJk-t*BnZuQyI*<^p}ECQ~v');
define('NONCE_KEY',        'c]N7vG{`/w/OSPCn3s2 F4m{emyGzvP(TOIl_JgC&k_t+|*(aZfD< !Ig,|N:I(s');
define('AUTH_SALT',        'Ufcj6BF0dz OXFI:W)_j4*6S3ZSP^Cq|_+G%^$Q7HA$0g+aP`v%1WuVYznbEhnT+');
define('SECURE_AUTH_SALT', 'gB<4rvPML/Pt/W3}<;+<SmDl2,hAYK0=M 6On@r7_@xN2sW`+~*0lbw|rJ?sG*D1');
define('LOGGED_IN_SALT',   '8[v3Ei~quzle2xWNo[J8.?,Ec@_vB,4CK]P45{McFk?ogGMXJC.q:ReY0}|a-o$2');
define('NONCE_SALT',       'EIV.0uw2 4.~K84PZe5c5qTOSLNt<C|kGK9&XW=ib,l5}Yaj3DH$xEj|B}V}ssKf');

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

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
define('DB_NAME', 'bdsami');

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
define('AUTH_KEY',         '01^c?b&;;EawKD]=_w4R*z-h:xmr-q.n<b ?(B!`8#=]TdoaHmb2)<%cj6%xc5j+');
define('SECURE_AUTH_KEY',  'Gr:E:Kn/wV1}LLrS:5#q`8>3[Rnh+z2nfSYf)bTz~GaWbJC{Z{%9Cf3H+(w7~@A;');
define('LOGGED_IN_KEY',    'S3V^m+(Y6xMe*+8TISV^}Nku*[=:xVbV8YBG(Qc%kYQNlZV}ReiNUSW5bQ7pQ!!t');
define('NONCE_KEY',        'm~A?V}>y3^t?cyisURxs$-k+2P~I9g%4JOh~u(WaUglx3VX.v$fO;e+i~|fsV$,:');
define('AUTH_SALT',        'o2A[Fc+BET@y+]L~~lRCsR|o5^%?~ _7hE1Wgk.Yqc:p078PnuIXR_-VQp|![U,P');
define('SECURE_AUTH_SALT', 'lOszJ>q9;rBD6fIC<v6Q|I{((})aO=rHWMQq>)@@RFnmK`2 ^v6c0TO@u75tLDUe');
define('LOGGED_IN_SALT',   'v!_fq+*1tIaFrle!<p!Cnxd/k4w%|&pKs$eABk( 85#3^!4@o^Q9js>To7(oAPp5');
define('NONCE_SALT',       '&iuMb<Y5Oj!s7_g-wNN8vf=IwCC;eVG:wlUW<t$o1FJvP^y;a[kRKLX|p| p1G=m');

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

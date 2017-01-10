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
define('DB_NAME', 'jpcom');

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
define('AUTH_KEY',         'xhatKVt,Duh]t%N@,%!BneQy)f(2?v`R=#79q-#G,Evakt?p4PYNnXU5%WwiZ0~g');
define('SECURE_AUTH_KEY',  'Vq5@rFxRl>YSG4@nG@{j$N8+ja@c5j7:%jNnK#@{?>NKm)&yv-?q+U*ZFxx^^!Up');
define('LOGGED_IN_KEY',    '7{:&Fdx*s+;u`) +u_t?P/vt3VY3g.(q4D>$&ru9`Vl2m*kMpT4]22xL^`J/U4-s');
define('NONCE_KEY',        '*s {au!kWS@#eZ+;B@(OQV57 6otk68hfj|.a:.B}R(rEG}PsJHG*LL^[#8G5|zK');
define('AUTH_SALT',        '<bP3M*JYAYkmy<}<hd0t44?H3h!]})#_W16HwVii[+=3Cc#L?9_ZId6)2vBlQLJS');
define('SECURE_AUTH_SALT', '|,pgMf_cV?4Swt1N-RIM~FLxb#56Pb-W;Zi1p[OxK:`r#D*l~!^q^C[jZVztT.yT');
define('LOGGED_IN_SALT',   'X9BuQ~De>HsQeUj&},0S[)uk7]h9C&Z5jo{;!pG7ga`S,.8HsDuj>DLz-%|>DP[L');
define('NONCE_SALT',       'TxS31>Z&E1.+0@!mz$^U z6=&+Dl^;LJt{MJIiaS_X91,T]>s-X~TyM1oUD}nUgK');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

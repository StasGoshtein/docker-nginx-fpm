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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '172.17.0.2');

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
define('AUTH_KEY',         'Inf%ZlPP[X6e=_345x{B5${Hy___rStcgD{/6tnA}>t+{1gSe. =Fl!m~UCjEap}');
define('SECURE_AUTH_KEY',  'z3f@Om$E{/q%bKi5:hd@Zq=>L@}AtFNL~pgw+Vl_ICxQE|l^L07>N(/ei6Bo0iB{');
define('LOGGED_IN_KEY',    'x{(sW)Ns@fD<_@1hg!jjkP&`F@1-N0:pvj dkhl.UGE2D^RwQT65=W3J-)Ewv^1{');
define('NONCE_KEY',        '[`).3?4,6esHO7cP~bnz?Ifk0h&3LYuKre,P1ZB:a*$;|wdOO>i]0tyZ$RP<$,!D');
define('AUTH_SALT',        'DQ!LZb dm,!.:J)WxH}+I^*gZ0GkM@Y(!=%KL.vV9;J-*8u3(/FYo4#5Eois<5h&');
define('SECURE_AUTH_SALT', '>DNQ`dwM-UAYJJu)6yI&o^C~EVku41^e=[mn* n@+bU.iSINEE|_%ND;1Cx?.E_y');
define('LOGGED_IN_SALT',   '<`ijc`(|F$E1/uo1eGkK7F&& xDanp  Y~972EpXN$u}bqKeqv!RxK^3[UEssbdV');
define('NONCE_SALT',       '/j E#I@4C)X9_|`>Yf;rEz1P.5^o4U~ 7<:ST5&uM0-8x?^~!2 bv&sXXqF)bACZ');

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
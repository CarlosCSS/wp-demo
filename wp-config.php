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
define('DB_NAME', 'wp-demo');

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
define('AUTH_KEY',         'Zi<<|yeZb Tama}+D-ap0hs@n-<ioi}w(5J,|XUt!Z?A*=(ev+_q%%{fN;x4F ^u');
define('SECURE_AUTH_KEY',  '%a~KIb{A5/ Z)snzh`&cn-[R>BN6|bq5OdP] @j|xW>oUed}l)SRn^`uKH6%?*MD');
define('LOGGED_IN_KEY',    '/>ap&]1tO`nOWq)FK+1r-E=}3%Lp0<&qk0yftZK>XRT6ee^`YK&4)h7=~Bn?0gjC');
define('NONCE_KEY',        'FC&B[-wUPre<U#z~a`-J,JVF]W`|w QbF+<=Gd`!SSE^bJD`,F(:z}Bq|#A$Aq@>');
define('AUTH_SALT',        '1Pw8h6N`Rr8KPqC0*CA<;k{N+ms`P{T;;UV|^;BNB*u/OOD;/:/|B-xk[_0pS.b%');
define('SECURE_AUTH_SALT', 'budVQ.6?YR.+he4,+]`M7~BoreSKA[d!r,S*:=OQXhrWJLyW$Xj=[#kr3$9. -fo');
define('LOGGED_IN_SALT',   'kYww=QH-k6/>|-#}N g$PQ(85KHi8 fC$gTf_@F21di5/(H*oS0Sh|a8_SSLS.a*');
define('NONCE_SALT',       '}=^si4k>4f5t:3XIXQw*`cq+)^R4!v8B8Iow[Y p@6%?LU6z^qNa<S>`X~MSB~Wr');

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

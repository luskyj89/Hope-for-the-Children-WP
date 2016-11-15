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
define('DB_NAME', 'hfc-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JWt,9;6%2iB2OLyTQ:Vc^.>/3R&]f{oPgroW1H`9.G rog1QU4|R!,|-ukRl?0EH');
define('SECURE_AUTH_KEY',  'NY-rsD;2whF>Jv.rUkD]3GuYeb;qwLPg9pcC8WK>cL>w{2IMTH+L*20nGZ>#,/yC');
define('LOGGED_IN_KEY',    'U)FKUl@FG`OSWf+OW:CZ}i/.ujYv5?M03|AR!Iu x*ld4EO%i}#40`zpz5|^l,Yt');
define('NONCE_KEY',        '.=LslrTPh3_$:%sF`Inld d-zsBe=v?RMYv76vQ9f8^?0%J})S#nX%3!H]ON9L%`');
define('AUTH_SALT',        'oGwXsP}?v#QCV5R`,6<BJ:<Ce#tb#f;Kgw*!nx?Sock-Xv>&>DZ{?];d(0*9HA=9');
define('SECURE_AUTH_SALT', '`{K)RWQ)=*.TIA2^+bB>Y6`ieTT#m]T,J8LT.f:8_X}vK{TwY<.!N!l,v[$>bvj5');
define('LOGGED_IN_SALT',   '|:3IH+0sl*gf2..&qnHr7&Ez# g+cmG4k58=VlqoqXF5kM_{q}FEc AA!lf;RnRX');
define('NONCE_SALT',       '[{~44PF(+2|!_xHkI>DWrVLLCilya$@dChEnuf0XE]D!fDOvU<F!?A)*S+%sd 6@');

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

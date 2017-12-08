<?php
/** Enable W3 Total Cache */

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
define( 'WP_CACHE', true );
define( 'WPCACHEHOME', '/data/wwwroot/www.plastic-crate.co.uk/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'plastic_crate.co.uk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'LU5541118');

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

define('AUTH_KEY',         '1gh;)ZWh!V!bRI0$T<ExuL]X-9@%9dEZvo5q=d:&MgfNvl`pC8!MI)-Xx:(t m-6');
define('SECURE_AUTH_KEY',  'S1~Mp$MRJ@rlL/wO_Uqnw&hsO,v($}bga~Vt4k rUj?Q?asovOWQ)Ex/;g_+u ju');
define('LOGGED_IN_KEY',    'LCUD{NQ$7ubQ?1&L}tU!VicQ(-R-cE5g//R6!;t%LWI8%ka?SLo.&3}8O[<w$<f ');
define('NONCE_KEY',        'eDix(vh}@;F%N|*Wy.7c~yNdW{}M4ZrOFQjQ7m!n!ZWYYp[y3zQIDlG=I8-/HR~x');
define('AUTH_SALT',        '<88l/J(zI:*;RK!Qz?Kt./i_8K;DK}**w)~N@<Oa:kDiT_FMM-VR{&0[X0$]#PyJ');
define('SECURE_AUTH_SALT', 'm3KV61@Mr,8Y[75Ve8z56$J>y1I@FPf:A6JSog6B>D/v^ &$tQu.|RvJ+Ia~])vR');
define('LOGGED_IN_SALT',   'JD$y4x^oVk96/=%a=m|E$Z3d0vA+I eC-vy{MdX+b=kaBA}<^%g|I)*elWwK)U?=');
define('NONCE_SALT',       'u]i:~_?qw$>N.*tARH6DxXsnDWFHSymIf HeCx++_e;G;x&Fo=*jI@b2sV}N>!d6');

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

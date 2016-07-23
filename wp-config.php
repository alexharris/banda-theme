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
define('DB_NAME', 'sql3128650');

/** MySQL database username */
define('DB_USER', 'sql3128650');

/** MySQL database password */
define('DB_PASSWORD', 'DJCW6Ewg2t');

/** MySQL hostname */
define('DB_HOST', 'sql3.freesqldatabase.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4_unicode_ci');

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
define('AUTH_KEY',         '}5%9yt0a((zMJ_Q>|HF~~|{E |~p!*vhNBp]3>*.k !);OL R:[D#N`R`$?+ 8nO');
define('SECURE_AUTH_KEY',  'E!P+SKo5W$(r@(x#f`!FFMG=/5E9{ukv8s+dGst|J{i{.6EG-HTplHwNSV1Z.MKb');
define('LOGGED_IN_KEY',    '}%OI##US/i77ZjadLQ6@m=,e5UDnMd^bBV>o4WQ6kqoMHKy-,-jR)(I[Ac3n>H}f');
define('NONCE_KEY',        'n*+H.tw=*o.Q6i;7KbCSZoLoXgW-Bxd@.L5hix/KvdS_&93NiiHp/bTnT^%p%n?M');
define('AUTH_SALT',        'xU*+Zi;6P2a{OPp7/7_mdeiB$0/jK?6K~~^tM3/fX8u#,JbAdPUXSEbflDG<hdPN');
define('SECURE_AUTH_SALT', '[n04&-C#31Wh/6)&`U&GkWee$FZU){cg4Q/PJl%Yf;]ST>V==]c^CBVg<nD]|R2q');
define('LOGGED_IN_SALT',   '1Uesp=/j>cQtwp7b74aO3,&ghMy}Ffm(ag,FnPu~B&Ws?9/YkpF55x|y6k!jpFk4');
define('NONCE_SALT',       'IE`*Z}<&Ag_AnR41sYJzCo(5<=Z2jNsk88QA0K15sFAZ6sSV[otJU7Hzt1N^5}).');

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

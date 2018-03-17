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
define('DB_NAME', 'bootsrtap2wordpress');

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
define('AUTH_KEY',         'Pc$EJ)m$uR{;h?>OUOeC~zK<V|gN2T{&[zM>=+H<H%11QKiW!~<F~*8wEOvea_?#');
define('SECURE_AUTH_KEY',  'gHIhM<uwMV&<~r%0jB~E<1ShP0L+3r_G]4%T>d$Y9@G?jts$a=fD[sLD;krW]A!}');
define('LOGGED_IN_KEY',    'C&lhWmpN9pD2KbSM*Cq~{z)3H&U+z4Tj*BLBv4+Be1pz4~V%L8skSTXPB*Oz<v>m');
define('NONCE_KEY',        '4m]32|$;WvU`NQD`OK7=3A.6^|$HfrBDxd$T5$[}bi?iA||IT|HdXH}!I(o4<I<l');
define('AUTH_SALT',        'iz=?}J%fsk-([hRS)l8A895|(!2+~QQ{CGk^CrX8SxN6KHPiX!GSj#]#z+`QS,9Q');
define('SECURE_AUTH_SALT', '`.!^llnQP+#6>[*zW9!.Ul}PT#C_uZZ9t$* k;9%pVh?m]W/KW#`mC,al_L6pjqp');
define('LOGGED_IN_SALT',   'Dt2-%,5<P]l:0~Q`@X3*9wN#C=4Yr,TyJfU.!09z-O<}~KlvtMW5A?Jwx)3]9z(c');
define('NONCE_SALT',       'ZT]&|DG)7Vkxn.:!f2PjDwhK^qe>{_pqj]7.V[mRQB{!e^9_ )LW7d@b-xpK]Ra:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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

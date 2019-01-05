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
define('DB_NAME', 'psiai-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'qo5D_CYHQJ()N*=y-~6WtQz%Hm7klNFAcU7k,2PI$ayd[[,=g`6WTJA[S&CAY~78');
define('SECURE_AUTH_KEY',  't:bl;@OJN}ab<E+@Ec?AfrR&<d[}J=1<P}sg;_qrXr9*c38-$tP2=4i_`uXO0jF7');
define('LOGGED_IN_KEY',    'C%@T:WcA%*hzq>v9K?eU;.O[)#JbWGoHtNGa=bh=iUGN(LQ8;*gpfjJ%gh)M`Vi4');
define('NONCE_KEY',        '0C^xF*6Uo%9u_ba;NHbB>vVDQ%$z2aADZ;MyylP~C8r]]@?||eKH(Fr0DUCb]>f2');
define('AUTH_SALT',        'Aq;2>S+Pd8Ii0U?vs}g7m6AClVxon (Qhr=)Rrig[IgMj#@rewpwbP*eXWma9]wE');
define('SECURE_AUTH_SALT', '0OsKDCFg.tM~3B$0K>2n$M=$QxXbG_M*TAa6ruOKcE}u=@RHXk9;p4c#!L0tfLWy');
define('LOGGED_IN_SALT',   'PNkp92Tr}cMEqI9maUjxmd<W{BlE z1On1v:K`HQNM,XRDz1!E~XU^)|Nw6a#E[4');
define('NONCE_SALT',       'PfeW=gN(&ZVl3}Il4<#fDY1*@XE(x f;EQ|~F)*SF.h`p:egxiUMktNVh|$K%5&W');

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

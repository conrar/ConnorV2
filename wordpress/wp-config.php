<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'AX87;8<DY0Ho[a$SN`XXwu_@uu:G@{rR@L5Cl`^Mq*TUp3Nn1cA8G1O =CpK^:M~');
define('SECURE_AUTH_KEY',  'bS!8>lR@=z~PDu6a>^+_Q5m}/Zq=RM?nK}yfM|:WW-Rf,f&*P<]L8b!U8~BP^oh]');
define('LOGGED_IN_KEY',    'p4L:`s.M* l!T@Bdm0zYqOFI<}G%.YCS2<pfKj~wf^4D|Mre^@Al5U%&yR!h2M%)');
define('NONCE_KEY',        'O?L+y#x=[j7TK= c3vpdz:+3FTQ;G|oYu*Vldbh[-r$UQ.&jPEWm$<}-PjP,7;u{');
define('AUTH_SALT',        '[Ic};iLD6?FPAexep1,89y_cipjVFwOdX^owIsEbfjt${8{2im-3hgre#0A-BKus');
define('SECURE_AUTH_SALT', '%jvtY?tH=r_ka.6taUJhrF[JvVF8)wD,bt^00)+c@iAdY>qxF+%~kjSs,55|dXN}');
define('LOGGED_IN_SALT',   'yge2`GyIuA20`9]yRN9k- RHKXhJIv6c@sLEr=R8G`5;ZD/1^9_OR)O>=%/N=yG)');
define('NONCE_SALT',       '^*E_`_xbk?,dCJ>;fi~_5u(Wz:D+#&r7/-jX <m>/!/h:UN/d?wBzr$r$AX);A n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

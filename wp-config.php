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
define('DB_NAME', 'wp-plugin');

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
define('AUTH_KEY',         'YI:~,n%]RJV=T4%Wc Uter!^-: +I`2R2&-G]Oj*tEAWnB,A@a;[/7-.HZ|E|}K%');
define('SECURE_AUTH_KEY',  '.I=-e-+Z||L_aKJd*3 T<+&ZlP@LgdZQ?b~Mpw:Oq2%}gs|k34.UJ)q|FO&+QFG&');
define('LOGGED_IN_KEY',    'TE|^MiC^_~2r0#RPw+HNVJK~az-}&cm?/O*9ZA7_+^#|!LII]?]%@tOjaWQP[UOf');
define('NONCE_KEY',        'Kcq;A|1%>_gw9-W*5g 7$|(+MB=cEio~a^;N ~*@djUstpB*gOyI/oH@j=@ Bx`U');
define('AUTH_SALT',        '|ptk)P]zpt|pm)N^Zj43C;y{h RGK.gjF=5QNG:vX{f9?cxyKf^Sc,*2Lam}-.~.');
define('SECURE_AUTH_SALT', 'S0?|h.CN7KOn4_^?>=]9D!adC>:R+sj+a=<||(Eha,#@!4+V&?`5MucGvxU*R%1:');
define('LOGGED_IN_SALT',   'RTndM).P|4XIkqS^-`6@E~NxO9=9-E|Q:N.)s(QzG8sxCv#CXX]<PT^ +i0tQIxs');
define('NONCE_SALT',       'MrD>7oC^)Fe/]i%@_-FL}a|(#va|#L18>w0#7fP<~KqRHa9$~y|mq{v4{l-ltmE;');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wp-plugin/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

define('WP_ALLOW_MULTISITE', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

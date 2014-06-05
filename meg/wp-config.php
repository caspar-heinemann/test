<?php /**
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
define('DB_NAME', 'wordpress-de');

/** MySQL database username */
define('DB_USER', 'wordpress-de');

/** MySQL database password */
define('DB_PASSWORD', 'fjHAxxGjThaX6UC');

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
define('AUTH_KEY',         'z{wn</S,kOQvdTQi@%}?-N]Q]H1m:oT3(Azbx]b&72G4Y/7efzt^pLf@J`f!Vd/v');
define('SECURE_AUTH_KEY',  '=ZIl/E~|  X*}:Aextl}XX/;]zIKb~S4_S,9,I4U;.y}Fae_}>aU;f+e}k7i }1J');
define('LOGGED_IN_KEY',    ',2)|l87mEx`G2vM$UkK}C%WSx+OI5LK^so|(4,DP`1#pPC9Vldz{ZSM-9,Z+c<S|');
define('NONCE_KEY',        '76{V[;;wsX5lFE=,/%-+17Ig `[ [KGTN#mW{OnwX&[RzU.8Q;_d,Vh9nl(X+ZvY');
define('AUTH_SALT',        'WL4^sDd;K(,ylj!=o&H4E`/&b.c*w8k!E%OmKU1=S(NKhJ46Tp-(M2[p@Z%U@feT');
define('SECURE_AUTH_SALT', 'oUxT)XjtQ`uMu)O=QG,Y)Z DyvuQ?|k:$MIF+46BW+a<6EeIoj^.{2ot<#H/U(Fa');
define('LOGGED_IN_SALT',   'E_>G6 %&IkD>vX?+K}_V|F7tLiz}bucIWWkhWhP158SkNv^EJ6+t7Y+I iIOAM5`');
define('NONCE_SALT',       '+7Y5.y^%FH-}$X-6jec1SSfd!1~8*h>PwBrJz2wUp{k`$@IZCaSr|sSX|r@4k|>?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'de_';

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
//define('WP_DEBUG', true);
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

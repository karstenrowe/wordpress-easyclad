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
define('DB_NAME', 'wordpress-easyclad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'W^DKXzO>bz<%IX0}m[OPu1ChH+jC?ec @|pKS%-+/mg&>Sd:#g&w4p%-PCNb}o2|');
define('SECURE_AUTH_KEY',  'M- ER1l)G8XZ48:n]+,`m@(#l24m6INp^(O-D5w2@!Q5A;>]{l-,Us0|1?[1ApBb');
define('LOGGED_IN_KEY',    '6GeFbTfYh}%@0M+E:g /r1q{>VnzkLCC]cM~SL_UE+uM@89|A>L^7dY%K,r6$m@G');
define('NONCE_KEY',        'L~-(SyH6<7-2>^T@W[?^%pO5k1+^P?B+:o2f+F&5P(qaN(S@!OgWbO9|Ul:TL]NX');
define('AUTH_SALT',        'F}3U!_%p-Pn][DLgFZStL_UpSy%c4F8p/WUP5}-,=K/O-uu}r`V!Wg3QoepeS B=');
define('SECURE_AUTH_SALT', 'v*dX>pjW2nNKo`~_;vR;xa%BO6+J_g-`)>{;o%e?7GX)eI?0&wI$C)]wu4=cy|Z$');
define('LOGGED_IN_SALT',   '>Rgs,+oCgBb#|gyCl|o;j-5jrQ<eQGo#ktVV %$U c`,*Nit)jtkeQo_1aq>*[e?');
define('NONCE_SALT',       'Jv V_UP<:OUIN*S||)-R(bl!hlxFwSxj@s)*}]pXh.Q$zVT;YOmD%Z$Dx>+V6dJW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

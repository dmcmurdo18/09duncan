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
define('DB_NAME', '09duncan2');

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
define('AUTH_KEY',         '9s<FIc%:rwd:Ml}OQ%O mzu`ZZRZ=H51ALhY9aUuNE_Oaa?FuGS^if%{|GEh[Oh ');
define('SECURE_AUTH_KEY',  'sKg0J3e)<D9Hm-:+4Y,9{:mh&|?XiZnzK-ydDtF~W)`XPfCJ:g~PHHX%eT7p006S');
define('LOGGED_IN_KEY',    '(%Az+xvik xBOXrI_H=+^$N6D drNrntJDiFy%Hl?w`qe)VnsqJB]1KjTBg_5*ye');
define('NONCE_KEY',        'L#VsP;02Ea.k{>_W>0ST)>cMq].)tN|Xp5]O,M;O3>*}kOV88rSo~2DCg+!#+*ZN');
define('AUTH_SALT',        ')-k0O`D(]*cwb5po~S-o#C$Y>|j`rpw=S|{@g=.s_qtB@ii9MreG?B(udG{k,-<,');
define('SECURE_AUTH_SALT', 'Gl0 HBch/cDt?S>E+WcI,FexwG@RKpK<*K/;shQJ^Gpq+WsxpO  DaB4j{-15?HQ');
define('LOGGED_IN_SALT',   'd_VwPKBcquJCH+v`;R;ecU#jo1{am=],sLXS7jj_~T>FHBF*<xtnOnZ=T,o8tk9S');
define('NONCE_SALT',       '7sL0w!{KdUl_{p*5Fv3x}5rykQA7IOdLgx~38*(fQFvRz>z@%O%<~~&+O(dM^6dr');

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

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
define('DB_NAME', 'goldwatch');

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
define('AUTH_KEY',         'ZGfFmx*[%*jPy|s^K#t+S2q!f!RY1ctIe>V;5,[a!aTE`9!Vt.Z~].AwrfYKCHj(');
define('SECURE_AUTH_KEY',  '0nXvZiDJNd#@o=4w:nqAE(X?NBw6)w#[$N0`@81[AV&w[PaZgBkE?!0SM0p9?;&d');
define('LOGGED_IN_KEY',    '*<j;Y[Ruvm,VI=,nJ!j*@YZ0(zXf>ayOa;NdHNqtnV6!/EJptfZU9nV/E:27gf:{');
define('NONCE_KEY',        'xVU(ZWj07;/E_PKu_[[YQ>J%i0{4a^I{?D]!I8Bf1 GZGp:GlvnUEY<l{z`*i0Oa');
define('AUTH_SALT',        ';1L-;?6$JNtt]j&.m+s#.@!d}q}Bql|?<:zl^_4_&_$JFt~x4}FAb=hY>2$UZp ;');
define('SECURE_AUTH_SALT', 'X-+em^w^pWR#I!1M=x)U|Okc.$.~+,%[4[atz/mR{9YV0{T`4~({ O<2m;c}<>&(');
define('LOGGED_IN_SALT',   '|H<GzxmM }:#UE/,I-91(gv;>r+b{Mtc8UWfvxt/[%P*7XJW$-65E.8*(XV,Zc&b');
define('NONCE_SALT',       'dB,mV10Q6!T1_:V?/,f)zImom*Af(M%O ~X5tF)fE3I=z7W6l8%Qu%ItX*UOpeC$');

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


define('FS_METHOD', 'direct');
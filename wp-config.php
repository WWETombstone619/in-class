<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if( $_SERVER['HTTP_HOST'] == 'localhost' ){
	/** The name of the database for WordPress */
	define('DB_NAME', 'brianm_wordpress');

	/** MySQL database username */
	define('DB_USER', 'wwetombstone619');

	/** MySQL database password */
	define('DB_PASSWORD', 'dbqBbGMcKsWY5aXf');

}else{
	//LIVE SITE CREDENTIALS
	define('DB_NAME', 'sp1dermn_awesomeco');

	/** MySQL database username */
	define('DB_USER', 'sp1dermn_awesco');

	/** MySQL database password */
	define('DB_PASSWORD', 'c0?EKvF8x^,0');
}

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
define('AUTH_KEY',         '9o(0cfIj(xu*o,N~RMzG5g-t!l%$I(U]Rd+7%sUf~%`HUJ]M>Uk?!e4v+JH?qx,t');
define('SECURE_AUTH_KEY',  '8Tt=Q.mn@AY4v+Hn-u,6j&Pq5doJXd)8?;p w!ZnxTj^$cjPo&|0o+uYvArekPE2');
define('LOGGED_IN_KEY',    'uo}Dp>cP6XeC<1Q1<Wmug*hFgckZ?aQ^l(5+!7;<9`ERFKaLY-BfP&i1=(TroSZ%');
define('NONCE_KEY',        '=!tLK@$$+nSAe m;pw%_0WRaXR>y1|o`F^XbZ&uW.:+L;iSgI=_ec(?[<A=Fei3>');
define('AUTH_SALT',        'f;L:zjH>*x(5+c{!0+F)*zBjuw>K^/:S@P2;Llft]u |Ing(f )qpXY-3mD PNyU');
define('SECURE_AUTH_SALT', 'n2+y06LU&;9n#K&qS0H/:OE~D$>=M7P!t`(q#0;OY}:]u+H&P6h%4-8JPi@C4fo/');
define('LOGGED_IN_SALT',   'd(,n:c[h@&<0Pf3HeL{B%h#Amn4(+KqzIxzTmlpEoz^D=7a1=|K>GZA)`,[+.{Yd');
define('NONCE_SALT',       '5]3<Ea5m}T1gK-as.Rdd%+lM?(*IE*Q8UmImSC`-h7|,qYE?t~o8%E$Y2Xz*2x/O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hardware_';

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

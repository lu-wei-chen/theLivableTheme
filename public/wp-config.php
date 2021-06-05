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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'livabledb' );

/** MySQL database username */
define( 'DB_USER', 'livabledbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'overcome loaves sociable' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql57' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SDiN^-B/yv<1`9vp-.*KHh:EH+ke%0NgA^7_.82#B.w oKQF;]&Il#;4uwstc?=.' );
define( 'SECURE_AUTH_KEY',  'HFasx~7stOGO(?$fc);%${D]/TUX4ZZEE_Lt18-WiN`MX{melyv1zFwH)HoOboY|' );
define( 'LOGGED_IN_KEY',    'RrS!;aN*MXW0JGq~NVND6#T,TR|1Ae#)R#jO5OGvT]b[xYJ?Vm:Qoa),7Q-^KvOj' );
define( 'NONCE_KEY',        '@pVBCbZ[~O!{HN/mz9OY*p:j j|rear;*:|1HY&fU(u;GUmBm+;jWY<{z*|nu?S`' );
define( 'AUTH_SALT',        'IN((js_MgS@Ss)O$n![8[o0S_/.1+Zw[&n+dakdp&r]p{Q)In50h[1F]{a[):n}O' );
define( 'SECURE_AUTH_SALT', '/NmF21R>+Jki&UyB32{L^emv#V3T>e4^/*8I{75X*X>!Z!]hpI{13)p9Uu+duqXw' );
define( 'LOGGED_IN_SALT',   'pURN;2<!2@=@f5nB;$u1JV91$J.(pJ|<pmX4cW/3oY{<1OZS/l.+=n]:#w09|7 c' );
define( 'NONCE_SALT',       'Z+ee&S7&s&Po,R{()n/2j4178}6yI^TzlG<?,;&M2<7)h:9a`quI9s<,<0)?2<.N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

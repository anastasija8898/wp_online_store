<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_online_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Re31B=Y~|>zia(`qTwy9OuqFw,`L{y^YoydATjT#W0vgd#c$2EC&oyA>wMzX=YrZ' );
define( 'SECURE_AUTH_KEY',  'wOtkv;g:@+=j;B$sUx?E@IpoFg^*(2o2Xf:!):1H3QW6asl1Z[v#%/XDsXYXst4n' );
define( 'LOGGED_IN_KEY',    'DZXn2@ss%JU_Oa=rjMDBOifU-XltZ?6}LqO^Z.T}!-c.h-JZ}em!1PPGJK1LXv y' );
define( 'NONCE_KEY',        'j;+(_ScQi2?8Kw[zs,aY2(;MSWIfpkf`{M+1nH:7&xka0s8U}4GSy*7D8)Nwue@u' );
define( 'AUTH_SALT',        'm?aq4BWH<,/d8)WTk)V;UWq=}w6tt?&3?{m9tfj[%!FpNd0+@2B.sAC,Wet-6Xv?' );
define( 'SECURE_AUTH_SALT', 'p |`[tEd#K/&^;=2o.}a)]-(5_CAqd-zF0OC-_YJ#D)z`<|jksgrlP mkDepj&&}' );
define( 'LOGGED_IN_SALT',   'JIGQl~oY0VN39jpxhrK/YB!Xev&E2bAOwj8Pa=4(c?TRc8oq#*6Ym``@63Xt|w[R' );
define( 'NONCE_SALT',       'TNXm6R67|n`>;Rgx#2|Z:j]r;mUorhF{dLmwSBwUH@*{Iqbm]|.@?n+fV[UlE.8h' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

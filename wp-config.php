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
define( 'DB_NAME', 'dentiste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dI sx4W2E q)28aBQ9&@9A!NC5pyL $+Lu~(!JUI=5yuX:!_IgM-uqN$,@^Ikmh/' );
define( 'SECURE_AUTH_KEY',  '|nVK7?``96,oK|QU)k9>eT%]Xp9s78d<o8w9ac[Cq%`S|iuJITx+7a[3$k#2ir`l' );
define( 'LOGGED_IN_KEY',    '7&<*{rFP-6Oe5sYeP)`_DqK[l.riaOvdIdDv:c ,8ikw?%JfnTSDhC^FuB}LJMqq' );
define( 'NONCE_KEY',        'pqxmCr<,nx9I~p(j9M=Qwuu6VN4r1u;_3$;P0Q+|:NPuwwN<r56iq/uZz,yjM&0A' );
define( 'AUTH_SALT',        'w?#p8sZ^#1!K5zAlsTa2jTie5hrZOX7.$waW5{i=98m>RoBW>y i;G01Hy`3cXv{' );
define( 'SECURE_AUTH_SALT', 'tQ%!Tvuwm!.wNDTG5@P=:*[g=7U-,QRkRt&J{*~/!Dwz{T7kj<1xSk4Q<&l@%q4N' );
define( 'LOGGED_IN_SALT',   '*l!%sE**jW<kIpQMe[G;7jt0XX-nvT9X5o^)gOsi5!{-]~O:pG[Ll$p6B8GV*k_a' );
define( 'NONCE_SALT',       '(+1_G#1An]/8WA_1&A4;5-Y:=Kuz?YX,Rq-*d .U.W{[B}LVV*NW$y4N~/cvEw@D' );

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

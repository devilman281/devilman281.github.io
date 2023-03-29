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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-site-db' );

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
define( 'AUTH_KEY',         '~[ntN7JhVNJIa1Jjdk]xBzh^;hgdXRf)eyCE&^>QnG-1nOTqx=-s(!$[;L>7?W74' );
define( 'SECURE_AUTH_KEY',  '@`<wHC8]1iA*D&Y~w~yZyc<ko2iNel>-fQ2,Z1|3ug0S/hm_d}$!b([~VT8/.7*b' );
define( 'LOGGED_IN_KEY',    '!(UMcN?%MN+GKlbcs2,O0o_KfyacB5 0`j-8B )rD}KC#i0[RrzcdBcM<@p(vpmp' );
define( 'NONCE_KEY',        '*gq@8BZ>@>y:wrA3]Yx0YY5wZ=Pl-MBjbY {U^2vjTH5h&3^rQU.-5aJf0$8Q(B`' );
define( 'AUTH_SALT',        '5K<HMlh}_En*X;b=M&?~[^>v|$Y@(;vg1F8[]4;7G<z^owuiYWe#v(Dd|/_TJSKn' );
define( 'SECURE_AUTH_SALT', 'c9s$ZLUy~!_1z#uzP*wJ!7B>_cp:z-9Bk9$qy|HFHp([@>xC7m&>!leXFkbx-fzr' );
define( 'LOGGED_IN_SALT',   '[_]3g7WkzP}0:P[!p^1y/*(jAI<)]J &4|Pu<u<d %eddu#gsViv)_W2G>8@y^k8' );
define( 'NONCE_SALT',       'S6h`mb<E!%Il~wSXTCxRP4iZ#:;]kvnvwTLqso^aN!B*wrFknb1IRwoh6BM5nmF^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

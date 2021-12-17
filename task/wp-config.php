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
define( 'DB_NAME', 'task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`Q{MCovg=Z{tl9F,&gUb~`{$j[mS~i5$F`S@nBF~vzwkK{!%fE|r^ndmn#nNf6E+' );
define( 'SECURE_AUTH_KEY',  'LxUq}5?FJ9J(c@K`3A0ON#1rqT9IP65Z[eJH&e;sQy<Xr5Tqi`0?&q~Lm68=$X{T' );
define( 'LOGGED_IN_KEY',    '.8@N1=C >h)Q,+TPcjc0T*lM0$+%YQGI8tfi[[RdpHE)aS3CY7dMH=YIkr.-<cli' );
define( 'NONCE_KEY',        'gen.h=S^M~Nxv0R~6LpqCA<%_ykc:KYj~:BzF>ZKk47P^&Oo?RJH(^E^KlyeC6|b' );
define( 'AUTH_SALT',        '8uRQjtWtP[W!Mr%u>2Rrn2*$6X]R3GG7K;TQWb,[1Ue+-liP7Mbx;/sG*;9/?OR ' );
define( 'SECURE_AUTH_SALT', 'mkEz-snIKwlq!I:js+;Cnq{.d<39o:>.O S,}=e|]Al(A;^;B9v{XDuUid*)=u5m' );
define( 'LOGGED_IN_SALT',   'K/HtrLeQD1&(]c=_04%rr.O .CL~%.3*4-vCG?6wVb}e&|TIl5[H@JpKn:811dR6' );
define( 'NONCE_SALT',       ':sgZD}ye>clt){BY-febs)bK^CNg/~sS8$A{{R&x[<XL2+tk)ldONpb(>8ZImraR' );

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

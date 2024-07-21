<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'growtomation' );

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
define( 'AUTH_KEY',         'T* QX!U|OB$0PZU@Y?[b *AuN};[;aP?K)R&IN+(F(c#z5n2ge7WvDA8<F$`_1Fz' );
define( 'SECURE_AUTH_KEY',  'N9F#D>(M4Qf;_t@5C1jL)[sC~9dwK%KH7=d3MC ny+:9t]LhpcrXankR`,Ps~yu*' );
define( 'LOGGED_IN_KEY',    'sFtd)dv^,mNFw%P&w7)mG*H?Y^f,N{AfVp{eUyGztrJdXd{P7U;(JEO6e[EOZDw=' );
define( 'NONCE_KEY',        'Qj6qi*8!BOO4m:=%|_W;:oWh9#iP7v0a12[.1$+;}AHe=My$1md2-K-?.IjiWDb(' );
define( 'AUTH_SALT',        'u_T:;T2V3~yw#[}Hr%$1d*h,b G@~P]/<jgIhV)acFFxFW*7SGVi1?^D!/|(kS*H' );
define( 'SECURE_AUTH_SALT', 't?<Hth2:F/IXoGh.*<^];o#laYU~8Sp^O0cASu)4+E}(uz1[I Y#pvb=>P/ykUW3' );
define( 'LOGGED_IN_SALT',   ':uMV[G7+{a^.I_#$g{KmuQxwL3$F,$4NvkqkBzXiXm!5k:oI-K<nHK P3;:aR]#&' );
define( 'NONCE_SALT',       '.28(,mH*gG W[B]W!G-qhLuVX.}u2m[p&Q{B(B2mvnDfAB%yQ#0<w%6;Mv!a$)5-' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

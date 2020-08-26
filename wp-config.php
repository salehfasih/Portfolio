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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'uZTIzX?$; |.j^Rd5{bMggPWL_:+t+a,H6[1s#`XQ KW@;-2b-,RQlTDxo*t-?<b' );
define( 'SECURE_AUTH_KEY',  'Eu.!En*<E0bJqtm?4Ss8Okr?!|er!}u,6O6U[m_?J)ckC.ym0!EZN3z,!YK+qZC}' );
define( 'LOGGED_IN_KEY',    'L:EC$&.nFjGn+o])`z9w?lG2~#/QO/lgS<1%oZtGJHWId:?{- T0NT(Wb.lia]g[' );
define( 'NONCE_KEY',        'O8mlB}?Wr]kG_n/>t+<tMj-;9/.*|w_:m(J RDMR{kZyb{)8lG1*qI7,L$JM%6Wa' );
define( 'AUTH_SALT',        'ta)qAp<#gl>O.b06VjOZpGH-N}oqy8gJ9E18XaT }c%BrI&Yk]Y_|1&S:W>Ejuu=' );
define( 'SECURE_AUTH_SALT', 'pD@>SMh9/~7at!iY l(7Enn XA]q4SGIbdGTrCvf:Xag}#TkR:_y501ufQc{8L&S' );
define( 'LOGGED_IN_SALT',   '7fxK^:Z@O%Rr{a[g6bWmd,2?6kY}&lagpM|/WOs8[P-*e27m2j[=3wCwUwoMq#T5' );
define( 'NONCE_SALT',       '/aYE,PJ|*]^Gq5)1mt-54muZu~v%K{]~NsMxZPubi7R0cka2-dO=(J1Y>]koFMk|' );

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

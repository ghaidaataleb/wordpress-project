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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(}7{^Es:QJz:5N3]Wg#tp>i7!cpnmTH(3<dj j$ddZ0vu%kipgDPHhF)#W{n^rTc' );
define( 'SECURE_AUTH_KEY',  'z^DV5#N(tq>LX|VCZOcstN4ve&.Wt/;Msj;$Y>8OEave25Y[[Y^ (qa}U=1BNEk7' );
define( 'LOGGED_IN_KEY',    'm+9j9V6D|#0F2<]YU%fSwkiuUNL3~(t+<{tH}B!#P)DlwHsF=Z]7?(J JO]{v/)%' );
define( 'NONCE_KEY',        '}BQCHi`JrXZEZl}TFNO~y 2$.7@g_j)kJQ#*9fCq)CEVNPNaR[$):c<X;~bjQx!l' );
define( 'AUTH_SALT',        '@(,>0&4@ LO2ttkQ`0uXs-/%!lo$M^<W?j`a6j(3,gIW{: I#`,06<N7&qfQDhSU' );
define( 'SECURE_AUTH_SALT', ']~dyy zA}.+Wr/ES~qJiDw-S$kxlG@ !cgk5zZ+(_e$t:ih8L1MabS]_;R6rnG^c' );
define( 'LOGGED_IN_SALT',   '}d^O*[It9rLovJX;c2;~#xtw>BXA^Y*fUbG+u.k1MV$lA~n]*RZA0l8o$/1&fES_' );
define( 'NONCE_SALT',       'u$,zQB4HL.jm/Zm <l|%<Ni3K~jafS:??pWsTcsE$_``~-0H1_jHlMN~:=+%{fyT' );

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

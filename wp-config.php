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
define( 'DB_NAME', 'wp_app' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'Mdt!,s[XX-jBQGD-c#oLf4,GLKF4,_ u1P]E(bR?&<_^LbT8s!:`+WpJ,M62L0@0' );
define( 'SECURE_AUTH_KEY',  'L]b-hXtfu ~?/71B-A_-Cc0=o[=Oa|:^7y4(cpY/rSo$w-4{_p<:a-g(}l>+UP<=' );
define( 'LOGGED_IN_KEY',    'l(7&8$Byi9avM]@F42izX:p~I$h2=V0KPU7-{u;,*4s?bc%_#M&s%QLo2`-nN+0H' );
define( 'NONCE_KEY',        '%1lDOn~2[gbb?<&mJ8)^RG8zDo3C|=m(VDc=po1&L[`/p?gHq+NovB6]G}6v=|G.' );
define( 'AUTH_SALT',        ':xJgk&m`.+b}9Bb)<4dODbnlm91<xeJw[/@As`Q8#x@;x*aeg:NYl-tKB:!`&~pa' );
define( 'SECURE_AUTH_SALT', 'Y*6#`e==xE^Z-]p66-X$g6r2wd?p~i>>eL-<-9l]nXI!XGe/Iu<`e&8W<M[(~T?a' );
define( 'LOGGED_IN_SALT',   '|s UG(E=$&#ff/K2BI)ockSNPb+|:X}aORdlY.Zg<}r0#m#nvkv+&l)l5r8V7ijB' );
define( 'NONCE_SALT',       '>:bQGwC(u(xc,x-[y(Hj }.K()6/cY++*k1Z1{U[hBDyP8$H#(_D{XHDUt4bjkKd' );

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

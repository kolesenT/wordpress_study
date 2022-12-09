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
define( 'AUTH_KEY',         'Le@@CxbVg yz%#xFu<TtY5Z?MKo]+4Y2k4A,N*sw,qL:NI`kan^GYF|>W @Lc!<!' );
define( 'SECURE_AUTH_KEY',  'a!/<9@;Jp}Ro|@AJ~%JQk]#,pS#X>`oHs=5e[+,/bM55PQ4#[a,k~NCA>11>A.5/' );
define( 'LOGGED_IN_KEY',    '$OxPPK)__wLu(pg-ek6?~ 2jI=!L5U|UL2fT_3S1W*#]CypUuHF[E/Fw!@Uh;a6`' );
define( 'NONCE_KEY',        'K[D#/R8Gk!&{6jDGe>Qbi)3uY+n>/huZE(qU)c X5 }VN~I.{@/E]W:CUUj%8yus' );
define( 'AUTH_SALT',        '!+/5ZQo19|Y!+`>2)NohC3y?Lr~M3:Q+*Nel_ z@FBQQ~GZT|C:4VjzVL^/k##:m' );
define( 'SECURE_AUTH_SALT', 'vYk3lm^9ikb&T4 hu/T ;I?ae%b4IG-e,`Y5/<o}6^uk4?W.l|;l?R2g(NW:a:Ag' );
define( 'LOGGED_IN_SALT',   'TD>sq`U@Fm*;BGSuBkMLCvOqz=ZVOg4SCVwCr5^}oCq@*-J*IJF0|OH2be%RoJvC' );
define( 'NONCE_SALT',       ' P%^g!21esid8v4*iE,?]Ta]kO,XkMqaUo4AOCHNS&:#E=6MpwS7Y5^(K P0S<I3' );

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

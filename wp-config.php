<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'test1' );
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
define( 'AUTH_KEY',         'J5cvkAsHL^?&y`Q?<mF1)nD`_Riv#;A?#HH2Pq,P=uvhoS7~cw&V.WF>EcK2*zMj' );
define( 'SECURE_AUTH_KEY',  'T6X7yvL{br?h7*})C,ZwuI@A#`_@?6?CwBB-[mijjdzajw@aXSMQr-5rgWD^Ir_q' );
define( 'LOGGED_IN_KEY',    '4RyK/>SK_M-70f5)+{jTfkDuNu7Q}$?x>ay,y<x+rmR8W+CAYvXjILK.# rM 4%v' );
define( 'NONCE_KEY',        'HNRUT}f!n~ddao2hr6Yi){9$Y9l6}NN%!wlt0v/30$cuCQF)nW>2%;}e_WvN%j%>' );
define( 'AUTH_SALT',        'Bc2WU7p8OSuwtc[TD[@Ypz7Bu3A AR,G==WE(O%SQZx!x!i*0uO?xk|$A0_ja?R]' );
define( 'SECURE_AUTH_SALT', 'sJHrRC$ArlCH5vQ?V]+XDWLZ!Hw4gK Cn$N@$88Ws*9k0fdiUsig{<aUuD*3;p5]' );
define( 'LOGGED_IN_SALT',   ' A1V93;u})>rU6MM=]/qSNZ8hT~(;V.H<Fdc[t%i~:MEt,[mc%I]U/ `yB&nmDXM' );
define( 'NONCE_SALT',       'rT*ti{3UADxG$$Pm4/2Z<;XJ_>6Pf6mxR2+}8iIuK/cP<]Ye;[AejHG?g#~G4fwF' );
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
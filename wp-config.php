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
define( 'AUTH_KEY',         'AM|s_`BLc7^^^J/U)=o$!-@0b[TX]~YBSB=vA=1ab?71ij1C%AoNhb{+%IgWd!ka' );
define( 'SECURE_AUTH_KEY',  'C:,nWG=4 XtP;q*wZ?M|]yno!@_uwx0K$lf#n%5eCCy+p7?>Nuu.21}FHf80eX44' );
define( 'LOGGED_IN_KEY',    '?V7oAz,P*-S@ulT#$+:Qa8I3nJvQ^<KC%QM=&C]g#|k<4Q,Dv={1(Xb}I${L/13?' );
define( 'NONCE_KEY',        '^z&N=#mudKxo>cr,dW2BcXk8zbU:AOn(Qtof29u1itSthEZH4WH*?wt1ihNWQ/Xu' );
define( 'AUTH_SALT',        '{#4?A{9>wQ3vNYJ*GN+x<%((tP.U&FY7X!i;jS$byTSB1v$i/ }j}cW$2mzYiE=)' );
define( 'SECURE_AUTH_SALT', 'bM1;+ENJ79c]>]as<d_6A*(IWR?5g0o9X,N+~+iz:NMQS+fd]wk1K6L;Q=K+{quf' );
define( 'LOGGED_IN_SALT',   'k3!cFH9GpG1uMVx|xCJy@c.MtY~C)_lWQqy6=MZ}ompL]<~7weT-vQ!;QNO5|QL%' );
define( 'NONCE_SALT',       '{Q&~H v}sT!`ira*Sve4NS2zwRX6u|j[IRH$n_uo<n0H^^q8LkfhVcf&t4^E#,@v' );

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

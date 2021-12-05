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
define( 'DB_NAME', 'Luxury_fashion' );

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
define( 'AUTH_KEY',         '2SO.x2(=JvRA-=_1ov0n0_ <#CFTCOH!e F0^{vpqnpb+-R BiOcMU[cPdEx|2P0' );
define( 'SECURE_AUTH_KEY',  '8HVn[,Y|Q{{$D42a*M0|_[vq`X|*@9?N|Dn`q{@n^H?Fp[a~H Ar[o=%:1Sdv*J.' );
define( 'LOGGED_IN_KEY',    'y@JslxP{K3tDvN/Z<tiC^S`6cKdJ;m:yymz(:,7ho4YTK,8zw45PN-qT(n3o9))0' );
define( 'NONCE_KEY',        'CFyZ?_=eJPnM,.E1D0ib=[$L|?a(:Hnts(}x-PZx}Yot:VJQF-?B4>W?Bg-*01Xm' );
define( 'AUTH_SALT',        '3&f_q+R$s0GP$z<8Bn6fcW*.b!RmCIlBba+1He*X7rmYvDC6H%<Iqys~y&#4>vEO' );
define( 'SECURE_AUTH_SALT', '^f$mJZt}x9rl]y 8J]{,d5xf`msJPJOe21tk!IF#RMWija/LDJpPxSJ{w}4ccgvb' );
define( 'LOGGED_IN_SALT',   'l5+xO3t!7Tm]RHDN(?{V1xQ{7TWT:<MKUStMz?([6CULlw|-X_G9Jj^l0:`|Zsp2' );
define( 'NONCE_SALT',       'U,{E!8lSUljM e;]s]L/`/%?ibs$hT6;/Vtrg6/r^i{jhWM-a=)YYg_yOP9XK:2 ' );

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

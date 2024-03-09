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
define( 'DB_NAME', 'alterra' );

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
define( 'AUTH_KEY',         'h%7$LF-H,K?1$VC+!/#c4qF[)eJ^q#P[}zD>R{<*jR-;En}dIJ}Z2_!af/%6qH:s' );
define( 'SECURE_AUTH_KEY',  '-l~HHJzNf#S:}A}%uG(S)yuq0:A*kTa[Mw&fd#k}-qOtjZHU9.}KD&uOC/y<%~$B' );
define( 'LOGGED_IN_KEY',    'f!qr]G=s1WNL}KKIhB>!7Xa. rNa/88z3I+T=/ju1@`%KAA#)0yH<#3p06)nKX&m' );
define( 'NONCE_KEY',        'ne.tF/a,sfdGn%wf)l1L)Zilj?c{&|f8$XtUiWUah7jDX7%@50$4TRe-B<)$Ul+D' );
define( 'AUTH_SALT',        'G18O3d0|0^A9VFkwL!(@0_kP_jsX@.4!$#tfZ;[}!0p}fn}Ttz_~5}n6XYTKxRX%' );
define( 'SECURE_AUTH_SALT', ';qI^Wjt@cBTfE,MNAa]l8@wxdE)IMMu_!v`P!awtBt-~XV% ^{UQ)0rg~&~@(C:j' );
define( 'LOGGED_IN_SALT',   'n*$5+RONWgY/o&ZGn;l.I7zFJ2dj0Sp`<UlxcL$v5o@n*6g1$}>|BqY@KFEdKt!O' );
define( 'NONCE_SALT',       'vNB>[l*OcJSy,o[o+,s1i YxCM_KmYA]+?qh0m9Tq.{Srf=dv0$X=S;OBJH<7,j~' );

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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rating' );

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
define( 'AUTH_KEY',         'dS:A>.mui*m#K/j<<=~I?8LLvZNgLz^!CrG,wj!U=:b>KeZ2vqu-D:};8}d.NIC(' );
define( 'SECURE_AUTH_KEY',  'l`iAxVWXr24z*>8=oHtmnqKe4k$k&s6qoQ{7VhtWyq$Qi0z7.Y*e+&P5Y<)tYKA ' );
define( 'LOGGED_IN_KEY',    'mOv/F[5N6U?NV<o[E1@XRS@wRJR&?fsO.oh,V/p`ISjxeT7{=T{mg*2 oG=OVqAP' );
define( 'NONCE_KEY',        '58zZnY#)fjY|by+5F&@{3@gyDy(&[A)G4~/L=Ew~j{L(A%XAxctQ,hFyt);LRZaI' );
define( 'AUTH_SALT',        '`qbl65 ?7BED2XSxaL3ZkL{Lu[a|y(|sOLHL%4W<eC1eItG7%GsUEFCDsq#gN=I5' );
define( 'SECURE_AUTH_SALT', 'CBsg1Zfc;+s`Q35iBCWc5a)y{JZl$B{nbS:`Ev|YhlK(o)Nra)~%a8ToXR`1X<Xc' );
define( 'LOGGED_IN_SALT',   'Ok# Ks[9@g2j]Vkz/}[.02)F!5 qnMA^t&;oE)Sm;_ (h;YWC!kt1:;L%cLUB`Qv' );
define( 'NONCE_SALT',       'Ft[;[:(ls%*]trh0^d,&Cn_3nyZWcc)oM5eGSdiJm,e/05DHdoc/wiK!QCmb[NJ)' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD','direct'); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );



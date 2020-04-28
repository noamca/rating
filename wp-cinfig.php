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
define( 'AUTH_KEY',         'a<<n{.BL;<lmSaY+6cso5TEdhkn:klp!0H]d`oaU!,Q16VwZb?R/woB>)[$8qH](' );
define( 'SECURE_AUTH_KEY',  '*Cae<CM: Y*_&r4p?j]Hm7Z&KgiLmlWtK<KP7]U3&-zPYYzQ$1hRYx%N&#8&$R?&' );
define( 'LOGGED_IN_KEY',    'j/02OpHG9aSYyo?.?%u;j-fFEK~rj&k>(lzrTdXUjJE$0DEAH@ml/,GDi!jFt<JZ' );
define( 'NONCE_KEY',        'ADuF!R>,p(E4b;{T>.lW+H@RsjaWahA*$8LnypA(yxD<Vr+8h7l|7WlywPg%-t3d' );
define( 'AUTH_SALT',        'wz<6&}b$JxOI^A=377fBz);Aj4*Y4[(0t4)4Zc.SF@qVWiu[l+#h7w5GEN+{ZnAG' );
define( 'SECURE_AUTH_SALT', 'B2_KR]i4=X#o7B^=)N-4R)<lq~?^l)1[4PPz6-iPTrPZki;Kw~C2Bw`3T;}h0oZ`' );
define( 'LOGGED_IN_SALT',   '60M-UYLBjn$G5VnB({CmRG|S0_ZD$$9zNjRL~aGEe[]hL`cgKG%WS9p{wrM*`qLV' );
define( 'NONCE_SALT',       'OH(QRr8i^FkGmh00P/e([ag&|{8YqAIFm]DRql:R,9q6hXvy&yvc PF|d<+.p4b3' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );



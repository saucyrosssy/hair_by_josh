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
define( 'DB_NAME', 'hair_by_josh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2J1*-%d2Qd]J~-vS<5B2w|/8fVD:<04.p+gF~JM#1w8F+Vy)h6D8URT3pqW=Y+;y' );
define( 'SECURE_AUTH_KEY',  'O4JXk-{z=O;69@_gf{Z%Ps6K@=)q|A,0:|Z(#Vw7$PZfZ)E5G1--Y??:@q($y4-n' );
define( 'LOGGED_IN_KEY',    'nC(.IGxe~b{bT;]>4a}Gxs erO~^1UE&oqdEYq|:lQe)Q+-}@;0UIY}f?afHw.d ' );
define( 'NONCE_KEY',        ';N;1/RI:B>UOmUkiB[#VCjUHpoez`Iw$u;.K>12/ @OWJJ3g(O#084g)iZJzcNgQ' );
define( 'AUTH_SALT',        'h?u3Yp0r=T9-lzh>gPoodD==Uf~/ALOt-:uCL4+BfzmCc&nA@WWOqSr$`$h_N@>9' );
define( 'SECURE_AUTH_SALT', 'uz2[q!pehfIIw@vqNfP|o[M&fM0GdfoIwDmVzxQ7#E9/6NRS)2F8`p|&bAja`MM9' );
define( 'LOGGED_IN_SALT',   'oS|p5|:Si<}JPh9Dm4n2jW-!Mf/AsfCT<-$tqN0Q;^>:pK7 29W{]eE<Ww)K2~Uv' );
define( 'NONCE_SALT',       'Em#VtkuHg#Dk)/=|rf6e%Bt4xw2{Id2b9.Zha-qnM@P&^9=%^YRf-E(>2R XyU w' );

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

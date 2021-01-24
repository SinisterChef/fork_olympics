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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fork_olympics' );

/** MySQL database username */
define( 'DB_USER', 'sinisterchef' );

/** MySQL database password */
define( 'DB_PASSWORD', '!SKINNYfo789' );

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
define( 'AUTH_KEY',         '@Gcc#3VU!Fa685*ozE[|}Q+r|xN:~=%GF4_(-9yG5o(Yb_:P:oF4ugAlW27jKmR`' );
define( 'SECURE_AUTH_KEY',  'Q;tOy80jo ^#2Q1Jbbd!l&,:eR*3P$+1f6dXWmJ d3O}:&^9iLvrDn=+^?]~~qKI' );
define( 'LOGGED_IN_KEY',    '%l:///qI<,M{;d+:Xn`Xpgbs#yopRq&z`yrn^9m@F4$/|d=d?7&, _*/)wiHvJ}~' );
define( 'NONCE_KEY',        '~2^9}/8FK_BVGF,#E~g/L(&<c4*%yV9)-T)N7e/oryN@m18|zOUU7~$eF!g[~Lh{' );
define( 'AUTH_SALT',        '/=^ ^ch--z}m6qDY,rJfg1yy{9p{}=-nRG*$([v7?(@c<+dV1 ffoaUlC$)!GsqH' );
define( 'SECURE_AUTH_SALT', 'uqv6(o0s}AvN{h/MZ_c,Xn_hIV`etlu]izo!r6nu.@0+Hov0sR9Ive _}kZ`Bk5E' );
define( 'LOGGED_IN_SALT',   'L`[mIN9&Rf5McgCGPif:x_}tzAZh427&W94k!h4JR:&}~.YH7t(6n,vq#$DqQaL3' );
define( 'NONCE_SALT',       '/OWmJK<Vv4q[8[[[}?o8]0jM~9O=RZ~Umt+K$bk/#WKQPuf!VG:0Wc c,&~fKi|<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

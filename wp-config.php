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
define( 'DB_NAME', 'kodingkreatif' );

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
define( 'AUTH_KEY',         'X#I,B;t|C2HdXMJ_R>n~AC1T,jB=a`1p4Fw+|(0bExjc>%JTkvEo!2aSmg{)_*-E' );
define( 'SECURE_AUTH_KEY',  'zz/_xL`LJ8(Ca2yJhGU#M>HE6PGYb}_Z!z:knC(K P Se1$54r{`7wSF>Mi Gynn' );
define( 'LOGGED_IN_KEY',    'gfUZ|(ibeohTJ:oZDL]!v.270k+>;3&`2gmZP!}UV2{X]P#k^GX/TAXax7UU4H]9' );
define( 'NONCE_KEY',        'l2|[Za;NNFOOt/BCd#LYQA:n);SWt,ge.CiSh!uA].qr%Xaj|Z;q@2;:RtT*r5!Y' );
define( 'AUTH_SALT',        'L+K$^3ZNl^D(oz6b`3e5i]Zl9IK1 pl#Z/6Gz*{q2E]3!VFw|TU68#*%l1k21&P%' );
define( 'SECURE_AUTH_SALT', 'Wg87=U=Tnc00=(,)X`4ioyS2xM-5Yx&`k5{T^4J{9EA,`QKD|W,D%f|rH^,zWIVG' );
define( 'LOGGED_IN_SALT',   '%>`4hM%CPuq6J9P2!(K-.1/Mc/&Z.j|2^Jfq#e9dhoG8f->x=p}!*PK<4iSq9G@5' );
define( 'NONCE_SALT',       '/)d`(Cd{6gHy-TU.S2T8zQz$)RE`=PSu5bXRnV(a;3E;T^QIE$P6[h.R!1`ENWwb' );

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

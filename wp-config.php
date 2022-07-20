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
define( 'DB_NAME', 'reviews' );

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
define( 'AUTH_KEY',         '0smGEbFs;3!)~yMp^4hp/LeWH=jR#MM_n)s0pXx~]~DD)#`}xz%S|W*B(LFS4a%<' );
define( 'SECURE_AUTH_KEY',  'zR9UQMp&D>DT&IORzt9i;_2^6n^WNLkK3]2{f:c`TNx+;#Cf-v*,T;/|^lv9+.@J' );
define( 'LOGGED_IN_KEY',    'Q5/po}s>L]$ZPpQ3R~S0,bgGSE/!i6ayQppbp-hfli7c*G.0`2)%W4,jIWQ`vy{b' );
define( 'NONCE_KEY',        'Q+zbn<*ne._2@j#43Mz%Uig4{umhBHp7TO3zv-]Z![[qFWZro(aDD.>Iijh/<?G=' );
define( 'AUTH_SALT',        ']D$^{1*}_cmwB*/@Psa@V[BeLd?Ph0?? um6r/!u(0J<NP7t<Thn+uQ0M!&J2-Cz' );
define( 'SECURE_AUTH_SALT', 'M.[8fwY{,U?/#MT7w]5_k4YJ)XU}OjLYGJQ*G8-^b`;{6RoSZfeH~%KZbRhN pws' );
define( 'LOGGED_IN_SALT',   'vtAzwj>Y]u^LmBY-_kU4(@+pm3>>wC*di:zeA@vi3NKP(p<P@/6wMPTKm2NQ.i&N' );
define( 'NONCE_SALT',       'Fk@p;icpjr)h _9s11D,PBnlH?{v0&ElV[^|Lo2%)tYP/&)1gHKC KwU5b}%#QqY' );

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

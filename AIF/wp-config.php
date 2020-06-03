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
define( 'DB_NAME', 'aif' );

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
define( 'AUTH_KEY',         '(`?uFV.tgXZN`<f3azu]LhvqD+z]D^l gk^:}[c*a~`/~:d|olfG!I6Zn>d!`Y6x' );
define( 'SECURE_AUTH_KEY',  '@LBuKVj*xmE0ZqpGJxP-;l^f%|-WN^MUD`)5ZJ~u`q.~LxNQL<=q<&<goemv&mr(' );
define( 'LOGGED_IN_KEY',    'QqR1p.F.NPYnM+rmNu ZSIz=06,Z4=67fT9Xlc%yh42eMqK!S21doF[}CPMvv`(]' );
define( 'NONCE_KEY',        '5W:A$eTk z&10bI<j&5z[[U /4{Yd?{wx|N?`d1ozc|4,txsm694}7jAgQu^WZ&r' );
define( 'AUTH_SALT',        'BX+[bE$:Ma0X@nV=cQlYrV$Z|diM[YYTYtN[X$)ybwj[o)$<32!:;i8CPZ1|e)tF' );
define( 'SECURE_AUTH_SALT', 'q1iZd.l6Oa7&)(qUUS}|q{Crqko%^J[H~B-mEPqZ1NAV}o,VIAS(HH5L1T|CZk o' );
define( 'LOGGED_IN_SALT',   '<`yrZm@x9#,6iXr9CJp[QGV.O;8,=d6lt3^>]kzmf2p&ON6rl<bybGRPh[VS&D M' );
define( 'NONCE_SALT',       '[YYIz%YYQ|~Dwl@bsaR0w?FSAMf9>5ksqTDCja b5Hxpso`PJ_c|2k.o}ajF0`[C' );

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

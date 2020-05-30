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
define( 'DB_NAME', 'freia' );

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
define( 'AUTH_KEY',         '9;nvRjGj=-:ET<Ew)`L~9wXWs=w_%q/tBd9Pi##Zzkt;CUAs&Q_X<yi4G,^l=bMr' );
define( 'SECURE_AUTH_KEY',  'v/GSs^Y~5Qxc3=[C?wRt/Nc<{6+.pl0p~6XT2>0:w_,/{H{%H#^ET`,Jcqlg;NVR' );
define( 'LOGGED_IN_KEY',    '&ZmWijo/59UgFngLIt=)TmxQ5evs:cB(ErG}^$kFP5<S$w%48),vEm5pfy`6+6V4' );
define( 'NONCE_KEY',        'kbN (v^x@04ql/h],?~q*TS{7*2]MNQ9dcjTD,NSr]8K{}9X3BU^-lOc1N~]kpus' );
define( 'AUTH_SALT',        '7hoiW),K|ptll+|aEw3?qV{hfLm =[`ds=:Qv!DC-v]0h|=JDT$2g}bd#9`ww,bF' );
define( 'SECURE_AUTH_SALT', ')cI_y_NS1Be.SU~9C{]`D8S7^dvhGCjsHw^f@5,C}yDzom>&l,$Ozqfs|6vyhQNj' );
define( 'LOGGED_IN_SALT',   'Z>Xv}kz,L^frg:%*5y/asM$%>p`?2)dq5St%|cuw1[QoQ-a~=.VX$--MK+!um5DI' );
define( 'NONCE_SALT',       'x1eLX%1?a/~ @t}3GSbdEDjo]>Q@{NX;fX5JzE26rV:]j2{uKIm9w;95[`,[D/g*' );

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

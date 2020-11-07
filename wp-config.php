<?php require_once(__DIR__ . "/wp-domains.php");

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
define( 'DB_NAME', 'db_wptest' );

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
define( 'AUTH_KEY',         'JRx6L<s:QeXmLPq4fW..@It9HMWEoH}j@_e!_4c_x26XH*!l3 QyEhw|x];{O0~|' );
define( 'SECURE_AUTH_KEY',  'F3qjwg)KDJ,B%VS)e.{W=niuSd4)i*%,yfUajzWS_/>[UD>5aH,@HTIQ.i`)86e.' );
define( 'LOGGED_IN_KEY',    'v;e,Mz(cI..Q*M@7S[g2rJ4AVI>boD]b:OK}XWe!p(QDeDk[IT$E8;+Pm~#p/(tm' );
define( 'NONCE_KEY',        '[N]WI(bC/#>X`Ewl4  $$VyBXyK)Go=b?J_-yE^>r4z)L=_n!KF8{=O$A{f8Joiw' );
define( 'AUTH_SALT',        'InKau}3(*veRZ8-ytsO)D&+j6?@.zQ;:nR957!}rgfc.b<ZDBlKbQ.ls->8q.;D/' );
define( 'SECURE_AUTH_SALT', 'C:UmyO*#Ajgm`Dkm<AAF^+8ci:WNksx wNus`6T]wl]}y[$QS,]2Z@Rpw57S;`=2' );
define( 'LOGGED_IN_SALT',   '-HwY&6=$nd,,&J[)Yk;l%%kDdbfKMZsPaKH%BU^@LWIYcovy3Z##K(H`SfeN)O,O' );
define( 'NONCE_SALT',       'w1wLR]EPza|(][nl!VSv;PLh/}dg#3g<lx$<lY[%~A+zq+#:uPOlwr~In/YZsbaW' );

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

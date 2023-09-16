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
define( 'DB_NAME', 'santatheresia' );

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
define( 'AUTH_KEY',         'J}LJA{8&YB I;RBmv>VpFdF!|0:U,99ZK6$-^pBcq_357L5ew%B3NJR$50%4F/%=' );
define( 'SECURE_AUTH_KEY',  ']Hj.TrW6liALtw~bFnHh.7-Yq2Kh4L$i2ida7ZWE$)}GRUdf}l]/5H%bI1CtE!U>' );
define( 'LOGGED_IN_KEY',    'fdB~wBI:OA/WaiSHh(TS(lp>C&<*I.r=jG8S[aGdyiA3YOac(v94@ BgY}>tD-{T' );
define( 'NONCE_KEY',        '&~KgwZ=tc&k(opwpW3n%-lbSQk;766<krAb/:@Kn0{y|L7<_r[ZUt:B7?=)T,ZQM' );
define( 'AUTH_SALT',        '..O5S9I1}UaOr,L}.z`3/VGPtuRNR2JTko/j;vsKVJxy57<(eY%SJ,A3V[6/2]r9' );
define( 'SECURE_AUTH_SALT', 'c`:yQ;WzqFP(U;=301k7?.D4m<t!9HfHk@QCHq?tfFLCDM*ov~#b;mXu|he3^ZD~' );
define( 'LOGGED_IN_SALT',   'Zm*C/ePoG`Fy}KrOPl!izY!3P]@3|Y=5o`IOp_e D{0Ris_/c+jC|#FYTeQH1Q0-' );
define( 'NONCE_SALT',       'KS+d(ir=4:n/dvoRX38#vTUxoX}<r>QP7kk)m-k38=j%&TSdoYF9^8E*D=]+v9Uy' );

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

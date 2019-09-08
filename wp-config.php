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
define( 'DB_NAME', 'cipizza' );

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
define( 'AUTH_KEY',         'ryw$=lR(0i>;UoZr7G<eg}e7g]1YYzei-At(7d4(?O`Nyk9h<ky=^oo*2ed9tZjD' );
define( 'SECURE_AUTH_KEY',  '??jk/96*s8SCVT .b|,_Si$Q9Z<8f9T^eSALIcMJ69+-9}^$$sZ.XQ)R!3.7v]aF' );
define( 'LOGGED_IN_KEY',    'c{h.M>s&yjn8~Vi(i[)b[g^f]n-<jdYP;(rO|,ZglPs;w_GB%2Klo|dKyo5AjYN-' );
define( 'NONCE_KEY',        'i/iI1oef<]O9(Oh>twh~!O5]BFM~VoI0p/X(n=u^}pyV]fJ_iF~3O3H&XPJ4jHoL' );
define( 'AUTH_SALT',        'W;9/Gi|^2:`+h6]N07U4,LUrm[7F19aKS[i0YFiWb~Lk!2ynGhO~8QL2Qgmy6))p' );
define( 'SECURE_AUTH_SALT', 'B+O$_}1L60+r32lC$Tyb&`No<Lw4]9,Lou|`(TQ(=gZBStz*&x<~w^qD2Q:xRGn(' );
define( 'LOGGED_IN_SALT',   'ixX(bxYO]<1U#:Ngx7kp~nR-XUl>}l%7WhigD]#NKC4:1{B-(=g2&%S$96uAEc?i' );
define( 'NONCE_SALT',       'Do|VNDxD0?uJ|bvwInI[]7$b|:MBV-ToiqZ7y[==l1fd2wfiJO9{ym=4Y5I/1fdI' );

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

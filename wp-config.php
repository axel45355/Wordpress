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
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         'YidA:XdEP+x>km~Vp$1F,oD0:gW1z*Mi3cG&E~b$H# :2x6*a064^S/!/(;kGv:C' );
define( 'SECURE_AUTH_KEY',  '#MZP5,w44jvn5QiOTraMf6)e{4|(&kO}$b_RUU 54BQLtA=0>arI- .{R[fB49=P' );
define( 'LOGGED_IN_KEY',    '3|S17e5-X-:-n<rhWo+CbBN1Q[r_Ry>B 9<38rYvoXXxRpv6mu.5dg.Z:?E<{c_2' );
define( 'NONCE_KEY',        '[9czjUT6=azY Yy9bKct_t xnT K-tNvw*oPX(Ubt15[_IbMzGRNj3/t!P*?Vvxr' );
define( 'AUTH_SALT',        'W#;ea#V@_}:z+VZlJ-!(_?Q=!cn2rhHyECBiu>Cg$O L>eVND/8>xCn!WC28-~V2' );
define( 'SECURE_AUTH_SALT', '>J@(Ig<qd yZf0OV?2}A@5{ats+O5_b>_[S,QW5.&J[[[RP_FHP~ 2QK~fEh>KwE' );
define( 'LOGGED_IN_SALT',   '3%P0!8duAKxnDRv,)7hQuo@jqjqR=RCkGS_/kfTJ&(/+B8P8vtW9e|5?}&e@TE$N' );
define( 'NONCE_SALT',       'FXEge#oScixvJEyD>UzDTj}yX5d!o!,])m||JY9$okEKTa&1KNtJ9I^c{wUm]s[n' );

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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '>KNZol[=^IeS;R(TBwUU0 +6L_a&bY[#~6=5yoVkq;3^+=`ZW$;k|c8V}{*7EYZ3' );
define( 'SECURE_AUTH_KEY',  '^E3@@UO>?/} 7edXB3=gQNM2C-{ [OUtj@^J_2K;x&BVQ}~es^a1-Sz_V(cI$U<F' );
define( 'LOGGED_IN_KEY',    '0ZwqSm.mV3407r#dHdSa-$ X6Mmb=.mE&~{k*etHsmJb)`8+=^PP_h`:~Eu:GTEH' );
define( 'NONCE_KEY',        'erE93XCdrA5#(0kQ/C%yU-M&,Ti|%K*#J&X^s2]kio=CL-/SKrl41lo;uXEBPB}M' );
define( 'AUTH_SALT',        '(eZ{d!4Y#L2K_>KHAD$nEu&Ge|GUBTa74Ox(%LaRb*CbxF2_wFGr@Ymg%53L/}9R' );
define( 'SECURE_AUTH_SALT', 'O$/$Y&|]d*HHs;.;vTl+M>7FYX@9L6!jIPjh!g/vryo3PZ%(7SfSLBCg{zH:n``+' );
define( 'LOGGED_IN_SALT',   'Z70k^I}nO(k *(4btfgyQ~%w8I=M1`n?gY&2/%hcI#zh?C, &1f3>=%+$Y?.SXN/' );
define( 'NONCE_SALT',       '4sm4K9:y8/nu7z~72n,]Q^7z_Id#5_[51[oGtX%b4~+Yl.BW#{zigMVA+lkOE`5d' );

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

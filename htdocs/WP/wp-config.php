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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WPJ(10)&5IGz9`BMFRw.Gtl_X3>K?MDrB*kVSFlE8uRM~MpUf(u)2KmN$G?pQ{%s' );
define( 'SECURE_AUTH_KEY',  ']EXU}MI:*vG?;Nh|v:v_Yle&oe-8Z+55qVqup}AVm6y:3xG/&J E>Jkj&wo9;%9k' );
define( 'LOGGED_IN_KEY',    'yen,h%wpN0iNYo5LhMYXWH6(nJxK#SB8v.xXyc,]aF.1=K0|(m9Yy+Y&:*g&[Z#n' );
define( 'NONCE_KEY',        ';W]Id,|#);lk|}/Llh*%Kz4tm5RH|Y!na]Ka,=4^-lhFfhsPY`Wa-fo4tnK`$GY=' );
define( 'AUTH_SALT',        'n9wwS<*6=(w^1?}@F_9Q0.?}?3?38+B[]fxe0E$?q+2;LVK 74@*KnX4hz_vTdkb' );
define( 'SECURE_AUTH_SALT', 'vazL7.&))=hwU5|a1m5Qt3%Dv T??3-9tk7^AIzM/dS]AA:)gQpiv>Xrp2t8[(ty' );
define( 'LOGGED_IN_SALT',   'A>yB%y$$MPYcLFPP/oG9`HjcD5(?H`@h {k(?G(ZbjlRl5h*+b !`f:@))i*:0Vu' );
define( 'NONCE_SALT',       'Q!Xj Pm{B?dcs)A]7H&fr&H}:D4I$UY6[E&d<TEaj0GK[vi.FbGCGr]>6N&(=^[F' );

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

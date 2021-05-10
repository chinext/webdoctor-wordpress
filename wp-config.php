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
define( 'DB_NAME', 'webdoctor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '*********************' );

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
define( 'AUTH_KEY',         '6PG5iv2`{0PyM{.o/esn~P}vZM6ur_m_GD=5rfrOI*!CJAjWXC?~7}u9o@B.*8dZ' );
define( 'SECURE_AUTH_KEY',  'S&+6zyz:gf$%@hU;S*$@m,*qk_?#[|@x|Q]4u#h=jXXZ8<bX!dhJ7J]|J=Zu7^hp' );
define( 'LOGGED_IN_KEY',    'qllUXAjL]($J~>zg@vS:*/VlTk3?J1)(o#&4AgAdxSO HxLl6:.Ml:nuW8,3a-l)' );
define( 'NONCE_KEY',        ';Y=iJlfu#nblb}i5a}G4;jj1SD03bF~;_qC_N0xEJaS[L&`?71u$t7>LEK>fbF4r' );
define( 'AUTH_SALT',        'jx)L8XM@`J /JZL7a&^o7ldl.<du0*spIcUBe>S{&TqY4.a1bw~##/D+f[`h/%[G' );
define( 'SECURE_AUTH_SALT', '7)vCu}u-l9ILVLtD}m#fy (fSHHw-;!Jyl1#9w<JZ:-_ b.A/NcUp{c?NwUPzNUm' );
define( 'LOGGED_IN_SALT',   '/2Ad1M#nohDA$WU[]_G$rEdF]aEs]LO+,ppJ9W.&QvfKpmkHX%{6O`e =(g.p0Jm' );
define( 'NONCE_SALT',       'a^QDXNa+5%PNW7a]%|C@j:b[JNm05Q/x}K&)Dxo,hOYnKO3c`Hh5]-^WR.!lvb79' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wdc_';

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

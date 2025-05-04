<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ali8' );

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
define( 'AUTH_KEY',         'kPxkSW_](uvDY.1-aQQ9]$yGlr$hyA$[VY-q,{3$IbD}C8OE0YI3t~XVpzrY4[xb' );
define( 'SECURE_AUTH_KEY',  '5,Dqi>?w1&K#g7IWiYkyQG?ma!4)m%BtX_-nD+g-8;bWWQ~7M0z<c<Qmw8bMJ[6U' );
define( 'LOGGED_IN_KEY',    ')ZxNm*/jNTqS3#LZ$BU>,sVdug 3!D+hP+j{`%h(ja%$?X#_-G= O^S6q9lF}wXj' );
define( 'NONCE_KEY',        '9!Pv]q<IF:Z@|.=-[Ny)N`X9u{o~Y}h0 Cy2A,,%/mzy2z$:h<|/NEHLCvQmDsgx' );
define( 'AUTH_SALT',        'a6#P.{uhb7#-7En}4/U=zLfqAEy88!Bi,9py?UzYsq.9nio|]RZvGxi2G6&<lIHE' );
define( 'SECURE_AUTH_SALT', 'h]+vmYPMX)q*h;,>~8VE0>uE+m,2Dc&:tyD_nsPnwO@.UasqW0|%Wb4G^<2*Y@1<' );
define( 'LOGGED_IN_SALT',   '+pw<vWPM*fNl+MB^2v-^dhI1#H<zZ2V;>qiU-X8DWxc[w/-Bi6/WJX-R_!]_F=lE' );
define( 'NONCE_SALT',       '(cBX}bLDccA)Ga`N <y=y:UHVd38_gr6Dgqyg6=Hk>cpW>ezD)BwTbo^&nG%:Hia' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

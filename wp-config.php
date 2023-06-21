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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'ZwJN.OHi}JYrojIlOWz.r]/G~(AQL&s=`Aj<rUILed;y&vJhtEqQ?jNawRS_C q|' );
define( 'SECURE_AUTH_KEY',  '^[t}?wdfUD7=UmdJK&tY=$&t&%G_;qV33NlXU6/6|7QPqT7Vr,Yy?ZkNpf:nt^=>' );
define( 'LOGGED_IN_KEY',    'm[8AN<zL_RgKVT;>Dr+eA;!sY-}?M2Vj&$pNuBe$_??Ty}3I#N=TG*_^@YP-NddZ' );
define( 'NONCE_KEY',        '4/SG+wOd;Rt?EyJ+ey/[s/Hd8t?%kmx/?H`zsoZxU4e? XrG_qiQ!62B&@tSe.5;' );
define( 'AUTH_SALT',        'm2a>.<4g$$<+N+7}xdw%g(vxM77,uB6rtPxi,y+1H]q}K)^8g9/9EnJh8r]Gwc-L' );
define( 'SECURE_AUTH_SALT', 'U$F=cd-qfP|F[q%RueSc.$*qC`fz_YG9c&$1W1NBAN7sYb]GAI{c<%&0i3jjFp1.' );
define( 'LOGGED_IN_SALT',   ']h6CN5wpUvpe!:F-h|485@KOaVU VWP)JtDv>&UMGBj1XY<OtUX=@Oo`m+Ayg(f`' );
define( 'NONCE_SALT',       'KDkcR(SQ:+FLL-[rfrk/)<`C>Ap_k=fI{.+-f<Lv-Nq;=JhkQ0cEehEd`>[<BgM7' );

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

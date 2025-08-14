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
define( 'AUTH_KEY',         'Mv~hBm[F4+9h]1}Hn>VpB47UL2A#)?dAOr64M`|@cR%.lh)#FZ[T]lB%hdqHJBsD' );
define( 'SECURE_AUTH_KEY',  'K:#(vWeSK0U2<U/5`c1wuue-F>GAAejar,+XP`a73a!d>F![u2P2CtJTp<M^|CC:' );
define( 'LOGGED_IN_KEY',    'lK*NMMT$N?i|Qvv37z?EC)Y<B*6;*Tn~N+zU{^dozN4WF1NzqSs)z< &5)F9q>V-' );
define( 'NONCE_KEY',        'h<#GydN.ysb1;h}?.Ff:PZ4HONfB8`1WF=ah>}O{~OaMf];kXU[z_@&9`uea^M0t' );
define( 'AUTH_SALT',        '+1;f,FO?B_/_T$U=2] q8Q/ku$&j>?J~cLpI)V;@0p+h;},N1{4=TBN?985`s~au' );
define( 'SECURE_AUTH_SALT', '2[M|1AN{#b4-VR/?WSx`8io=zM7<lt*`Qs,3B,Nd^!{2>Gj-r)G$V*s8+y_g-}.1' );
define( 'LOGGED_IN_SALT',   'K~U2%*({?kCEEHQf;8Vk3DID@FX@DJ(4SOYtybI{;o!mOF.{*F0!-jJGH%LiHn3Q' );
define( 'NONCE_SALT',       'bUszBH|,.NCoOgg}P(_9S?zf;w#<jb<*5CG?<NM-inA$J^VP{1%fK:K*h|BXND`L' );
define('JWT_AUTH_SECRET_KEY', '$6{[PoT2El24j4f3m?Ie_}^NtMPaY99y=O<du!O?xnmuOxDgz1_gTUF_SnU5bhc}');
define('JWT_AUTH_CORS_ENABLE', true);

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

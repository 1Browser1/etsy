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
define( 'DB_NAME', 'etsys' );

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
define( 'AUTH_KEY',         'kN}uF%g`!_hTgb:Sp.a@5&ZArSn{(>c/Z::-?LeLOyuTyH{guyQ5Bn^G4g3DR!F)' );
define( 'SECURE_AUTH_KEY',  'ruCD+CtW[C[C24bj+D)qX=h.5Q0SA=o}9L#z-.J4C<@|TcI2;[8nU(aS0FV&q?jQ' );
define( 'LOGGED_IN_KEY',    '^2X3D9TSILUFwTh{ARhRQ5wiwEYYTR3o8!ehoRn@qL7bKh(ym_gIs8];C:_gSFSE' );
define( 'NONCE_KEY',        '=)>EopB%]JTSMC:_<Gu&*_#Ypr=&p,rDc[4L8NE`n7=/FYuWH*(}VTDA0s@F(^}D' );
define( 'AUTH_SALT',        'c_k{M>rGB||Bw]rx7.;jF_X8irxG3D/!|k (L}|#2l64Vk2VSPh_D@mf_zb6:oj7' );
define( 'SECURE_AUTH_SALT', 'U<>}lZhy;Afd_^8gVda?n_f.`/5.NK=vm2V3-y>IwUY$U;y RjZuHl8n_7h_%izt' );
define( 'LOGGED_IN_SALT',   '7XR&[#Qos*Em3{|UelU~_K<UkJQg!s0<l0>te(C@n<dZnP:*PG^{QUjFM2[H=hMO' );
define( 'NONCE_SALT',       ']sGP,/w$dZRc8PtMGrf88+4{Y9.<HP5OCFRhO6uyp%(ZeofdD)wsQ#zg7B/-9lj@' );

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

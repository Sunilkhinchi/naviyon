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
define( 'DB_NAME', 'naviyon_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Khinchi@3108' );

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
define( 'AUTH_KEY',         'G.o6y}k;HHBSe3n/_65d-LP.1tOh-n_@42_ab)J7%)!{6K}$$%w9IhUAUfvXn`t:' );
define( 'SECURE_AUTH_KEY',  'Y5szHrowwD)__LZyDLG8R!K?=fEw!;rLA 9GRtuUH]9WxO+E|maU9bSH!x0-]067' );
define( 'LOGGED_IN_KEY',    'F%8+-1?68skeKzp%bCnkFxJd)~n(lI?~b,XBk%pv}}~%HhIr2S*[9lS!x(_7ksi*' );
define( 'NONCE_KEY',        '*puRFhd~aY}f%yD*~3%W3@p|DSb9pe4WhQ&,[p[Me}@bxJVUub>OQLu5T8c]$)3L' );
define( 'AUTH_SALT',        'S0pYkxW8RGmCXgpRW/UTF&U}S1^pIoB-L|1j.dejqK9NJ~sz-4& |%Ynp|ExdzIt' );
define( 'SECURE_AUTH_SALT', 'YQ&0^<&2K@Uj+kM<:CB}RRS137id7#gkg0}XzY9KdZ6Cqh+#u1EURel4#~OCB~`-' );
define( 'LOGGED_IN_SALT',   'NT3-=$UzPImC#DnASd&~1MJ$N @xY7 ^,G~eWDLwA0ZKiKMzY|(j5S(tN-D:{VG?' );
define( 'NONCE_SALT',       '1NihNb.6NFQfSY{w;3JzHO-PWq)9SvF,j](pgXcb,jT/pc(BlXW>]|SbaDF>ib,%' );

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

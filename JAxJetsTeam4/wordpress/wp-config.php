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
define( 'DB_NAME', 'Wordpress_dv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '6gGWZ0#`)(R9G2n*T l<OB_7K8*@us.ir?[,/_zrt24$qaTQAH`rn1mtwAIlv%{t' );
define( 'SECURE_AUTH_KEY',  ',d#*FINKsg<v.D/I diWD}Tg0cE8uemYpI)p@c0}0PZ_5Sl&l]X=a1QS{`i25DrY' );
define( 'LOGGED_IN_KEY',    'Wj#PjEK->?MeAvI nfSv|gw .v;<6E:Maz{if]Rb:V<#W(|~/tlN^_DOv=E#(L?h' );
define( 'NONCE_KEY',        'WrELgO!zDtFkn=UTQnYqc>x-,lErAD`2S34%!wuN8`V{:@N]j?0`$[1|Q1+$|`ja' );
define( 'AUTH_SALT',        'Z6cqZFf+Zb/Qs^`b(?d2BA?*^W $(#LZD41^0U.}|>*e|Mx#Qs<PlL/~^Dgmw-u^' );
define( 'SECURE_AUTH_SALT', 'mGfv#LQC=axcO).6AWeC)Ai@vs${9,*XH]|7=*%c5;{U)wbtb1VIb6nW9pE5[j@d' );
define( 'LOGGED_IN_SALT',   'DxVY^Sm`97{h`)=*AL;>O.zJdwg*p~`(w`/|hY*/#m`%cZ@Q@B>`y$!8t$Omg^&}' );
define( 'NONCE_SALT',       'obPua>z@(PdTV}R3ch|^DEqUB81=0M3wVCD(jv(Jk.~G%)K0.c`i87}HBudZ.iHj' );

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

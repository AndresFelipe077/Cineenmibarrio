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
define( 'DB_NAME', 'cineenmibarrio' );

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
define( 'AUTH_KEY',         '0q9*0Kk&Ip];F-D;2Ntj[_<%%iCEim2^Vf]8K~<j&nhsrRQv63c;[x09O-3WDX2M' );
define( 'SECURE_AUTH_KEY',  'WZKEuqgY_nsl}a(QZ|z/^}=I|49xABGwe)}09&fQBa~t<1aw}{6f))fzqa_K[UOn' );
define( 'LOGGED_IN_KEY',    'QKczL66k>HZ`o)=#g/F>x2/;z)JR)>wr)Fu2~IHtk+K}qA>h^$UJ^j7^QCv?<Gj*' );
define( 'NONCE_KEY',        'nVy6sJ65gXGXD*!2?B>5&rqm`hkN(*Z{@nSn^PVI:[q=!3hnC8mo~acQOJH&XmR=' );
define( 'AUTH_SALT',        '%$`>y5QM32Bd&:=d5AP0/)fHmn]`4H`j{&DgIdQL;(.AB@v4/=wG N<p1mY7L<i|' );
define( 'SECURE_AUTH_SALT', 'B]Pz^a)_mypQFI860]Tyaw#3BIRjMd&F4<0u)-G)>q{N]WsJXG@m^}nG+!vCTTs ' );
define( 'LOGGED_IN_SALT',   '.o#Z>4-19p2zZT.kc;#i_=JbIW$kQmgS:l_i81!^dja^}lkB?;vo>ycv=IIR@@Ye' );
define( 'NONCE_SALT',       'uvtV~`|J1K|xolip&q[J[]AXcU~iNz$Vtvm!yrW~R}r`W=#0,X5W#V#K&nkwiEtA' );

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

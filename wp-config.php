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
define('WP_SITEURL', 'https://darraghkerrigancreative.ie/testing');
define('WP_HOME', 'https://darraghkerrigancreative.ie/testing');
define( 'DB_NAME', 'darrag5_testing' );

/** Database username */
define( 'DB_USER', 'darrag5_testing' );

/** Database password */
define( 'DB_PASSWORD', 'X}MirYEUG!IC' );

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
define('AUTH_KEY',         'Qw(SoJc6V[7Uw|(b|<twS4r|-{QDy?/2o97H[^]2t@<-sAq=u~7m@24|w!+_)UFY');
define('SECURE_AUTH_KEY',  'n>-^`D~qPCO$!Ed<;j0E^;dyeMYROi>Mb0~T<UFE|+:BGDWhk1YW-5~znU{x9g5l');
define('LOGGED_IN_KEY',    '`a#I:eOFv][zODE.HC*z+;s<,FL>`Ihji]~=p2yQzY[j-U&V$^P2>DL(F@30M>Av');
define('NONCE_KEY',        'J&qKgcv(YaQUC5^nZalj.PnV3xL,2a;9>ma8pa3%_}x/t^@g.r<|):Kk=$@s|1ns');
define('AUTH_SALT',        'TOM.DSB9vRHX<QCxMHiyKzOcllNgH`N$QLk-PTDaEtML5_K8)/8IHG/9K[DzqEa4');
define('SECURE_AUTH_SALT', ']K43jWl*-M$rti^$Z->Db64<fqri-uV&gL7^Fk}dHq9>!awROal *9X^^m!I8D&?');
define('LOGGED_IN_SALT',   '|k.v6n Grz(5}NBC6?Ay}[YM=1k!A[E_F>Gb2-f5#mUg:ZL|@]?Re,W[;O*cGv5K');
define('NONCE_SALT',       'Uam3epf,ug31LZs`s7u$4N:?X[R5+HZ=H6wr$.>xDa@l)R@P8+4-u$t&*X-`(s.M');

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

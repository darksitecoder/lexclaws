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
define( 'DB_NAME', 'article' );

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
define( 'AUTH_KEY',         'zg@nPL}$;BCH(JbL!gmHtVqWIGx(3v<WO:Suaul4?[]m9)~umz,AbULZ01yB!qp[' );
define( 'SECURE_AUTH_KEY',  '}c(xi8*{j$]v}I)&:6O@iaNL>$/BV KX)3<Un3f:f*%DFUCgsoS`XD!(:[O?8rjO' );
define( 'LOGGED_IN_KEY',    'w8 Rfs<7/Y8@+PIYj7^Q0*X*1~ed^Zm,WR79~=.QR5x4qmwafuLmFF]KBAFHna;]' );
define( 'NONCE_KEY',        '9B?G]VoMs8Y#1NRh`>]L8Z=1,m{@ag%]OxO7|0VbE&?4A5,u~(wB1tfk/i@]MZD8' );
define( 'AUTH_SALT',        'bpG ,&9@9:?j?!tN9!_QRPWu}@W7P+R.bLX!6f/93rk_$ky+*g!I59XA /9J~mwI' );
define( 'SECURE_AUTH_SALT', 'i|XU ri*N[!<1dL&^(eSVg%_k&AQ-bVGyVXk$sd,9GlZqm4PT#7 Yo*5!Jge?_%P' );
define( 'LOGGED_IN_SALT',   'Az{VBPU?mn@9il@jX3o5(KUW:HOseR4F!;f-o>0Q=#h@e[;mw%EqRb2-0Mg7OfC:' );
define( 'NONCE_SALT',       'RS[04D&2MCfTPCH0VLvi?1io:VDS|&B-X3N uG iF{A}/Tde!!91!w48Fu^`e_7R' );

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

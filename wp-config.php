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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'c7c]8oCp`,~R=7f|y3lr9Z,j pRjj/lr7U.<m?QlF/NeE/3]IU<Q1hC)S[bH;7_u' );
define( 'SECURE_AUTH_KEY',  '=Uvf$NW2fdA~fFUrF+H4%58_+?g(1JL9fd%[qqJ,w[l7t`F3RnM3ZX6<E4PSCK[<' );
define( 'LOGGED_IN_KEY',    'VAv=xFMkNb%>kJ:W)Q|dj>:hDC)*cc>p@3:Ag{,vk,m1:/JOa$+68}+JvvO=?jP1' );
define( 'NONCE_KEY',        'QXJ(d}~1Xk3969X-0X%TeVG:T}`9`b?X`tZ-{z~>PBRtNjD.~WKXrrJm7XO|uDXH' );
define( 'AUTH_SALT',        '*-dL9w17;[xM!d@*POZn`1p_pq(z.mI93Uqm*iQj&I zjx}B}./!P,!.},TzHUW4' );
define( 'SECURE_AUTH_SALT', 'ey=`74y4A6^yzIO4I,#zs[wz}Ru&?v4}f!5~><aGqeRbLg|F8**iCOK;G&< #^$-' );
define( 'LOGGED_IN_SALT',   'Hu4V2ab<TdM(9s)VZ#)kkT;%GZ;f9ZOOvf]+1Wa>[4j[%aw_?:Ie9D]mKe>9NyU}' );
define( 'NONCE_SALT',       'I{&k/vm@3ku}[:@G&V!T$)~@tC.z6 t}o^I ,h1$<_E`}BAp2:TUr3)XF81:RfX0' );

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

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
define( 'AUTH_KEY',         '<6+oDdo)ns:?O{Jh-{bxJ*}0+)*l%!#/}aN63e)vk<0In.Pg70F)gt~g|M:G3+KH' );
define( 'SECURE_AUTH_KEY',  'x_Z)gKt7h{~H4b(-Bc<rVL9&T@1s/5>i6 c6@vwA4z!Y3SiMUf=?7/ae:3RFBHQE' );
define( 'LOGGED_IN_KEY',    'zK)D~,Q)V?FyPJp+TklwSG&?pg`Hw&(6k!:PRbit%?1u`_g|( VhGmp6w;|qD>B7' );
define( 'NONCE_KEY',        '-)2>+P0fkBaV+FQ4Gs13R?OW4#c]pz3PAMFBM>zC./-T(nN]ij(|Ct?#HFU`G(sF' );
define( 'AUTH_SALT',        '.W74Bx3jSPFmr%U~`ofibkO|6,NG4Ll.+X%sy)V4>|:Myo]z&V.eznI@`Hy-KO}o' );
define( 'SECURE_AUTH_SALT', 'oQPfvvJ6k^=D}e@xp5!e/O/bm@?-G]U|df9r[SW2(h-)f.-7R*9bUFiDAF`b^KzT' );
define( 'LOGGED_IN_SALT',   'Cf(=xb=2Y82)3M&]O|Tt0+sNU[#R5A.6~UTi GZ,8ed50%g`?[tXt 6f0xbmLfYE' );
define( 'NONCE_SALT',       ' fo~oHaiBfa|?avmlWS|D`$eM)Efm5Ez;ti>_eGaLr%6`vFm:.&I`H&S W!/%hV@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pesantren';

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

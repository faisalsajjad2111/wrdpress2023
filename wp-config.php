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
define( 'AUTH_KEY',         'LWac@&  [)D*:&o$LvzRM/gQ9W?s;w Bx=6{_K>&]Az]/envgMD.Xm)`,V$z7O_P' );
define( 'SECURE_AUTH_KEY',  'o0)ZVA#Ug^&CaFTnSafT)oIN-~xcWr_!(!>^xoA(p+dtIh~I1-;>rCxZI%^-Hikp' );
define( 'LOGGED_IN_KEY',    '} C-KIkqeEtd~$5@-]J?c*7x)&{Zx,<mGw@3E3<25 z37@tE~$J?>ci8@:XD{ImA' );
define( 'NONCE_KEY',        '}A,XgMd0aiI1hcua95DjI9vavXX9(R#wO*{)p4>yd$*^k7{,Ot%Mq*-8U0<A[$dF' );
define( 'AUTH_SALT',        'oC<N##uMM7Mn8IdVEjtk:a$>IMQG;igT)oMBg59sE/d+R:G,(+R&@2zoV@7! j5|' );
define( 'SECURE_AUTH_SALT', ',/Vn;p28T!H}C/xpzbM_S!A{dVKJ9D#L}:<j`G57J#Uf !jz=^>jImNO=.DPfPyg' );
define( 'LOGGED_IN_SALT',   'd^GGCPAk*3gbQ^g@b@>xA_?~$l0g[&1zQ9`Q1TlvP$. fD0@NFt?@XL0>^8[VLmr' );
define( 'NONCE_SALT',       'hFg)<Lxkw{C7D&S6-#<1bgWA|mvy5CT$n*[T4.h#Z8d4eu:eo1ax9X|OZYjcKY4,' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

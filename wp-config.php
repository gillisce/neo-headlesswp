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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'aW<}FC~DqAJ8r pev)| bcfv4Hn;8kb95;A=,tTq+`um>tO:[)Z8_OK|[3k5Ov,w' );
define( 'SECURE_AUTH_KEY',   '6`,|Ce$l<74)imX4!QMhEtrS@omY^~P{<&|mhWV~T%b< 8<L9x~r9-_ 0V;6$Sr8' );
define( 'LOGGED_IN_KEY',     'IH9*,8y8apgt~4L?J-g!A|]Nh_Dc#sDhqdlRSPMkd~!7(6S+WeLvgmbQ.nkF}>=x' );
define( 'NONCE_KEY',         'irB$E _2_jFE/Nwb9)[IdqU[WM[5`nLjd|XDM5muK)JANs= 1|1qROBln?dYuv|c' );
define( 'AUTH_SALT',         '|G5#;ql|mOCC;#[0[8w:]H.w=TWlDvSH=ZU!g;Y(=ynPN,o>l/Y5<*v)qj*Md9 [' );
define( 'SECURE_AUTH_SALT',  'a4*h2L[GQ1WS*M<UXPY6~R>vYQjik>(/lpAHzJgkSLh1]Cmd%jhy;Xnr K>~B)9|' );
define( 'LOGGED_IN_SALT',    '#-E#yJy^8L:=efaZ1R~n).cr/3]n|UpH[DxI_ZIS;<d%?BCO!hd9A^*7kCcS6CBJ' );
define( 'NONCE_SALT',        '~~]d 6&Cq1V[NEG15-%<D`b>U2R=S$BHn s?|S6OFZ+8P7,9@2@C5rb~( -p}I1Q' );
define( 'WP_CACHE_KEY_SALT', 'F (&<z&-x~$=bKY@*{1*z0Z;w|$#%Tk .U)R)r~n`dfmcOqXKgJO[y#SUORQW}F)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'AUTH_KEY',          '_eRa!E{>cdVc ^*oOZ^1a9?bv{DIqTf>hN$[IshHUZ-2Mxi?UHS;-9q|4n%jI/Af' );
define( 'SECURE_AUTH_KEY',   'P]Yc_eC~J*G{:ln){DU6#Ta>g}zWtN;>;lbb*U#>_:,,0-X*=`]ZNE7giq0N=rQg' );
define( 'LOGGED_IN_KEY',     'L:XeBL+y>YKFrOzXt5[pg}&w%mnIFnxX$YN*.w_6C+lHD_]snrD%rX9SU#Wb/CCB' );
define( 'NONCE_KEY',         'JCBI}4@X686L_zIPeGwX>,vo:y.:$)xi5@65i{>Y.w-y)PJ8L!]<jW*Y@8pKo3uX' );
define( 'AUTH_SALT',         '9xQSYM>QNP_-?/y!aOz,e@QZAPAXNYxtnaK`*i?gPw/xrYX2,i#pj@dWe,!xb6QN' );
define( 'SECURE_AUTH_SALT',  'G!s72tF7@^4vYXO;O=<Y<$D%09Q{Rz$@.&G29_vxiw??^r/#@^8ii%Am)7@jO`4R' );
define( 'LOGGED_IN_SALT',    'By#Z8bj!*Y0rFxl66ARxXPF4y~EQ@`iI3e3+EmZ.7+G)~R7+disUj+x},vLl$bLj' );
define( 'NONCE_SALT',        '{QuY}8rkk+5j~%hkUxXx`&|-u{qvUs%=|3jvAN8RMrc{d71XT2}S]gg3.W:B5n1k' );
define( 'WP_CACHE_KEY_SALT', '4#rnX]KJ<mx=@R|uw,5gn&s6Y;k y(Epq6ulgz:QU3[Tt?xC|uI/-9$X,0SUo4!^' );


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

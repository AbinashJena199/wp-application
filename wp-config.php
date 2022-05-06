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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         '|^_r*8S3Xl*y`,|qTeX~;5C?57ooHNOSLl-~_Ze{&]lx^57RL:(Z_V1vFlV2kj&>');
define('SECURE_AUTH_KEY',  '1!!BM{}Tk@IM&T!oeArny8,M^%2uJl,)E8Vg|P}8g-+6hl$DrBkwpeoQc9|qYsZX');
define('LOGGED_IN_KEY',    '@kU?IuLPdu38A+glv<41E`bTd wZvtS&m=1=@lDC45WDl=>ewFwknycPAp+>%J6D');
define('NONCE_KEY',        'nT/(q)(Z$1gU-ogq-*{-E*XBwnm+1!,Rf?H00qh@]|TJDuY2K-6h:L74pM8[c6se');
define('AUTH_SALT',        'N|92[w?@#/3TK[.]160wry+OJ/hN0KK*EP|cdRK?L*~#R/?KV`[QC SG:a+7/B&j');
define('SECURE_AUTH_SALT', '`&[!ZPyyk8T=mQU]KR9M976X;R>2>w4onQXM3F9|LDWtf {DFIXdu{[kQ[?a{+C|');
define('LOGGED_IN_SALT',   'Qqq%$V-;gq+PkFST=nzbQ|??si!@$msxoe<065|+kOvXfo--)^9L,AIh-ZXUu:X-');
define('NONCE_SALT',       'X4rL=>4l*NgpK<Sdg&?pBCRx.6v{E7zsFn5.,ohD[CR{.#8&u1Dpw$;2/TL/tG2e');



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

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
define( 'AUTH_KEY',         'Nf9W4ArV@%?0W/M~]n)9 J.OFp!c0Q9e`D32z|8~uMjj{h7LskJ@=pyg{kd3ov>S' );
define( 'SECURE_AUTH_KEY',  'iv4+b,N7<Bv<=>f@1SHp@p|y5woSWCUuqn?VVXvg^xy%(}B thxOB2>q)7/.?u1j' );
define( 'LOGGED_IN_KEY',    '{XEfI8BhO^z*h#SKD#Cb3m/tUfdgH}qXD86z6mfUq6SrWt{{]$2U8!H: G8Tl09_' );
define( 'NONCE_KEY',        '0S{^Ow:N2{ZA:bjgHQ%p/ScS}0)8j,^kO2+&)a|5*yfQd6j/P@Je~Pnx(f^of9iM' );
define( 'AUTH_SALT',        'V@#k+I5=RxjcOQ*{{ q9}lbpsHwp,Zbkw3gr?WY=xOZM.]:m|`CbM;bRUw9h!,}n' );
define( 'SECURE_AUTH_SALT', 'LMFxy/X 9~1~#p?lr~eq]m;t|c-z/RIqW:VvGF,!&$[4>9MSrt)1Ab5c= Z[{kv<' );
define( 'LOGGED_IN_SALT',   '{Q@bng]8TnvSR~m:X;|7uOR@k~ih`73[)qBE[bA/mfg K ]1G-xX(vK`uSEB-zH*' );
define( 'NONCE_SALT',       '^F5}Xk5!EqZQ6By;Q$UiRf/E9 w+{,m@k6+][mOR:kpJ`^EqiI%-4-a0~~_ML~6b' );

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

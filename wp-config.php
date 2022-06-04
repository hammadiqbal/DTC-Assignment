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
define( 'DB_NAME', 'classers_dtc' );

/** Database username */
define( 'DB_USER', 'classers_esystem' );

/** Database password */
define( 'DB_PASSWORD', 'Esystematic12345%$#@!' );

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
define( 'AUTH_KEY',         '7f,;ODFE|:yZzF,iSz+ledS {sM.z>;V$@^x}&YYN5a$i8]CGEH~q|:@a80NF8CQ' );
define( 'SECURE_AUTH_KEY',  'h~4a$ >5ESA!m?`p _K1*.zhzvv.|q)M=xy-4gv}}#naG2NJl8Vzz9Gyjo12TpY6' );
define( 'LOGGED_IN_KEY',    ';tgTdht)Ta-HZI-5gQ-+}r0wq0uI^%Q+_2>r[,YL4ab@#4Xr~fVYTD=?c~#hdUEF' );
define( 'NONCE_KEY',        ';?T:8%_kUf{B$?=`xIizlJ^*%O8vLSj37$O9/D2,DBb$a3(4^%fCSbF9k~d5D?sF' );
define( 'AUTH_SALT',        'smT.?q+oTkY.xyAU~DVkU~f.zwcxvBpl<D*}nFk;C#VIe*kuk?1F5plnDWzH4D^%' );
define( 'SECURE_AUTH_SALT', 'gZi?~p|2j:0Rv]t]u2)bmerWFzY:4t%Tw%./LK#]n3P.7I(GmzJkcI:?y0<7(r8r' );
define( 'LOGGED_IN_SALT',   '$;j4zk*L?!lU%.0|H|K[6RQ[qIIS[cr`}9hL/tp[yKe],{9xPm~UBfT#?p^wNf7b' );
define( 'NONCE_SALT',       '{WkV1g9YC,0o$&D3}ZzN=~=EXj:uAfl2oDA([>3|%rh-s6fkb]Jsr$p}.a`oeLO@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dtc_';

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

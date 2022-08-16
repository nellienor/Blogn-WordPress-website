<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wX&j]AuC7e,J,W`<2{1G~pv>W?[e.7gB(sswX:RPR|s(5UcRL)fx2%n.WO8w02-g' );
define( 'SECURE_AUTH_KEY',  '&b9nd_&mo19ZLOzs!l,>4ycl|I.Ug;4]%Z].wA#&?uU{;fh);y4UXSli4Xv~t;-@' );
define( 'LOGGED_IN_KEY',    'eH!DIDPO $KRI1 ^o_6Si^X-D855?=CcUx~)a6X[Tv~2,8Nbq<uYp<k${s%Wh-Qn' );
define( 'NONCE_KEY',        '$lr2NLZR;Q#*sN(UOfWc>^G.eayY;3{Ame|XL&r*46mB%(nrpCk*Y9G3AE=/6{r0' );
define( 'AUTH_SALT',        'gyz4r` MVf]c&vs)1I/Bi9BE)wfB>dg8$%K/jnE=DxNuagLt%yIj]>z+urA~7jUs' );
define( 'SECURE_AUTH_SALT', ')[&a.FEqd}rz<~?S~LTGl9.~wf>];WrH-u#S4JmnuTEWDMiy]Q!dzP~?8w.!XLBj' );
define( 'LOGGED_IN_SALT',   '{Bu9ue@;arb~kS3b5Q&fLa>4S@#YRL!KkKL[sB>%al/>S5r1D}Zz%hf!M6cR^^.b' );
define( 'NONCE_SALT',       '1_ai}F5IMJT|yn528gqXqZP^8`M#ai8X{<-ypR2t7.KRE~x2QSQQuWf%|z*w^0?O' );

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

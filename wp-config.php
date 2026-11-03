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
define( 'AUTH_KEY',         'RfT,&(+G{oJF$dNh54!V5_|EVy{t@NMF#y%d`G,V]kz)K(D>`ADg+k!jAhw5IrrV' );
define( 'SECURE_AUTH_KEY',  'gkbr[uD1hcP?-l}]oUX*k%O|CmVKtsu#KS{15hDb-q$uGy3Dz&qIW%%?/tfC%Nq!' );
define( 'LOGGED_IN_KEY',    'f?s%gJukJ7_H29.cG8e)5EI9gO8%1{wsmtmOc%R[|b}(P:sUA:THPX:?T_3kbK2 ' );
define( 'NONCE_KEY',        'S&htT.~L9=YU`^CAw%t57X#}i%iCNYK>wLO[Kab)@@$}<}c;+wN[).JIrT4admBN' );
define( 'AUTH_SALT',        ')`QhhMT=Nj_Ng{=~OP/HvZ{Z2X@?B(cq,(f`KK[t[jW(+ue2]9>;qs:Dq2i${Fa3' );
define( 'SECURE_AUTH_SALT', 'u!x7HdLWg>w,IoU8 9_cr/hK:u_DW^=VeBjM}+<I[oX4pkrLx;LVawl.LJ%C].%0' );
define( 'LOGGED_IN_SALT',   ':a$oI0g8gAnA&XNC(Sx>wD[wa>^kPv/f?U7Qpn&lwY.>Jr4,;^gv ~mUSP!rYr-*' );
define( 'NONCE_SALT',       '6~VNa;KMhoXNb{%|xV@EZ:1e$K0FH@FDMtXlQ+*]N$) =It)3DW(8co22>>0TMnj' );

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

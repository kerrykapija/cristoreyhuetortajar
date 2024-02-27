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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'bi*n8bp7S<0.2[yF=hJ%}o[r Vl;kHy(K$TGIxLsxa_=OBgLcKI;>eP^B)8[uGQ2' );
define( 'SECURE_AUTH_KEY',  'E]T.k+K=X=.8g2V}yR1-VtKN$qj~@7Q1c^d^X&<t9E2uKy|CF7eN[KhX!;xm#?^N' );
define( 'LOGGED_IN_KEY',    'EIw)c<t7)2:;QvLyqf0+Sel2f<5dR^pF|w^B=vWWyP8]G^QlbXi8D!aCP~=aJS%P' );
define( 'NONCE_KEY',        '8mn<Y<$k.~%;c_E)GKE}k/V1za!L0/Q4E6i7/tm(`wtQZGL&/i!jh1Wg.L|(z[As' );
define( 'AUTH_SALT',        'x,>EIj*K-u-OP!n.Q{1*u:cJT74;0uJhVrF %m $:+0gu(LMfm59v@MMt80GO-Y9' );
define( 'SECURE_AUTH_SALT', '!yCq@H4M~t.rvwxQcJp,CY2^*1`R.w$Ai]c:{*rkRs=&BljxM${K#Q!abBE,8{CJ' );
define( 'LOGGED_IN_SALT',   '+8B*]*<1(Zr@twvmm`#8t-$i-8tax/@F]vgk,13D##Jqz=fV~u.Ygp8V=6QfXvKB' );
define( 'NONCE_SALT',       'Z$R:Foz5enVi8(e4V@gOPfHe_eJrpZniC~PJiRPS`;Sd{]_N#Qz.K0+t=$>E=A~M' );

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

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
define( 'DB_NAME', 'ieccollege' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Pc7|Q$v5~ _Q&sIxCj^w9wX6MzLL[J7Ui8=BNy2NnPUW%`xw)}.s{uTLlU2Cs4#|' );
define( 'SECURE_AUTH_KEY',  '8EkL+7A[=wgU*!3+skQn#3YyfP8[2G@P_Rb2WR^zSPpQw[expSrFROi,yGGr+Xo;' );
define( 'LOGGED_IN_KEY',    '*(D>z$},$^w*1-{Pa;Vki&*6W~adN9MVC w.S]vCt|W)d?eOg:$9G0<cJ*q~^ 3u' );
define( 'NONCE_KEY',        '}-/4%3.ov_G?(Oe#=Sy .LA,ysY1!nYn[x@pi/Lyne7V^?DK&3Ii?}?-tkl1elm,' );
define( 'AUTH_SALT',        ' 99qhwMRe@#MDh<KTVH7P}-s@^Z^-P}G6q*)S]N9?9R0Qi?#;aH.{eNy*X!$=Ds3' );
define( 'SECURE_AUTH_SALT', 'MiUJHPo^hE,9E,P6Oa}l5,,^|4~os1Q)wbF(B8T+ei48LIJBfEpk:KMakiP(]+cl' );
define( 'LOGGED_IN_SALT',   'wJ^(YD*r(r6+WQo?CW42lh_,#yy`?Yhc~2`:qrYj[tpS6cTKQt:?&H,yv[jC.3b,' );
define( 'NONCE_SALT',       '(Z=XSk>2i;#rzZ/Sws<ztlcNFZhY0YG6@qFOyN^<H`R(_PVF<EFmLy9(5kG8`Yq(' );

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

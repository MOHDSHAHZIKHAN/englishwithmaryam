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
define( 'DB_NAME', 'englishwithmaryam_db' );

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
define( 'AUTH_KEY',         '+1`&?nHF$Ee[r]N3{8~dD<R*&=kym%EOyGf,3&<J6}b[(2cUYy~1{.RY>=m4Ep; ' );
define( 'SECURE_AUTH_KEY',  'J>cc4U71rvVMt4jFB@&n5y:F-IW<EJdHv?o&E8i789eYHRacX#AuP^H8I(07<d1t' );
define( 'LOGGED_IN_KEY',    '8N`X}%vAeW#i?|vW P3FiJyOLq*@I*d%V:{ CDc<k0A)dX:G Cb^<]UWZ?{XsvHO' );
define( 'NONCE_KEY',        'jPVd 7]l9+r*02SCh@CEvOu6W7JnVvO/U2t5(&12><e5}M]jTeT3|a>q-c?EtBBD' );
define( 'AUTH_SALT',        '[-xV`K?k)[sNb&Y(ef,Be>OTE_Fuwhz@6Uv;=HAKS*VFSXd :3GkhR$L4~SAVlLY' );
define( 'SECURE_AUTH_SALT', '+^AhDa9<VObSdW2<FFD1kH])K+f -di.W!@I>tHmg,1Kv1ZM)i0<gD/j=|4d|Gad' );
define( 'LOGGED_IN_SALT',   'iJY}]prGFR`~UoKOD^P[n86L`miznx#u0Xe!?KUSXd+$>82EF Do;u?;]}TisB,C' );
define( 'NONCE_SALT',       'lQJ$!!/*=9.9oO:k=@LxQ]J5.BL_ 8fnDsktt[C@ LBul?c.t,q]Fju*ZhShXAci' );

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

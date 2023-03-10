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
define( 'DB_NAME', 'ogunlabstest' );

/** Database username */
define( 'DB_USER', 'ogunlabstest' );

/** Database password */
define( 'DB_PASSWORD', 'wordpresstest' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

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
define('AUTH_KEY',         'LIF4@cDyWNHcB+U?.y$MiuONOb9r>l!SK&%qs> v{K|#L*^$h<0pUZ.>Ybj&Ffwx');
define('SECURE_AUTH_KEY',  '/U,RxM:mT1}+)4A1}SCN~{3a-P{UMEM[RACed%gHOyYNxAUlYn8*|+05+#lgeb8 ');
define('LOGGED_IN_KEY',    '&Ml@UtZ3@4,:+e1YUGxJ%nK9`Q_Hj(xUdE5!&)*g(Lnzqaq/UT,0xGgGI#bzG,+@');
define('NONCE_KEY',        'ZD?0<QE-HA4-|)r^+&+:,xe1UJ<4(p+`aXoGDHW=LaJ+PgIo`L ]RBo {uIt9}cL');
define('AUTH_SALT',        'S2TRm^|IU;E,>5A)Mjh=*<.5_N<9%f#ES%0:NG7g/y=Kb!fHC@L-r(RzA@bF|q9C');
define('SECURE_AUTH_SALT', '0|3o+K&|-p](f5/)|`c<^]x0ak}&@)ZR}%jUun&LjIeK>Q(70tG_~:q1+$]`zjW*');
define('LOGGED_IN_SALT',   'wky{WQ@i57N(iOT+/<*BjAXupu3fW/>q[IMqg+JPhceLQ~<C=hbxrHk4mh)aJ:wh');
define('NONCE_SALT',       'kSk2J[L=vL0$ckVe79X.hV]R@0-adXEW}#{<W%F6BO:ic:?2} (-%i?|&~-q)3l/');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'olt_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

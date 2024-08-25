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
define( 'DB_NAME', 'abdu11' );

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
define( 'AUTH_KEY',         'tfWaZ 2 j2pN 4q&5}RjfI5d-@q*#/`W,dGc8sxx&bG7Z!8c<mo+:B~@UJ+ G5.C' );
define( 'SECURE_AUTH_KEY',  'Zh[{2I0xU^O1rdFW|h/C}j5Z4tEM50k@BM_oWB.$pE3 v@[]0?AL`$X$<`SH&GmE' );
define( 'LOGGED_IN_KEY',    'Qt(/99DtH,1!gRMoM(+%3lT,%f:*6K,0uBi~s4W%p[[ ?8~v[Kbg$lSB[/x2E!@d' );
define( 'NONCE_KEY',        'Zpm!7HajQCQ#k5K+2]$P3D34OIYn1DlJzWL0fNGMH{o|Fk[ F_7/~4x]WDaiHRKn' );
define( 'AUTH_SALT',        'EM0i9pP0In!2kalB7<zK`Y$C-]e`nvG[1dL#{30;.`6mWJrliy=*G0:%6mnm!7am' );
define( 'SECURE_AUTH_SALT', '6yHAEuL]Us?6F!djqtlQ4gX#kJTjS#Yrk9oId!*yLsNs2.[Nq1JR3W3#N=cV|~%,' );
define( 'LOGGED_IN_SALT',   'Zp_i?.-oSb/j-ew2N8F_LjMj_mGOAyzS9m&pt(Z7ZA,}ajYg{`bo>F@6JcO~4da}' );
define( 'NONCE_SALT',       '%?Ze%iJ&Dig}d_92#Q 8?#Uj5[$6<moK9C0;9#F)`/x!py842vt|xs!39Z!EW^g9' );

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

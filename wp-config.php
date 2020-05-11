<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'inhouse' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' C:YS|^|O$eemG[*.o]ibw+eYxCB-#<09]Q_uPXR.[$T.vzqTS;-N.(bN8*TZ(p:' );
define( 'SECURE_AUTH_KEY',  'taNBXUz]7]3z&3/?cf;4_sOgRh[e@T5B+%Z{*#w+wBnQjQNsQ!^p?C[>&QQMF-od' );
define( 'LOGGED_IN_KEY',    'CeWmWDdrtyS;P.[Q/y78j,U.Sn.);tZSiv*)&X@?>b,WC]yL*.;C{nD<]L%VF,zi' );
define( 'NONCE_KEY',        'KJ;2;n:^V*L{?2,OX@-;ySFs&d=myfM9P!d*QDYP;o=b(-{~<,SA)#>w~<KXs+fm' );
define( 'AUTH_SALT',        '.q3B5>27znoZ9DY;-3jvh|;}fyK~FqBnn[z_%f<wcL/:`)yh-2JGWIIFjDc.]%.?' );
define( 'SECURE_AUTH_SALT', ']=s_hL<qpsL?KKXetDs|lNL(mV{y2~$*3OfZ:xQ5rl&Zfx]n^(*zeU6Py-jEH?;u' );
define( 'LOGGED_IN_SALT',   'DtP=G5xa)OyB2s}qH%7Q$Cgg>6,7@+`B LmA7}X@d/Z Tr/a[}K4.Rz~S~?Q(Gcl' );
define( 'NONCE_SALT',       'm|W+{05v5:{uyA<6]w&;n;=:6{e.:Cbw2kR}o]M+0/e(%-;f6 bi;pDFI$_na]>u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

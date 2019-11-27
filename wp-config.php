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
define( 'DB_NAME', 'codspon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '6[#8h3.n?)8xQ{q|G%?YYoG$ ZgD`oJ4SfLu&Y`lrMxxv[--EzpcrK eEzg^&aoU' );
define( 'SECURE_AUTH_KEY',  'rEKUgYb-<^]C$cy2[gTkhF$Mc(G9Mn[[%{XK,OP>L$P7K!h[-&|Oe0O8mxt5`zsh' );
define( 'LOGGED_IN_KEY',    'O::$[&reV}7<v+C.TS,bMAFJvK)IU(sn6vyJP%4dCF4`# HHt1N7ZWj?.kb-mvDW' );
define( 'NONCE_KEY',        '&(_~C2l^<5(*U-Q;{mtM)84lM!%<=JWTw8uU)_sb/+Lsj*]Wk:#=H kdasOwsgb}' );
define( 'AUTH_SALT',        '4Z_FChN3ntRmPIH%vY!81_)mh|Z~e4>o=.)-B}m/%A5FqDTg(9<-(:`@MiK*%I ,' );
define( 'SECURE_AUTH_SALT', 'Y .m5h:;YpjBH!bB&Nj $lfA:5=%jd9EG7&}E>~HY&g(8b;EoTr4Y3W-30p1[6 c' );
define( 'LOGGED_IN_SALT',   'O1Xic~g/qopAzd9>:zZ)7Rzz.1r[|nw1FfC:XW>o#))9a&CW{N@{rF3hyK*@*Hzi' );
define( 'NONCE_SALT',       '.hznH7{RoL4o->LC#z*We:L4U9Ew0a>_{!oGn/{OM-&>f3em0|~K[kGKCl#RtK6m' );

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

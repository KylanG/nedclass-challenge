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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ci^[[VT!1O%#9M^su5pU+eAC&dTKm=*Lq:`2fGP,[#zG$)+nrsQ!sZ&we8n$!qjq' );
define( 'SECURE_AUTH_KEY',   'D+exdLhfUrq~Gkotd3?B@~:qM1`EYK/cCDdPrh@nMW8wP47Z@;O2m+DLsqfFEFhW' );
define( 'LOGGED_IN_KEY',     'tfTx{rX%drM,RUCceRco4qk.Gv76W0iZ+wA:(T*F 0bcs>lllC{s#?y,([g`6}%q' );
define( 'NONCE_KEY',         '4_#lHJT;RBwGJm9gZ[.J?;kMCYD k&}y?6jy<`$%qaJ?crJndtnkjWm6ih@SRG.r' );
define( 'AUTH_SALT',         'pftLfnPifeO6FKkp7q}?TRZ9~$Wzq6ODX2e3_0z!}i.T(Xfh]V8pQvZO5n,1qr^-' );
define( 'SECURE_AUTH_SALT',  'HopW(7x:[A~?+oC2Mo^$i@/ZkZRGaQiRLdx]K}w?~HyaJJw/NZ@yAv*C1$Ak%c|*' );
define( 'LOGGED_IN_SALT',    '-z7H_}<.c5h4=inw1AypWcJ>dGK A_Pj@&}QgWcFTB(TXd5:iwNW<Q=3wc0VK*$o' );
define( 'NONCE_SALT',        'XJS<GLYPK8A9,c3S~z&Wxd4x:o{Yb:^dtaTE(Zry:&fhq$+2~;J`!B3cXyP[ya@a' );
define( 'WP_CACHE_KEY_SALT', 'yK:<cN_-)P5#.UaMqGrA)bU@DwT9|UQbBfE`L@TV1]%vjwZrxe$e5Wzp[$/%FNCv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

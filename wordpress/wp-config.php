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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'W&OmTBG8($HqK%aWm(b@[0DDb^=6o!K4^Y=5tE)6V%pb_splQu*GD;cV{O<AkN]m' );
define( 'SECURE_AUTH_KEY',  '/i||#Ve^yn`cL*#Z$^H A(7{{<5tiqO*pvlxcLi^O Pw&&9J8/:_zE!p9@*)R6a@' );
define( 'LOGGED_IN_KEY',    'ON*|@R+9IVgohRXJ wGpJ99wo9{kd:kdTn($[7.tR5dLK-I3!%e-i4Y{hp ,K}L$' );
define( 'NONCE_KEY',        ';$q&qCp2^s3t~*0#iSR0GI(R>]D6cp7i9^#4BS+buH&4xegAd0pP{ QLVzd~<Q93' );
define( 'AUTH_SALT',        'Uvv?i@cQOk@Un}HGsMgs`J=N/7ID(i)gSxU.~=W[cErnBe`a<1r%RHaG:?vAd&%S' );
define( 'SECURE_AUTH_SALT', 'dK!~U6:o![jYnD<.U,[v2D=M/Oylk1e)|%sR~|pMCA#ka?kN$:lSc^G0SK2Q)2<+' );
define( 'LOGGED_IN_SALT',   '~wM?}6vj9i,ut:rQ)-5*ZZQBS)6#:u}mv#v5r#[n:i#IJm~FDQjgZlaXJ&Q>3o@>' );
define( 'NONCE_SALT',       '7%r{Y*KbVaogf+?OP)F~LH6(TTfRFTczutA{e9y<j~dDU9!_msapJM3|2(M&hO |' );

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

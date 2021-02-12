<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u655552791_WoZX2' );

/** MySQL database username */
define( 'DB_USER', 'u655552791_WjiwQ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'g1E3PBoQO3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3S(Lg^zN=Bnd]nj_5@}<7;#pj5);VsovTW}iFPUy.ESAmTa;U LN8R1y{3e923>5' );
define( 'SECURE_AUTH_KEY',   'Mo><R$lN3!QYRy9kM3ls,9#PoFT9rf(rb7NWYmEcjhK?kePicT[AoMap6`BsrQ~$' );
define( 'LOGGED_IN_KEY',     'HhwL`a{;xr0~TGoku;(HUx@ van>C4{]4;R#r*F%@5YZJ4$7L)fH@s zw:Fk_9(W' );
define( 'NONCE_KEY',         'OIgyfB:?};`xko.JNG*!6)7)W1s$G5o`pHZR!tC6pBIg)j6l}Zt;NI)f,:r#qzPH' );
define( 'AUTH_SALT',         'VR##A :EM?g`BpJ>|]k0[}+NwJPwiTndfz1bpm]rwf71lZ6py8tO}6#`4e3vCcvY' );
define( 'SECURE_AUTH_SALT',  'wcSmj;*vNXo{P<=%U-h _Ipl~Q*>Iuk-s%*A-3!ZoTv`oJ@o8~*8@Y@Lor%jDWk?' );
define( 'LOGGED_IN_SALT',    'N_|iK0HD5mGK37VizWw[+~}MV@6oY=5c9@J:S5L?|{v}f^A{84<:&zQdw~joKyoX' );
define( 'NONCE_SALT',        '20s/Q*orwo,C}uVOkNF6+j?nM0Q}ET%2u{3YQM5wlgqY,7.M7=g6;>xNgZm(5 gv' );
define( 'WP_CACHE_KEY_SALT', '$pXYV/}phn#&/6`%Ey>yQC6jU)?+:KC *2;D(xhO}C+4e+INpsfB!;o Kx]1?WQk' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

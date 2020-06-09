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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'linchpin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R;u-IEb8W+nx+8=4UO)M_ax-.^R?=7:;&pw$?HTC=Bz zG.[b]f95ct(3EVxmepy' );
define( 'SECURE_AUTH_KEY',  '8(6**)PyLZx1aS5`su$C?:o=.[-D{-CU>}XuFK(8I,DZCFU=!ybJlIBE1q lirKd' );
define( 'LOGGED_IN_KEY',    'W^-[iBVJ9.Jo#3S^h$n/bGB.r~`D(L.?P;)^!.[!m@40l=5xE?CQdEEi0/S?HRC3' );
define( 'NONCE_KEY',        '#V.{~Q Dc+Lu`N9RChUKOZ/5+42; Cw}*zwPS<d5-1C>IxcY6@UU_kv>RIX;2{ &' );
define( 'AUTH_SALT',        '8)wWsoE_o{l;LfM#H`o:B!7R#!HE+rs.Rp=Ar2ciWk6TIku1Wm1;t#2`_>Zw^*)m' );
define( 'SECURE_AUTH_SALT', 'VQZ:Ja8]YpWmJURjmy;K&7]fM.4[W$^jFv[SN,Z^VZORlN$.QD;1O> ]xi[*^IlQ' );
define( 'LOGGED_IN_SALT',   'S2~D3w+vB=j!+V7^j~b?x`:<*ve[^rZ^_GKDeA*<2Uz[{&kLiL[29U-xd){+(kTE' );
define( 'NONCE_SALT',       'hX`Ark<N_tnm$(f!ep<R<#JKXpW,cHU<m&xzrNFibtf=i-V[+kv,&/!piX~bjOH*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

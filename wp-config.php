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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'PNF]i^tV9J(TfR0>P4X/?|ovY9cY@c6Q:fHFhyninP$Eo>MV|a`O~ReOsk,u>Blj' );
define( 'SECURE_AUTH_KEY',  'a;a`$>F#({EKL$T<E#b_,sT7,JP:Ya,?V}c7))BP3Zb)2yFiPVDbL?;/b/%]wocu' );
define( 'LOGGED_IN_KEY',    'v-NH qaVX&bB{J>N+SnicpQ-j;qXv92]*,%OqQQb)6S-o6=sX:<$tYn?M7;WOM,+' );
define( 'NONCE_KEY',        'pq|YRVQfjPej/eQ=vWFgDiLGHw](<Rf13(8rV>V1xic><evHLl&TOW@Z0Q9XRIY_' );
define( 'AUTH_SALT',        ' GpKzfCNAk,;Kp>@1_qW>|f1}x;J0av_Q5@g:TND<G#IW!!g`5WC^crwyceW*P$X' );
define( 'SECURE_AUTH_SALT', 'JP#&:D%%6Q9~mWR(V8^*x_M#T;KRy^]y0_+FSp$YW!AU%%fe/)!q&(3n;-HU(drD' );
define( 'LOGGED_IN_SALT',   's~Ne=NR:KP+O3=~8#TKpjz7 Cbhl*ok|uqozniv@;>t]O3cZIhmt[gv%)o<3=0UT' );
define( 'NONCE_SALT',       '~c=_axi3:R!_6RqhM?*JMVcu35}iZ rI=((Ogorw,@Ki[umI$5DB1!YGUCg28~o#' );

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

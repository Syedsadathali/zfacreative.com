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
define( 'DB_NAME', 'zfacrrie_ZFA' );

/** MySQL database username */
define( 'DB_USER', 'zfacrrie_ZFA' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Syed7732$' );

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
define( 'AUTH_KEY',         'u72sdP.D^*BK5S$L19Fvw(z^5~yO[,:CYQGHm_5aix>e>+e]dK{k^M;hF]E]K-GZ' );
define( 'SECURE_AUTH_KEY',  'WS!ldSGicE&}]wFbdAVtu_zx/l(D$v]K-G&}`8WkZ!5W)n%]|%N!>3N^T9Va-j~2' );
define( 'LOGGED_IN_KEY',    '+].Ci,4YwSx+*ydLJH9G#.oG%Qj%WJ)r9[;;`=,IA;P[H&,)E8:FSZY6[Py<T]a|' );
define( 'NONCE_KEY',        'Uamq?*I:+H.#3{K:0kT7.K}j,1]Ta[@<%r:#J4,(AJx*d. k/2fNF~Uw-wb~_6&x' );
define( 'AUTH_SALT',        '+DpJB>*FW*3rCCO_jL$!iKM>j7EtaxL`LQ0HFD;2EzxqSw@fCO=)XUf-=:d:G;m0' );
define( 'SECURE_AUTH_SALT', '7 *qI%%wCus7p_m=mtnoK{G7[KV0scF8AoVv5K+u}Pb~4}w7QC`aA__&i60qM&iM' );
define( 'LOGGED_IN_SALT',   ')t=EsqKxFp=a%k4@{r_Li.Z |EwfstGK0VU~.OFRv3JZ6>cb@_BQaOiT/^cqC/bz' );
define( 'NONCE_SALT',       'i3ui(bz@<-AXnnC/)$(Y+eER0L:8kpUp:&UiS80_W0/vyvj.w90L)6z1ZubkhlKH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZFA';

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

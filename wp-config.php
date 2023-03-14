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
define( 'DB_NAME', 'world_events' );

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
define( 'AUTH_KEY',         'J5~HW&w^+-wYoDx229`b1Cix.B5`(dM0w}u?74@Z)U^an|2Q8q#]D6[N)=Br{#,H' );
define( 'SECURE_AUTH_KEY',  'vcN#K:ruO$SCI=!BN*rI4+yHL!0*BhDMji@D<Z2~uccr]w=606L7-u=J+[(rROtk' );
define( 'LOGGED_IN_KEY',    'r91InkO[Y,I!^6oi!au-V9?#a>jbNd,L95L)/1w7:DN/V709CoQ{)FjPYn BFQY.' );
define( 'NONCE_KEY',        'XYt5%WjC$j<rX:oGQaXiQ@X<P]M,9PfUY4r%!u!y<V*0H!A(||x0v`1m?)Ld#=,(' );
define( 'AUTH_SALT',        'c% N{=m;g*),^-_m%o>F_+SSNQ~={H${p|<CE@>U@3,CX]VQDJ>/aWK}H2m,-PrU' );
define( 'SECURE_AUTH_SALT', '[V;q5yE4*y+B:U61kx<JCqWrFjT`;I3cw:nUJ|SCU@D$d9R1+MZt?Bzjwk>gF&T(' );
define( 'LOGGED_IN_SALT',   'S{.ndMAQ|)2p3Zq 4lyWVDui4/]=MY}fI@<-Ja JK+*hC8{ULbyZw?PY8~7ClfF2' );
define( 'NONCE_SALT',       '@{3,-l.*D[o@lR=#F`aa,u;,X.2Y:Fip[/rm;EfDdcXpP_<4c?_lyg->i~{?xS[q' );

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

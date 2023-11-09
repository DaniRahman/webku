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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'danirahman' );

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
define( 'AUTH_KEY',         '>hWo:_9?Bur~6XlfRve={q(kWMG~.V)J`V*_qRv7wU?Q?n|Ht#s5Q/DD7_iwnb~{' );
define( 'SECURE_AUTH_KEY',  'dYf{^b$Hz{u{~M<rLOn{$BtOuIa:o]Hcr0HUO(wJU^G-8iqq:v?Z=@0.T>bN/qgg' );
define( 'LOGGED_IN_KEY',    'HJ(=k_Vw0)Zq]|<zZ,W_;?&Zx gIZ#S0o^bQb%B#@0u))O~2~N2z&26*,LQQ^o4%' );
define( 'NONCE_KEY',        '7yp EkQpMdRqZud;n~99[cp/gOPRNvp;x(F6nTU:&T^&_|5$h=7mQ?c~^me:[~B-' );
define( 'AUTH_SALT',        'E={Pm?&*VX:GI)}2SBlv_l:@)kS@qHM;~rBcH[<+tghw3HaK_*_7s4-Ssn5@-f]-' );
define( 'SECURE_AUTH_SALT', '#taRS07c7iq:uJ#f^ib/qV0&QL#b4^9-bhj<+/9 eC%8>qrE^3vU1Ip_6qSW?QnL' );
define( 'LOGGED_IN_SALT',   '==DA+rS)X7x$,[LkNT$4K+LB<2)BLv[]1}}(k3@R1qH~i4J$(~L0exOG&TyH2wHl' );
define( 'NONCE_SALT',       ';LF632sl4eVtr.V$gR@5f$_za96JLSYY!wfv^H,jfNXYA**;[%ty~8Q|@prVG5h~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

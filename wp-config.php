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
define( 'DB_NAME', 'DiCentral' );

/** Database username */
define( 'DB_USER', 'Mentoria' );

/** Database password */
define( 'DB_PASSWORD', 'Mentoria.123123' );

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
define( 'AUTH_KEY',         ',<}q[Ejl<MOdkpiaw)Gj;4GeWuyW<S2M*v)b6MIH9Ps$KnG;!nI~*9|zUzxRc2N9' );
define( 'SECURE_AUTH_KEY',  'S3{i6$8X|P`|)Rb(Z^,L#K!-l%i9MiZMKU_!(j2~T7pc(AknI`$BTpJ{N{s;vEcY' );
define( 'LOGGED_IN_KEY',    'J%Ru/:,v=Z`jBj]`riKP](!^r#@[HLv!R|;pogCR$OSh29(0~g1dED$dEj6>}RK#' );
define( 'NONCE_KEY',        '-:0?H0#QKJ%A2l]L=?VH,BUuO)OAh|G9jV:x[I:,_-V#H+AdD*wq1*:-`NKc>+b_' );
define( 'AUTH_SALT',        'XT*m~MkYuo%?Xd|UornpO<?kr?C@KI.2y7x  K=.dR6R<]FZV0A#|j$z]t Y:SHd' );
define( 'SECURE_AUTH_SALT', '[Q+M.7s=b<Qd?-1:|[eX^Wt8`7g6dq&ji^X6/t_%[oou6]}M(gB%C{Z(mt$7^Cqu' );
define( 'LOGGED_IN_SALT',   '_4IOlB0fqBg<]J;8 1]P*)tZ.l9=8yQ,>8aG>on~Y>H?Sc@kQ7no2K<mt/$S,Fj`' );
define( 'NONCE_SALT',       'UAoS/b{ZkY.o/|${z/.9KqWCwsI2Gd@Fw@7u/MXkMBb;$_KZvk!~%4Qv($1]UTg]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DC_';

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

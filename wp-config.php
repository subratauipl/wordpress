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
define( 'DB_NAME', 'uipl' );

/** MySQL database username */
define( 'DB_USER', 'uipl-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass123' );

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
define( 'AUTH_KEY',         '*Y2HmJZKg{8sBo^*SQN$@t*/!,dehLr00Vz}K1RJffC^im&v2antQq2P!-?zzAVi' );
define( 'SECURE_AUTH_KEY',  'g.gZVQua)85cp^/.!#~dPleW !Ezm+MTKP`d@0**F5CDeG4w6tA4KC@On+xa:MOS' );
define( 'LOGGED_IN_KEY',    '^LD,I?T]lo6ckze.7KMnN=be,5,FGMbTx/lxoJAYR<1k*^|D*UwwA,z9^GR{L`@v' );
define( 'NONCE_KEY',        '991~.KLD/+5%q:>h].<|INs1mjc|y&??~20V3b[`TFwE~TAFm1I=kc#{uYLG+<=O' );
define( 'AUTH_SALT',        'DuoUd2-Hpuy[-*:2<Gx@3Y=)+X9@FFx2)g)S+I)4-P(RZ7_>Sy;s^b  L7w#t:5d' );
define( 'SECURE_AUTH_SALT', '0*I3-_LOJ*|_edk%#$ J}3o$?}Myt&9u$,gVoy`$LD0:GJHtGv@v*NxvaEZDwa2E' );
define( 'LOGGED_IN_SALT',   '-Tz!_-Wh,Q3QiUK?Lk*}te.O0Can_IS6wx05c}946>N}*(~2QmOS{zFWW)}=$eA=' );
define( 'NONCE_SALT',       '!ARD[h>k-|=xU{V(2[ZR=S[+b8Ln!UdGJD{a|7x{{l+m7BtrJR`1%ruv(qtM}kWV' );

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

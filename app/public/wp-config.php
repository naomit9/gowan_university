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
define( 'AUTH_KEY',          'vF#`%_T)G~s7`5n)Y:zhDPYA9uO.rJU=G[!S~b:j1@!K)FW|Nu:XS2@g.1mzW!x{' );
define( 'SECURE_AUTH_KEY',   'SbzJv.f7r}1`znDk7-aAt_6$8*{H|,uPjT?prH6=e;H-B$`f.,gJfPM}<zQZk1![' );
define( 'LOGGED_IN_KEY',     '[FXV,hyWt+or&L:t<#GA`l=@MU*SAaOE$6^M*,@c?Oe1{(<k0eNVJ6AL8[-})S=q' );
define( 'NONCE_KEY',         '<[.ur9 V0!x6D3wFjdo*}qmi]yA3+tV&tM^=j(iU[4ipKO}Oz12.=$HJ`8i~,A|.' );
define( 'AUTH_SALT',         'w1f|<FM<T-?KwM&#^).o(-wf-QLsjFtjzI:Z3gL`&Jqv/]72|a%+xm/c)`;>bHEI' );
define( 'SECURE_AUTH_SALT',  'tsu=7/OU8Cx75=>FM75<OTVRY;/1%d}u^.&Q.)fTV;}9D:J*|R ]H7EEIt@6.,|P' );
define( 'LOGGED_IN_SALT',    ')aBkTsi_FE$W`Chy*8g-&xikb&-!xr5/#*08-3}#_NFbOke)A.BEvAh6J1WSG&}R' );
define( 'NONCE_SALT',        'Fn$xdY.7bt3e.6foCA^DFlWnG? uw#Lj)miW7Ys%Y -(;*M[92gI*_%/Bs%6s!AO' );
define( 'WP_CACHE_KEY_SALT', 'NFattUb$.`Y1;%SCA/Lu]6{% |m jE<@&$Skg];3rl61krpFt[e$CyOWC=}B#ZHN' );


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

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
define( 'DB_NAME', 'raijin' );

/** MySQL database username */
define( 'DB_USER', 'raijin' );

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
define( 'AUTH_KEY',         'SojkKuk=FClKOViE_in3lGQB<-0:xgdJ@i5l>,W>ll@k6ju#-_!q3L/<:Bi8cL]3' );
define( 'SECURE_AUTH_KEY',  'psCBngtR]+aXNo?sn/ZYO,LY{m*Fh_vzfERZTA{z(JegSJ:1B*(s[aK)~Y!~SrzZ' );
define( 'LOGGED_IN_KEY',    'r^E2aW~EDr&Zi|Hk;9`p}@[Sp*D)w-/*HLFkbr>sq%Eh9oPj1;WJ7H^;DghlO:[%' );
define( 'NONCE_KEY',        '!!}bepH,z0VvRQPeLjc:vF;/1^*gn#-LVLXVKY^O`z/v%UzZaDh87+1W6x$*l?OC' );
define( 'AUTH_SALT',        'i7@!Bja;-mx*+)w`Ns/#>DX^1G,Ih0H&YC-<;`2=!@7-gtmM`9jg-+*D?;FOt0w,' );
define( 'SECURE_AUTH_SALT', '6KbIVD N[Y%Tc)tLzb!bpG{tJZ!V41K>?|:pn^+ a_^GhhePH6C?L&p5tJ.+z%Fk' );
define( 'LOGGED_IN_SALT',   'FQbLnb?#Zq)6zYf]3k0+*xFu6}GVY%bHj|}xDpJ=zH=3%D]Y~?7N6#1oOL,`MbI-' );
define( 'NONCE_SALT',       '|y#ei>XLpSc$ZyWK)Z+6A?#LXjMErj?edu7B[pX^FEz(M|Rpt?Ayl;?/z9E$YwQw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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

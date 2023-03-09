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
define( 'DB_NAME', 'pop' );

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
define( 'AUTH_KEY',         '0;MkwRy!YlbPg7F_`<It^5F*f-yv(4jViJ^RpC9ZjRbhWY)D1Fz>wq:q611N+>?o' );
define( 'SECURE_AUTH_KEY',  'fJa`d(Y!A`4|L+Q]hX5SVZ, _gn9_9T.If)3EC5-j92A(>Y9}9]0@r[MlyTet-Pi' );
define( 'LOGGED_IN_KEY',    '`cHxk(v L1|GEBRHT/|R-u!(#dRZ?3ly<Y|MnCZ{6CQ]Mpx+~PZrbqDk#p.P.6Sj' );
define( 'NONCE_KEY',        ';=$D4:1MPLsY_W(ga}tH5or}9b`(bU62.*VXhGa;YyAP7J1k*XX7qui:ynab^P$+' );
define( 'AUTH_SALT',        'eLpEfjK`S0a~>6 %7D}(+?S~XB)#rEtYklIV{+U4nhgX+C%z5k87fs~VJ2QJYsT[' );
define( 'SECURE_AUTH_SALT', 'U%pjVn!]56t]~k~-^M7l0UQu),E=o#XCI~+-xQ9*Xa4;Tdiu!xFR89m=D.^VC/U.' );
define( 'LOGGED_IN_SALT',   '{t*j.1N#>+K&<@P#S;p5]I(vf%]nXLd1J>/E;rKh7b1t, qBAsdciMDNWc;}+D(g' );
define( 'NONCE_SALT',       'WR:}.dd{bQ,09kwIp]U)/;Yq}gZO;YY|AxtJl~JA4I+VOByc,Ls8w&S7BnupA#rs' );

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

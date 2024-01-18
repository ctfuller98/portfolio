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
define( 'DB_NAME', 'cameron_portfolio' );

/** Database username */
define( 'DB_USER', 'epic7_dev' );

/** Database password */
define( 'DB_PASSWORD', '3p!cD3v' );

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
define( 'AUTH_KEY',         'sNs|13j@0Q=}BSP|~YR^{kG E}5A.4~au_%VUK1M?0_OU@Bx_VMX+_`e:$|0y?2L' );
define( 'SECURE_AUTH_KEY',  'xJ5-eEkLn61bB -?[(cqj$Rc*&gRThzp]B(rA{jDfiB;A<g.;m<C$aG@jg;:[S `' );
define( 'LOGGED_IN_KEY',    '|qUw_/p*FHuO.qE8M3FQ{`&/,wZe|y&2Hi`_Y,.C|TZ<zdTUYc5I<g+~>#D&fZ~_' );
define( 'NONCE_KEY',        'j!bO@9{x/OqQ#~!21sU!Fbw_}bLtRA#n0)4~J]x$dZ$amcK#P[7Se)-?+=8_uLy_' );
define( 'AUTH_SALT',        'KD,5=tl*;IW*G1a@nO)&O-K0rM2jFwh5hay[:1/|F%/6+ o7u*))s[~(SyLr}wN!' );
define( 'SECURE_AUTH_SALT', 'frulrK&MF8KW|[tN_$oqnn88y44v{c];Os<gj}dWiTS|tq4nZTDLuXhPwlYScx4}' );
define( 'LOGGED_IN_SALT',   '45J1X]w/}*;wX (LxjL9:i](7REb/97=^nH|V}VEuD=Ia6%JK0vv>8n9PnN`U<OS' );
define( 'NONCE_SALT',       'z{J&VZleg|gct`}XB.vH?6Af49)52F |+wmTPDY%HWl[HX.kt<Je;e6t+}A(D*3[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cameron_';

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

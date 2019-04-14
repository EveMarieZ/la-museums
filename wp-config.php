<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lamuseums' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QDe<[%jZ(ro{Nw6=%1$yvS$/225G#S823USl+Yj5~Tr qM@Hu+-LUe[I3I`^VH.z' );
define( 'SECURE_AUTH_KEY',  '#>yuR&QYL~XkQvzR:Jb4z`_@B7w~qjdWa3~c+UNsn!k:mNv0lG<)r~JpYaZR/;0O' );
define( 'LOGGED_IN_KEY',    'GxULc`^]g)!|q~*C;3K2C,t$1:;yI;!QEcg$+vZkk?:g0qU-YHOpMvV_4NVv?Q]k' );
define( 'NONCE_KEY',        'xzIc]d? <J%)!=30@rzTNo;t0o t  _W;~%o5,4R$:IezMs%mIM8hh,)H&oLkMGZ' );
define( 'AUTH_SALT',        'iskKi}OPV/b:z:[.`T&e=^(gpZ*gi7|*7k/0`_t7e+*Ol-j?uf%31=,1Iy&yeALa' );
define( 'SECURE_AUTH_SALT', 'o,6=bVJ3H#L:ME}VIvUXJhFM!5(8.?NQO7C7Y.|1B*yrff>KxAe3[C):Jy}dzVqU' );
define( 'LOGGED_IN_SALT',   '!(p0zU|wIDi c<D~b9%7_f@nj6<FL#d-5y%P]$3_Kf*c1Oro`T2z5ro%rV$a^gYl' );
define( 'NONCE_SALT',       'n^!O%[>8t#uxi(&5^c&V_ysAdOkEh6FC7zH+R_Q73dya9<<(p5&V&/l.V2jnV3t:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

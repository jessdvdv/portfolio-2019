<?php
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
define( 'DB_NAME', 'portfolio-2019' );

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
define( 'AUTH_KEY',         '-sCI3W{@rA1Eex(ZioZ4mE^Y_59Fu<8Y;6G]J&Wamdm&:<SnifCeg{i ysvTC?o=' );
define( 'SECURE_AUTH_KEY',  'luD)rPLJh%o-7Ect ~.(8:jMVbOobp1*,KtB=v&ByJm,)Tb#C82vhyH8,~)%i)_N' );
define( 'LOGGED_IN_KEY',    '0p`6Jh[_|`p3^`{11!uYji5RZ&JePE@J<qnn5N<%dm^?XcGMf-eir&Vnk&c8KU{^' );
define( 'NONCE_KEY',        '0)6qLx`<7CH?v$H&1m 0U-mkpB5FUPti}=h5gv/MVK#&:f73v|]X_Z0/:bf5QSTn' );
define( 'AUTH_SALT',        '9lJ0Q@^N*2A^TyD0.TQR/sS4rr8*J3~FO2^izQpVoR-e4h3$=>k%8D=]oe@uFwIj' );
define( 'SECURE_AUTH_SALT', '.wS=||KON2{Kno8n3~4iClc]Ht7ABJ?!Bp3,Wf2d$UJGwEJh]6pZ^)!uB=B&4{WK' );
define( 'LOGGED_IN_SALT',   '*xG`O8u<F?QW0QW5vCLd>%u}){E`4T25w&bK+?Wao6;8]Ak=H.)RZx[zXpEuRbR-' );
define( 'NONCE_SALT',       'r#i<I]tUT#@gu[F!h3j[-aZwPU.jC=G1$`d|8%J%4,HyyTPjhgG5#FZD[bJ1+p$a' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

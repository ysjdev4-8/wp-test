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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yu^aIuzFY}6YDS6B)HJBM7K$bD ?1j5f+r%.Cf;MnUTJS/I@Xu4Ypr(:7o;6]+Cx' );
define( 'SECURE_AUTH_KEY',  'L8GOsL )smSq&8WFGP`1bjr7J$XU}luuYhmg)j@8,nE<cbMb`P~E9yx~zQ&(y,$D' );
define( 'LOGGED_IN_KEY',    '#^BClegMcVr b>D]0z[M`9h#[.Q bKT+3Ghc{x&LxA8hDa}Zw;Nx&G;4*h.h]rvg' );
define( 'NONCE_KEY',        'g,+X8 4VsEBo wcym@GD4f%-u!H{RqDtGp;xFyR9VY-n7^~uqWw%A%)TANe{YE-!' );
define( 'AUTH_SALT',        'Y27jU/$}2BYx^ka=8630O8RNe|v`s4b!{rN/jUWb8Hl/};DP9y&oEMz5C9Httdsd' );
define( 'SECURE_AUTH_SALT', 'PL*Y@TVao?zW>pWWc93bq&K{{d;hv?Tvu?vde.<)gcF-xKO0xpE>$ccY1]tT,E`;' );
define( 'LOGGED_IN_SALT',   'A;jON.0d[o<>~_`_[XEJv5g]22f2whFc.M@gH6`D9zZKRtlIIVKjZy%w-a>4Zx)o' );
define( 'NONCE_SALT',       ')Z|.@sDeLI!fqn!}kF+=YC.)Y^K%vwlKI?cfhrnc|/BCk|/G8;G_.R#4h8|;@]v0' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

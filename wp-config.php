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
define( 'DB_NAME', 'theory' );

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
define( 'AUTH_KEY',         '%j7QH |N&i1v1@em:65-K.!&DMJ&;|^BgE,{]+sp?9N-1;`0*b:x!eBP0aBIrG# ' );
define( 'SECURE_AUTH_KEY',  '`syKVgnw^6pG;]IB}GjnD>]ByS4uM<Jj-R)yqn1Eph0*W=qO+h8@.l?JXko|z[xc' );
define( 'LOGGED_IN_KEY',    'Iv5r#:&^K;n@GJ!ZY9;1ISFj7V*1W c`ro<r&@WJ<OUX,w9bq%-r)ZlUIFQ{%!Qe' );
define( 'NONCE_KEY',        'H-H^ 3kN-BaQ9z.CQh1ZC4$p:6`Z%x%}j!&ageDGZVahyMDs@B+M?HI(.(.N9[=,' );
define( 'AUTH_SALT',        'u]M[V>SEv6e=H6tK~X:?/M4aA>w|@1*rX(#$o[ExL5tfx~7c{$omA&YAY%]Z8ZOp' );
define( 'SECURE_AUTH_SALT', 'XNZl%-69~mWW:SK/A6CXe6n18%@?<Fz2SjX7hI.l-9E`IS`S0 H8<YJ%i)`INXEH' );
define( 'LOGGED_IN_SALT',   '^T.dD8^a(7f$} _kK?pfreL(cqi;PXD*uWfGAb!jS<OwK`-]c_$x|K%>uIi)BwVK' );
define( 'NONCE_SALT',       'sa7 Fs%n=^=XqdxuZN4>tB{*%`4!T |1`0S)u7lZ;zISH8&B0)Jf4VLYnqh4Jn0`' );

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

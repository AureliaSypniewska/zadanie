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
define( 'DB_NAME', 'julka85_zadanie' );

/** MySQL database username */
define( 'DB_USER', 'julka85_zadanie' );

/** MySQL database password */
define( 'DB_PASSWORD', '2m<11.bB1#>DL?5' );

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
define( 'AUTH_KEY',         't^#[Z] OqwB9q%DA QhI^WbINYcjK]C4JRR6;a] #:.K^&RR|r;pu_]ztVOT1)75' );
define( 'SECURE_AUTH_KEY',  '[!&mPz).4*qs{M14zTWuPRD7qRs6_o`cWap)L&=pAhB<G/DIw1On@ZmYmuk)_Y_^' );
define( 'LOGGED_IN_KEY',    '#B-J;%j8[+as#~dt6&Xjl;yD|vH`j<fsIY>, XR7,`5O;H4NxYX~m;CZ9[h;|n^d' );
define( 'NONCE_KEY',        '!FNaE >.a  lLe,-#3(S=$|[HRv@Q <n>?!(.b}t|`%&FuL;$#jb,:]Y^[l&o[8d' );
define( 'AUTH_SALT',        '{,tS^kQ<1(@&j<y_B<3ccWe.<-R(M{>?puJ/lBG{,@y_s<;wg:^?ZTv.#rJjrM#%' );
define( 'SECURE_AUTH_SALT', 'kw^=sO*{[)2vwd+w5oLyzZW;>0gy9GOy,>7WXeQbi+yEw#pJk+xV`ltn8v/si]kX' );
define( 'LOGGED_IN_SALT',   '^UWUS{TOg#Uf8XXwb<*f5`&|_M3` suA,R f8Z~(R{c,G%sFxd;%(+M M;@[HJtM' );
define( 'NONCE_SALT',       '?x?5j3SL@IRLsyssSN)()AfRYGpd>S#>380!aM/E@B#BT*h}1.q+rY,nb>I])%mK' );

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

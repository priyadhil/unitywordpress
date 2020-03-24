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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chinnu3!' );

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
define( 'AUTH_KEY',         '#=_iW!$2X <`ikWbDDW3vw+S)V8mhM B`JKXNH5BGgXml,Xc0*6F,k=JjV|a`)Wo' );
define( 'SECURE_AUTH_KEY',  'uIm~u!Jo`~bsgm@pg{&]s^Y$QUrbbWtYtl[EK5=h,|7=t~,:pwh1`b97PKiFqPa=' );
define( 'LOGGED_IN_KEY',    'zFFSKW)#zFnSt$=X_pIW8LmiORu/`2W4A[2I%eO,u#uskq|yXu:rd/r(]A<nNADs' );
define( 'NONCE_KEY',        ')`XNTr/F}Ay)RsW1LN:=mA~#@61;ZdffBt(!=sN+rK>Su>&KqIQ{U`6I2cm/[tdr' );
define( 'AUTH_SALT',        'Fr)U0d}%.Hbu4~u&C`Lh(bxU9xYE;[=s2IB5kX=hGOYDtUACW9wT|nhYa^/eMvxC' );
define( 'SECURE_AUTH_SALT', 'Zk uq_1ek)Qb3.Lu@e##V:Ix7nP^wJ@fAo@w86ca&q,l+1LJV-TWP*&SdD-se6B-' );
define( 'LOGGED_IN_SALT',   'wRY(`q}+>E/ @o7ao*{#^d UqJkn;(Z+/AnZDlZwkAXACTmmK4+pOJLt>p<?a(ZK' );
define( 'NONCE_SALT',       'K!]||!J4g~C[m-<4j!946aE i7 j/uOn{27h4Sc{,w(sU50H&,_MTj(,^iFk*b[N' );

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

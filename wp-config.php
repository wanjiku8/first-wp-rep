<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'margeventures' );

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
define( 'AUTH_KEY',         '*#<c6fsPh6TMzw~zKdj<9P~T-DABR[G cA6_PPxs+=S9EHsn4d?ZBw1u@p33sZ?q' );
define( 'SECURE_AUTH_KEY',  '/{eFv F_/?/=R+URkKrI#`cCf$MmSUc-6Pu{B,`R,c-xcj7e%7JBId2~!W`6gV9p' );
define( 'LOGGED_IN_KEY',    'X:W5k=U@>zJ=krlhRumGs4cU#}#%IE07)]aT:gx=V9bg|Pk~rs9*#nNlg@P3%#0-' );
define( 'NONCE_KEY',        '@DBh[DY{L^UXn<+tS~=*u)Rf5}k&JJnvPX;7*)}YY& BRrKIRt[H]j6FS,*jU*iI' );
define( 'AUTH_SALT',        '?@1xXUaKGcXE22SxN9dAr=T eOC*}0R,&nNj[7[,OrT<m,75;]N0=YUewg{3@&0l' );
define( 'SECURE_AUTH_SALT', '7f3#XU[]q*UZfh|df,&SM5ulsZt_d#1pra-,y!#@E~ 0{P-Py:FK{1s}ie($h<HR' );
define( 'LOGGED_IN_SALT',   'NF0:Wv0vei^~X;5}?wKFx3eYe,~Sor&1n<O[r<ccbg%]k}}Y0`F6m=3qQm_2J7d,' );
define( 'NONCE_SALT',       '_s,ECt8Xh%D,xi->~{l/A}FmG82C3YV3c|8W(h26Ndezdm}5n>HAhr8YMq)(nA2:' );

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

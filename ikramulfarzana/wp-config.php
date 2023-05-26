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
define( 'DB_NAME', 'ikramulfarzana' );

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
define( 'AUTH_KEY',         'XN](:{v-;5,a[% ;g`:~x6T[#fbs{;uOK![LB[M6[bVlFiLmtws$D)RV@3pqE<#h' );
define( 'SECURE_AUTH_KEY',  'wlj&,*~lMS/A]su|O@5B/QdAKi7YxHpYfm)(HPQ^&1L364wAUBd=:Ui(36{&)?kF' );
define( 'LOGGED_IN_KEY',    'U{5x#Vu-xGNE!fZK+pc5HhCSg(]nwo,$Y,n~s/a`qSny?HTv{UKd/[hr^bNbi<Ll' );
define( 'NONCE_KEY',        'iUh<>ZDLl=yEq.,#*d{!mDue,+&`1)d/1ME6Q6#F4Ohg_W3P?VVr[$?+FN67~|y{' );
define( 'AUTH_SALT',        'j72#7}`id0kk+4L/8xhaZWZfbwu;sejq>1j0<URB)fE[H`NH(m 3iXe~Zq~e)AaL' );
define( 'SECURE_AUTH_SALT', 'I$W7T}{|7TW>&/@9Xwb*b.0CknZ]lA{kJ>]6eYu]xK#))*Z9OI=k?$Q#8/p gDMp' );
define( 'LOGGED_IN_SALT',   'QVs|{S/+vGFefn;P7a)t0fJ>X*$GdSb.lI]0@+%bB?(IR2Qe7RQBH8%^GL|kcX]+' );
define( 'NONCE_SALT',       'wRj{6+KR3!B:%GLk`{&e<Q/}rRvJGe,V|8or>LPl!uAj;aJ|0SGze4P`dcf?{=~j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1qaz2wsx';

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

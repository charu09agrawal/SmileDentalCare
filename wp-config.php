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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smiledental_db' );

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
define( 'AUTH_KEY',         'VR&^t&sSM5flW|3Fi8i&g`w.wAs+OFPv#]xv;Qb]&`nZ7=5_pK+>h({[x#Uv(kQ6' );
define( 'SECURE_AUTH_KEY',  'TSl],zmp Il0&xeFWi&xo}hjAs9BuB6c)K1V&bl[j?:H}bX3(sBl1QyrTFvC>8We' );
define( 'LOGGED_IN_KEY',    '8,2XCwy#+TPpQw:xY,Tg?k2XuQ,!TC}RYHjIEh-St.2?iA:lydmJ(nWa}c~M95s2' );
define( 'NONCE_KEY',        'lR-#F!E4$clit}4=J6A*x#bmzU~s@yqz]{HI;$.I8U0vxp_Kfk?ZHk3}`jn!j>#d' );
define( 'AUTH_SALT',        '-z`?*=BK(GSP)RR92VR5.1eiT>;[v|9qT7M32lKq};`[11LP }0Nzl_SUCC#GBgQ' );
define( 'SECURE_AUTH_SALT', '|d&BH-2,!O k+Wy2Tu}v)A9ysqfn t6$>>s];fGwO5Ss4Be3:3_2/@t[!jBa~:Y7' );
define( 'LOGGED_IN_SALT',   'J`,H!T3!)X`0MPrO[$.U`.63_-S57<#p/&uhH1Q[s$k})3BnX1We3q?xuy-Vr{-P' );
define( 'NONCE_SALT',       '/iik!RoK1aLb<Q%Ymg~h&lvrefzmE#%1)ruG@#i8|8qXlEe6VJ8v|6|7)&6HY.KR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

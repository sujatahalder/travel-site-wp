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
define( 'DB_USER', 'sujatah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'butterfly22' );

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
define( 'AUTH_KEY',         'LAc|rfEPer^3Db3|]zP)Ej*z D:Tz~!07+ ek(*k6B<#Fs1u.Vt^SBeB Jp(dIR7' );
define( 'SECURE_AUTH_KEY',  '8F+QN]2vs8sa:xDF_8KA3&3:V^_kge%O4Y1d=PqlE,+)1:*`v) ?}9&p_9:_o_P(' );
define( 'LOGGED_IN_KEY',    '8H~8w1pd[Q@rdK8eLSJde0eocgP7hP?OKkRSn0nDSaneG,`#]tlCgA]bKd(W2 (x' );
define( 'NONCE_KEY',        'G+2JT{JV1v_7_|!:=B!d=p^O}3WS5-B>[,w[rm7fnRk6|kgiy8mTPnQEy]eebCS>' );
define( 'AUTH_SALT',        'MSalZqj@([*e=R ~}C:ua`F:t^|28%+l[SUD`%5xWkVKfy]]2#gi<@/s{1Z9<K*Z' );
define( 'SECURE_AUTH_SALT', 'aUKA!4yFYrA.Z:5ST)sPn&7<r.k0;h4qtU5#*P4U4n`1_U5%WhD{wo_Yout1n(*p' );
define( 'LOGGED_IN_SALT',   'PA<4}V6JXp#{E)jPLu0,!1sPj%jW.OdZKDhg,&]Wqz/t[93up9NAf-gw~B/#Kf<i' );
define( 'NONCE_SALT',       '2N0(3TsZPg.i}Ox)5oEZXj5IgwfgUMX;IfRWV<&P*W.CNBi6YE>x{(Lx<N}-wzDU' );

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

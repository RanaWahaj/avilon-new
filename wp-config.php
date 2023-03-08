<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imperial' );
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
define( 'AUTH_KEY',         'b>i-jvQ:_2/t?X<?h&00foi(yPG)?|c)vM{mwM(q@_PLn@>+L|Xme+Lk}a`T~~wN' );
define( 'SECURE_AUTH_KEY',  '<oCujkr~o6/rmrkgTFqU? 8fUcRl!{t#t>Cc4j8S,yd01%lU,W97lD{Ir@y8vpB6' );
define( 'LOGGED_IN_KEY',    '8INtGe 9Jat1s0sfH;xu~*0ZE5c_-( xE{g2vm-FHX6>J$z]&QZ laEZgPACPzo}' );
define( 'NONCE_KEY',        'S(Rx/m(RW(0Pw9D6:C5L}m9m -rfhoT,wfzaJdTV%Po#e4- (xIpz}-^-tgPRo7+' );
define( 'AUTH_SALT',        '^4)ta? $JP$Sgtb{UW,O4UzV4vsw63:K98R4HQ5HF7t[E0xZMs.QL%t3cZk-mz%r' );
define( 'SECURE_AUTH_SALT', 'kPQq8D?]O29iCpQ/9vcg,fB]xL7<W)&Yx&qI@`Q#O#} IH8?=1:~9p+e+.lr,raW' );
define( 'LOGGED_IN_SALT',   'MAygn^kGY5K7}<TmF+c*ky*[*Q)RofY)RTeO{0=^FS9!E*PU#p c XL{NLS5ld+(' );
define( 'NONCE_SALT',       'g%uU1S6KrnfHzbCb9iwlmVU+ ^R4]BG1Ox}2}_L=4kAatb?@MkZiI+{O4&q2[RnH' );
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
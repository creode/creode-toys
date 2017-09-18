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
define('DB_NAME', 'website');

/** MySQL database username */
define('DB_USER', 'webuser');

/** MySQL database password */
define('DB_PASSWORD', 'webpassword');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZVOF#gQY`wrHBv23JCG-jh{BZvxcJ!xO Pu5T:;z-+qNZgt@OKv~`x5yGMrtg+Lp');
define('SECURE_AUTH_KEY',  'T#leYxx-dXz#7Yh$$a1ccJfpIU1m&P2RPbnI~Y$aS?Mi=VEfqWH]a{mwNiR8~&`!');
define('LOGGED_IN_KEY',    '_^ZjeG?S7.~sC5Q3t;`05~J$!by0Ne5-g-m@V:HzQgUUX0F{Jz_mXHb*<!>>%UXX');
define('NONCE_KEY',        'JObz i9fC7e|,e#5!uP<fE6*Y_$)7VQ(S_`u{6;<+8y$S3^QwIn06`(Zd>.fWkBk');
define('AUTH_SALT',        'OX}-9UC{hCM,^t{u7P]6gK!g *!lVP|)g7EwiyIvNdyYj)U6t_u [a9Yt}$X[wPN');
define('SECURE_AUTH_SALT', '?{wo|)j>K?iGh)Da`OKA3a< Q/>1rLmGE{>S4CawW!A{mjb6F2MX7AV9|YM#j?k[');
define('LOGGED_IN_SALT',   'DZyMV~gM*1%.+zpI6M X5dv;mH0BejbRT5{>MNpMeH;BKwm&Uf+>1e%4?7Wy6yYC');
define('NONCE_SALT',       '[ llXtiPjKlElC)&d(.E^e50]/k,VCq1Kw,i?#,TltiAd*A/>hh$G|WPj#kM]g]u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

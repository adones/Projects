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
define('DB_NAME', 'limo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_.Dm]`41|+|WQ:?B=->s(!;B>ugwx%OCO&U Gp#rJ~iK_]BzIHF0k8|@%P3ieDYr');
define('SECURE_AUTH_KEY',  '<fV#cK%a|AWw$*H@A6(|OhI~K9_eq``~ypL;(m3&iN/nsjR6_A@(_558`Aa_h?q/');
define('LOGGED_IN_KEY',    'eNIk&fgO{UY]&!dM->25[ys[NGL[oG/)A#ya9e2TCSt1WnmmN:6d6ro?:@l#H8B]');
define('NONCE_KEY',        'J]i~K#r=@RB[wYR3>[%[7^_[lnaz+:IuV<~Tb/yZ|z0A,d#Iy&[Hq(=rYrPp0k1v');
define('AUTH_SALT',        'ys*/.[U0-{=(5H@fGqE>&*bssJe8Ip.?S7?r}Nt9yT;~_9WQj&IN6NI8$JX,|_@T');
define('SECURE_AUTH_SALT', '9^ayNZ/)uifiVGAx7V=2cYy5uCrMC,EUw79McY&D$./2xjY%.AE~|I)[D[[uTl@Q');
define('LOGGED_IN_SALT',   'Ew}(=2kJAdeE@hE`$+=O|^=zl3u>1tY&^$6</Jig8[#d| >5dc/n6i+{2Xfg^3&s');
define('NONCE_SALT',       'EjeEm[`;rFP4wBUav#P$`zr .(J+_rn6QYI<O*pK?D{1#Y=KME(&4IdCvK(CbI.X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'imo_';

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

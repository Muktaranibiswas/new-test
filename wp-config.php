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
define('DB_NAME', 'barakat');

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
define('AUTH_KEY',         'K5|.fbxL3Zs[IYbJNKah3|+j|;B,_Ckt,7>.s$.7G9n1MlIQ&x3>5#Z.*WxDlD%Q');
define('SECURE_AUTH_KEY',  'gds}7t?h9!Rv_:Fi[tG`#7W!&A+kl T^)ImcuE(Fn#5F|Q||<9d^dnivz4FPKnkn');
define('LOGGED_IN_KEY',    'y>.>j?FWaPhz85EM=$(8=dOUSG)m?1DQcb?gu,y_^e&QJ(oMz>KXiij6N RG#-,&');
define('NONCE_KEY',        'lpzBW)47BNH.}EronKau*Kx1|1Ex^,{6O1a)x93&>`WoDCu$#TDTW+MR8&?3s*P*');
define('AUTH_SALT',        'kn3YA<1J/ OY8Aa]k$PWX6t~e fZZcPB$YD$of(O%Dd9X@A3$E: OtIG^nZUVt6f');
define('SECURE_AUTH_SALT', '>>]RKv%}wu~)d8-={Fy-vuYvU.p%SUd^re+j/!Ab5,r.)NQ{n~rg;0L`4p99v*W4');
define('LOGGED_IN_SALT',   ' RCL)OdEOLf#*FkH,Y|Q5&x#qZ}ioEAr_..W4^)>/16HNE:9<Y{L >],)I)2g1-.');
define('NONCE_SALT',       'N|Bb:j]6KNAPOaz:/ZxhtF;Mdp<P5(,2oY.(nO$Zw58 |TZDL-r/el.^S/{y=tR/');

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

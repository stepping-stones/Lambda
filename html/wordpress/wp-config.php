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
define('DB_NAME', 'a3924710_test');

/** MySQL database username */
define('DB_USER', 'a3924710_test');

/** MySQL database password */
define('DB_PASSWORD', 'test123');

/** MySQL hostname */
define('DB_HOST', 'mysql1.000webhost.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gG6l<cMf*k!D6Nsj+;;1u=%BPv~Kp`{Yn&s]s@O[)(9+&z:D^=R#4z0~=9AtWKyZ');
define('SECURE_AUTH_KEY',  'ykEvJ|i!HN?I!36S#Jr}RbH=A1TMJg,pW=KiM)4gj-gXYRNK#$*;h:%[8$3Azxt|');
define('LOGGED_IN_KEY',    '2${OM|~s_!Y2o$r^pmSyI2Mlkh#?wW?teo?gWnX,!SLysM,Cmz1Xq~--Q`Fs13b)');
define('NONCE_KEY',        'nJ+3h}`DNAFb14-0U3-ZKy;7)5)TE%6;fQ~SRPh_YwwT  Er4! ^=#KzBs8qYs53');
define('AUTH_SALT',        '#kuvD{(.-P|Tw.k=D_p<1O`^-vgj^;J^>L2vss+*)tb&E<*Gi=R~XNyb++l4JPlb');
define('SECURE_AUTH_SALT', '?0pR{wq+YMen0_Zt^Ni4cQAIek&DTPX,&sK~Z6n++2f0uuIcp/3AX6:sG-qfO)[=');
define('LOGGED_IN_SALT',   'by]H 3l</dvc8LB%LWj_|+yJMU%&>Y0{n_mnW0&aAMiZ`Zl$i7Orq3x|n:Zk|p7v');
define('NONCE_SALT',       'aS!HX#%kX_[8|O0s^PD3M6 aV<=J=g{{VXqfFx@SmuZt#BU-4oA+Ji @M8J=Da-z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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

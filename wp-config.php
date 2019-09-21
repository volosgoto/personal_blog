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
define('DB_NAME', 'personal_blog');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin1234');

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
define('AUTH_KEY',         'I=^fArG}?<P(@T$S-fEof${g8 ewZ{px65il$l~dE/L-^c[@wof[kR4]H85ssbLj');
define('SECURE_AUTH_KEY',  '^~{t4mZ@91n|B#s!?JE*h24/a?XRI;.v3iIuZ[kvF$UjbvM|BpLQI(6 E5Bj 7kv');
define('LOGGED_IN_KEY',    ']U/G+yIg?:V<GxWWM!haW:R{>`1knq`Yy9(z6lwvcr!5ea{eq&Zt3CNN~_]ZRJ32');
define('NONCE_KEY',        'F*I}s(t/rZ;%re[}A9aX4s+D+%CBI#0Uqhu88`Q.?jRw24)Sen{>%36!7} fE</X');
define('AUTH_SALT',        'lF:_}`6y7Be3Dr#@AK2VT:aCd12^g`lX*iq:<Beh)-5?]00uwWjJvv80fmrh_w:@');
define('SECURE_AUTH_SALT', '%Cr!tCHXOPRQq&gq@w5<cK?D<a5I40FP?3UjVl%|RrEbFK+t5Ma|ES>LO{(&3])[');
define('LOGGED_IN_SALT',   'B$Ve arAaC:FgqO10mxgJ-Aa6($?=t8.XpIrJYNERs9Lr)}/n(_<!_^ot)nu,UBy');
define('NONCE_SALT',       '2%c6K[mzs#x_(tYcZ6%[XyR`e,IeRr04kxR8%G:L!)kLnnJu2vd.t5&)TkGKm(u4');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


// FTP acess
define('FS_METHOD', 'direct');

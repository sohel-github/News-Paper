<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aponalo_wp8');

/** MySQL database username */
define('DB_USER', 'aponalo_wp8');

/** MySQL database password */
define('DB_PASSWORD', 'LYS-k78P5.');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'zmel8eolkrslrngpwysoguddiv9hlgysjxmyxo1tbji4x8rsqe2iuwwlqfx1iq6t');
define('SECURE_AUTH_KEY',  'jahnewvnjqphx3lm5d8cw0t5daaj8q1lreb1xqsip0emt3sstkwvwenrdh6qjogk');
define('LOGGED_IN_KEY',    'nyx13tiirytl5gsfkuks2w9qpwzuejw51ytr6nuogi7ry996j5mctqvnowtkn8cm');
define('NONCE_KEY',        '6pvyoxb2lilizca5tzazrei7aq2snbearxgwvk3enn6rtd4psrsk5hyyvztgelbo');
define('AUTH_SALT',        'bcirlwm6xhhrwgeknry1vdu2ft8iuisl9lmoqjnh3cchylck0rr5rawntmc1tyqc');
define('SECURE_AUTH_SALT', 'pyjud3fo69lvnfgtoyf4yy3bm3bciwlz9ilf7tx1oxu5klnkse5v0l968colo01n');
define('LOGGED_IN_SALT',   'wq9ma402bxr6ekxnrrarmgtonydgrz2co1poiwnww3ji1phsspghvtt1nfdx07wz');
define('NONCE_SALT',       'iybnqjkyvrs0lx7cmstjbtdix5iip9q3e3zu0jomms3iepnwfyc42vczjeiajxrf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

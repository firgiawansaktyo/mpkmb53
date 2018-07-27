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
define('DB_NAME', 'multimed_wp361');

/** MySQL database username */
define('DB_USER', 'multimed_wp361');

/** MySQL database password */
define('DB_PASSWORD', '@S3Pn10n6-');

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
define('AUTH_KEY',         'ojb7oxaykbtnreyrzefexcbafb0brt2ekwsxbyuzqaeqvndp9hshyjxjgzf6skgc');
define('SECURE_AUTH_KEY',  's3nnlrk0cpwp1hzicryeg4zuvr7x64n7evam2nceyz0vkuwpixsqrd204qk1xasu');
define('LOGGED_IN_KEY',    'rdjf8nj14ytnmeljzn5ovbl7e6naqvfa0ijektp9s2othrzinrfg4ufqbv4kga7x');
define('NONCE_KEY',        'udrlmpympilx3cqh5ofiky2kgdaxua2bcik32qhenoi9rzgt2yhqhzrdsecut4fc');
define('AUTH_SALT',        'xob0s6zuewwbwsfmtajgbqte0kp4jevyf3bxgxen81tozp1ftriacxdj2mmbpbsf');
define('SECURE_AUTH_SALT', 'y1wq6qzwhvzraz3cq3j2vk6unjun7cwvervcbzoxlzzecquiuing7djf4cow0q2l');
define('LOGGED_IN_SALT',   '7zhdtnagyuzl4zyiy75sywcaaayzno2f0nw5aafpnwvnorfvafapezjjnbkwbpbp');
define('NONCE_SALT',       'sj5cevyytfltay1z1wcc6krsjnhmzny8nnbmgmabqv1ffdvgcknsa70kfrtomwky');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphq_';

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

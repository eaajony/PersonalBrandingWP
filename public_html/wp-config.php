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
define('DB_NAME', 'sonotready4this_dk_db');

/** MySQL database username */
define('DB_USER', 'sonotready4this_dk');

/** MySQL database password */
define('DB_PASSWORD', 'qwerthy1');

/** MySQL hostname */
define('DB_HOST', 'mysql83.unoeuro.com');

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
define('AUTH_KEY',         'PhJ)*rDwm1^xMGSPhpBidc&GKbSqQIN0!zB#(rEZyAFte(ukihywm)DEdgTy6COw');
define('SECURE_AUTH_KEY',  'V2fQeHoU)8o3HcLAgO4YrzPxK94wS#q0J^bkB!1aXfqsYD18hMkHQ%4@5LJJ9RAy');
define('LOGGED_IN_KEY',    '53s7jj1%R&IHG!6R3&QF*SyVtPkqL#wg6Bn(0WU6q0YXNTuBI!Z2j9rn9qrf!6wm');
define('NONCE_KEY',        'qXnQrOt3oJNgHu8#*wGNQ3N4Bo*ixZGYUz4jy8XHo&b4W1QNiBE)cjCIad7Emn3F');
define('AUTH_SALT',        'O*SNlpG&9rHs5LQN7Juq(P!Oa!Czf7eNq8bVOFuPCnJ9FI5jjBniC1T#16MOUt1W');
define('SECURE_AUTH_SALT', 'h(FFKJ(A0rF)l8F8qN8K8Sq1TEeTIT#1WwF&6kxcg1*LeLlg#VdX#AP0Onf&@3RK');
define('LOGGED_IN_SALT',   '3j!67UC3r)RBh#xTW#SnYxERWLGZZBqkNLshz4ChgjLYHG5LEMD*n5jbJ20(pw8@');
define('NONCE_SALT',       'ZAEKagbV(DWO8xAc*foarbYxbFIxBw8jsZ5AuqX#0phkg%v!59TJs%Ub0AGBrrbU');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_bb077d559b_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

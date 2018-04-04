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
define('DB_NAME', 'bosques1_wp954');

/** MySQL database username */
define('DB_USER', 'bosques1_wp954');

/** MySQL database password */
define('DB_PASSWORD', 'S9FGZ49p))');

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
define('AUTH_KEY',         'mumpbygk51egxjmhchpkh49ibdn2d4wloez4etzvrp2o7vvhq9edlbo5ferc7mzb');
define('SECURE_AUTH_KEY',  'pco4f4lqamg5a5szaa7jrbuamuxm8mkovfqxepyykm3kcb3waa7qq8o3q2hiswpo');
define('LOGGED_IN_KEY',    'xr1ea87ybvfrdzaijslgiccqep1jujxq7xe4rlmbucqqaep7gtajxxge4fdzst4q');
define('NONCE_KEY',        '6bbwjugvtwsi4jac6pjbq5mrj54z5eon3kjourp8eycfvb9suzbp1zv6lwpvf34x');
define('AUTH_SALT',        '2tujn05kpw1pnsckt7uuxd0jnmuxbyrvga5lvwj7vn6nqcbdu6hsjanhaqjkqt5f');
define('SECURE_AUTH_SALT', 'mkite7qliawz9ifxrd0rz2gv9r8zdkswdvgmshdzuxx2hipz9n26bdli35d6wakn');
define('LOGGED_IN_SALT',   '8wzfljzatesqqj0itafmakmbwtbxakvhujuiaccflcuxhpvoyotg0vpcuzxrteun');
define('NONCE_SALT',       'zzifo7l0lcb6m1gzod3fbx9imp41vl9kl0zmn7tesieipjrn2ffwvmf6jfkkvqga');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyf_';

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

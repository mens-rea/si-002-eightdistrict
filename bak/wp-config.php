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
define('DB_NAME', 'shopboxf_wp317');

/** MySQL database username */
define('DB_USER', 'shopboxf_wp317');

/** MySQL database password */
define('DB_PASSWORD', '!4-qS28P8H');

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
define('AUTH_KEY',         'dljj8o6vmkckxycrzhayaqxchr17yrmrgav6kwhotyhpckqec41hnnykfugmvlnk');
define('SECURE_AUTH_KEY',  'ky1leetmtgevtmnozmclpbdaszztbrqe9vvztuzerpjvxwfwedoknyatww7uokk1');
define('LOGGED_IN_KEY',    'g0e3tbr25v0l4kqqiraxssaxaxqsv5uj7poyjosshriu2zgucpkxeo73vcvrff8y');
define('NONCE_KEY',        'qtde8tfcrbuiml6xcrhdhxvixbliajfqfflxtungz4de26mb0nurwsn6scuzixsd');
define('AUTH_SALT',        '5laseqzmicqhlewck7xma2azvh61mwj3si00u1fpkuncowr0uuw7p5uintigc3hl');
define('SECURE_AUTH_SALT', 'cxzmfj71zixb86vael9tddsq2i30ooyuqctbogfkczvarlsuet9mwpg4jgnwdkke');
define('LOGGED_IN_SALT',   'qqmtgyxj1nvjzcxrkgstlsihb9zx0ehc20o3ak5rx0ltufdnaqooaeo9z0yifw6g');
define('NONCE_SALT',       'g47ixkmnghbxtuyr3ndlfljm7em5qs9zbh9xik8a8ymluvvsuypuxaqqonulbbnl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjs_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

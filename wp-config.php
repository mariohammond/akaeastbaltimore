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
define('DB_NAME', 'i511700_wp6');

/** MySQL database username */
define('DB_USER', 'i511700_wp6');

/** MySQL database password */
define('DB_PASSWORD', 'X.dKozD6XdVFtG6wJnB63');

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
define('AUTH_KEY',         'croC8g8A8u8fBJ1Drc1aRES4Yt5rJ8PBjRyoTxO4EsGsBq0DCzXRw2wR2jGVcKA9');
define('SECURE_AUTH_KEY',  'Iuxl8vChsbtl3ypSDbtOVQ6g7P6NihJW2Ns0pH2EEBqAEFaE5Vt74l6UyAPl2B64');
define('LOGGED_IN_KEY',    '8dcQjPQMl3OXeKyEuYrtDRaWR0iqyer0GDILghq9H8iP624cAEtmFSTwUiBhd31R');
define('NONCE_KEY',        'wUTW6Ds9CGzb3rTchVqxniRQXNJR44VTit2eHNZECzJvqTkuiBWGc7JgP7MmeAmJ');
define('AUTH_SALT',        'K6Rse5s0Uwb6yXSzZ52j1KLjczC0fgEuveDt9CdQEgAORDxmpXYp63bdLM7z32Ob');
define('SECURE_AUTH_SALT', '3wyqL7bpbZgO8avN74s4c73fakbSGwnJtwDdDAxv6cncp9Zz3rv28m2anivaza47');
define('LOGGED_IN_SALT',   '34ZVkARkCKUenUVBexxZaAXysCaYvzhl2Hwdb8iapo5WXWnUp6cYWXvKtEvP1O7a');
define('NONCE_SALT',       'ezO5adEjTzVttHBpjser7JRTlrc2l6nAdN1B8IGoFMJjwV6oy0e3A226uDZrVJsz');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WP_MEMORY_LIMIT', '256M');
define('WP_HOME','http://akaeastbaltimore.com');
define('WP_SITEURL','http://akaeastbaltimore.com');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

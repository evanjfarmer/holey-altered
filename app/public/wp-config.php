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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OBcpa/hAN8Kjar/7kzHY4HaB3qutz3GI4/+l38ARpfYErg+6mKialjsrnoZS+Iu/5fuQzfj8Yg8U3z4UWPc/ZQ==');
define('SECURE_AUTH_KEY',  'SLpG1yvWVuwENV0puvDtH9DNOUmdR1FmJ7R0E9P/FjYqjuw9gVSG/RIBb8wBX6IuCwRMuQjmWzMTcb2/eyJGRQ==');
define('LOGGED_IN_KEY',    'b0ygmH5yCi1bGXX2DwMwSP0JW2nkoYO5TgMo7izJVxwlrOdeQowuc4YOq3Hk/o4iHUeN9rPr6mnq7w4qZ4WMaw==');
define('NONCE_KEY',        'PoyDICjvvrpW2NF63WNQQcJPX+0hT7GGonUd08ham2jWk41s2RI2ZGc6NkrsNdMwQtTub4vWPd+aqubFx5Ff1w==');
define('AUTH_SALT',        'JMoc9T1B4mqtH2ZSSlWThcSqTCmErqAn1nscMbrjuO6NhKFELcTXskvIMOzUKWWw5U6SCsbq/1lzKSquWULacQ==');
define('SECURE_AUTH_SALT', 'NUmluhfG2orhSMXaQ3p5sMw48B7rx+noBCgUdzxxNmEDFrcfFhprxA+nHMjdMTKCMx2uj609V4SBqywuEFL/uA==');
define('LOGGED_IN_SALT',   '6thWB9KVz4P0ID5qWn0TCBrvlPuERovVMO9+P6z8nfbkivkj9mn7ELppzy0yt2yYuHUkrs+/gcVz+zSTzz6LNA==');
define('NONCE_SALT',       '/fgIM3xRTdL7YfwlU8YMHJVBLohu0YGlfgQRF7KLZUIAAahY+IF9DAKgxJKhoOlkLXm+VQs2tGH1TG+dm5tjww==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('AUTH_KEY',         '4aa4D2b9NfLgyY0uJ9FHiu22MQ+XovSdPgKXQGjSiGkGsoCDD9Mwxar7IUmPZ00jvREiPHIXqO4RuWEpZxLRKQ==');
define('SECURE_AUTH_KEY',  '9cw9ruc0RQwVowvgL+/dLlAAqiH0J25mR08sDLS5RyZ5/D3KxcvPVT+k+ojDYzClkT/nZQqmQ40tJVdxw46xYg==');
define('LOGGED_IN_KEY',    'lXmHEFcvfRiJLB3GEyUEbn5tyNYNRJgX6fI4WmgXhM9hwsVZEBxbj3Geyr5GXatp6U8e9FLo5zE75Wtfl+qkZg==');
define('NONCE_KEY',        'QmGg2VeF2EgMzIJVsOkq2BbgcGLGMBg3tL6gHzn1z0oNSslXIqoAO+1MWsdk+MkWL2TLKB7WMq0IaEYfIyL3yg==');
define('AUTH_SALT',        'DyKEJIjBaY56x6u8yCNgwbRdbhXaGSZlr0HguIDyTk4pmazafWGyPyJHjhXJxsCPXvRImX2/GhteVyiVSs8PbQ==');
define('SECURE_AUTH_SALT', 'pwCwLQCrRcx9XhHQSpETj4hBYf2UHNrvQLd8HlKDowCrlQIDimaniBCFFiC+rbTZxWeOvPEyNYoM+vfrL0XqNw==');
define('LOGGED_IN_SALT',   '+6EwQo1oDtNyTWC6WoVYEGj1MWNQcJ0+AUuOGORHbxG32i7ArHIEvsUYdiKg46bcmzM8lVFi32uoMjvIiDoQ2Q==');
define('NONCE_SALT',       'g9yBDRuqGzu2So0TlhDjdAj9mfzJ2z6UXRUrKWhhb88S8W/4HwGw/aIuXGwj25Wf8XWViUEw0pmeV2n5BS6Vhg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

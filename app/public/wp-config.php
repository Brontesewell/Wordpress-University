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
define('AUTH_KEY',         'OyCfdHdVAZdQae5XgOyaxZ7viYOn/lUGBu58z613+3IOiJpssTNbFjJ9pmQPAq6fpzVM0nb0x/O5UzQxqWL+Mw==');
define('SECURE_AUTH_KEY',  'rm6uM+ihPeFgDakImy43hZc87g1BgQZLIlLHseiz5A7UJLYxDSGiiRO4zJr/dTFoHFQ+8uJaiKYglyR2tmlCDg==');
define('LOGGED_IN_KEY',    'JpDvcDxRqqtuypafWjVSARad45tqUphC/tF6OBNHlKEs7/24Tof6xTr3FNh/+IggC2dfV3YwfOssY1RZXx65Mw==');
define('NONCE_KEY',        'sXpRNBLXk5jwhCsBpDFi+CbGCHn8VAYXFWKmM68QXtyx5ur+oDOB2I5c3QmAsOcUO0PU0YTuY3p9u2yZNWn+BQ==');
define('AUTH_SALT',        'ryn9D8j3BuDHLu0vxzoAZV8zBpa1jCYxsd87bNrc7WsgQIz1yvOqhNFTQKXIM431kkKYAq0/9LObI97Vi3sPcQ==');
define('SECURE_AUTH_SALT', '1yDZe8hSMUNEQ4rYVe1Q6QkWv1Sk5WCuwaEfT34yzE8eDMLHDGHhvszS4zMm+z2jwQxfCxNiCcv4rh5rgv1d6w==');
define('LOGGED_IN_SALT',   'Ethsqt7DyvOZcR2BTCyF1QLtOdaDJqIYTyZxcN9catc5aGBeznAZfoA6wdGT6IjrR/dcb3rEKhho+hxMhzU4XA==');
define('NONCE_SALT',       'GruUq1ZLoAHg22WkxZTIHy1USGFpikAcmJgYoVZKzTh9ho2luNINHtVF82SfSoFSpPqK4sxoh17IA0tcYmnhNg==');

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

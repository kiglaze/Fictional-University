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
define('AUTH_KEY',         '9CE+cEAV167YRAwbVJGMl62hA5nOQw07ADIppJ+ha2dfE7Qnfbx888n9pTMHdF17HmGNazXPUIUJb6j5lz8nAg==');
define('SECURE_AUTH_KEY',  'LkP8kGjslgSSUDOBMIU8+IlJXnQUDy0AIUjsO67Ce6rO8ZtCNjurzj2/avE/JTuqxF0DkAIsERoJ6QAtJfze3A==');
define('LOGGED_IN_KEY',    '6OfQVg+/PuQV5TSCMH3PWQUTeOD0VS0cEhQtaUsX4jiblziFnCiSZW+18IJYHHzXDFV0dMQrIv4h1kWaZ2klrg==');
define('NONCE_KEY',        'BTt5T3ttW/g2IRCGc8j2iR+6JOMCbZb01MQ1V8yHwEj6BOP+d816fcixWQbxzqK1C7p653Kb5HpCSwSRTK+C6g==');
define('AUTH_SALT',        'o22lrJ9dcvZ6oZ84t7O7YT0SlzCUnNSSbbykn9vu1sp9IiEbNevqXU5Cn0o+5MixLZ3P+tQ6QgQaE54SVY/law==');
define('SECURE_AUTH_SALT', 'VQp/fOJK1OBYx7uB/c1nbyq7U2FvR5hBX/j+/d7Om552TjvMe13eOdWLOhHF+l/R5Gb2b/x44UjcspEvMS0z8A==');
define('LOGGED_IN_SALT',   'Xz9W3TincE3ScnOUNtVOppTysq2zIwZhMFXSzabgNgY+PP0Sl9H/SGlJw6KEbaKXvLhQ7dJPCD372A6r5nwvYw==');
define('NONCE_SALT',       'cbVzXjWkYhIMyxbNpiE/1eFZPvVgTEVR7Pz0mLzoe+ILhpyLR0yluX7bI11dQNmewyuzvTz46LUssdxGgp8ZhQ==');

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

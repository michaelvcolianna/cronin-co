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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv( 'DB_NAME' ) );

/** MySQL database username */
define( 'DB_USER', getenv( 'DB_USER' ) );

/** MySQL database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) );

/** MySQL hostname */
define( 'DB_HOST', getenv( 'DB_HOST' ) );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', getenv( 'AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY', getenv( 'SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY', getenv( 'LOGGED_IN_KEY' ) );
define( 'NONCE_KEY', getenv( 'NONCE_KEY' ) );
define( 'AUTH_SALT', getenv( 'AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', getenv( 'SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT', getenv( 'LOGGED_IN_SALT' ) );
define( 'NONCE_SALT', getenv( 'NONCE_SALT' ) );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv( 'DB_PREFIX' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/**
 * Site URLs
 *
 * Sets the site address and WordPress address URLs at startup, instead of using
 * the general admin settings.
 *
 * @link https://wordpress.org/support/article/changing-the-site-url/#edit-wp-config-php
 */
define( 'WP_HOME', getenv( 'WP_HOME' ) );
define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) );

/**
 * Plugin definitions
 *
 * Anything added by plugins goes here - license keys, API credentials, and
 * those kinds of things.
 *
 * @link https://docs.gravityforms.com/wp-config-options/#gf-license-key
 * @link https://deliciousbrains.com/wp-migrate-db-pro/doc/activating-license/
 * @link https://deliciousbrains.com/wp-offload-media/doc/settings-constants/
 */
define( 'GF_LICENSE_KEY', getenv( 'GF_LICENSE_KEY' ) );
define( 'WPMDB_LICENCE', getenv( 'WPMDB_LICENCE' ) );
define( 'AS3CFPRO_LICENCE', getenv( 'AS3CFPRO_LICENCE' ) );
define( 'AS3CF_SETTINGS', serialize( [
    'provider' => 'aws',
    'access-key-id' => getenv( 'AS3CF_ACCESS_KEY_ID' ),
    'secret-access-key' => getenv( 'AS3CF_SECRET_ACCESS_KEY' ),
    'bucket' => getenv( 'AS3CF_BUCKET' ),
    'region' => getenv( 'AS3CF_REGION' ),
    'copy-to-s3' => true,
    'serve-from-s3' => true,
    'domain' => 'path',
    'cloudfront' => getenv( 'AS3CF_CLOUDFRONT' ),
    'enable-object-prefix' => true,
    'object-prefix' => 'wp-content/uploads/',
    'use-yearmonth-folders' => true,
    'force-https' => true,
    'remove-local-file' => false,
    'object-versioning' => true,
]));

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

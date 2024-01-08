<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zedacoke_wp547' );

/** Database username */
define( 'DB_USER', 'zedacoke_wp547' );

/** Database password */
define( 'DB_PASSWORD', 'v(p2941!SI' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ybysmbyzpoiuop6i9q16njxn0toi0xefmtgc5wzimnykltjnk5pkegf3lxjf5kfi' );
define( 'SECURE_AUTH_KEY',  'jscmmbap2qpg0oulg3o2pja9daktd9tj42k6frkiktr3ydexqmxdhvum7sa7juhi' );
define( 'LOGGED_IN_KEY',    '0r3zccq4kh5eypa4r7nqkaebelbcdzaruhlhptdv4b5i0sr7b6la38eepcjcdvmg' );
define( 'NONCE_KEY',        'fupzb7ygt1pmupkntygemwwwqmisyrjjkscz0pltspfuc1upr9cdmj1fzk4t7o4l' );
define( 'AUTH_SALT',        'yr4siqfizqzimcggbszsvatfg59re2eugepwgke6z5oxcnmbrgqd5tcueumpfb1g' );
define( 'SECURE_AUTH_SALT', 'fw9kioaqubkohx3bqklonq8ixzfwfs76yeciwrfxf7moaqdccodhyyxmobcthxnj' );
define( 'LOGGED_IN_SALT',   '3kpfbjtswfrptryvuoky0jkxy4vrohnnskbv3afql6vravc5d56hshiesvq5wwux' );
define( 'NONCE_SALT',       'yrr5locm21zth39aeaszg6bbixnsetiluloyhasbbgyaaobwj8k6lhbhjoy8dd2n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5x_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

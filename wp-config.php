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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'Wajiha' );

/** Database password */
define( 'DB_PASSWORD', 'wajiha123' );

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
define( 'AUTH_KEY',         'RdJ{cYJ]4NR~Ay6awK+Yqh6!5>v)]R.Lhk]NN(WZ_)I{|.?4<R]um+Yfgp4P0te#' );
define( 'SECURE_AUTH_KEY',  'X}=>I; ,:9{19*)?z[Za50a`b`YLsM9}qWKfJZ</N5E_Od*^ehBG#L@but6z!jC~' );
define( 'LOGGED_IN_KEY',    '/`nH}5mb[<pU[aW(XGv|T3(0ePF}<Z&P7N:uxhQWi:l51s_q#*0v^@qHvZ~H8GP$' );
define( 'NONCE_KEY',        ';`%NA*KgV2H#scesX;k4$wiZYL* Vy)MI3TW,p?R ?36wA9tFQjAkmj{!D<B1e8j' );
define( 'AUTH_SALT',        'pd4M3=f~<Ct_2;LdU#D:1URjK@I%>;RZ#4_2aR-olNk6ZT55-z=eqN^IPS]7w..o' );
define( 'SECURE_AUTH_SALT', '<s,?t# _EKHO^Ed=q-Yb3&cLQduDB7uP=|xB8 oMqygm~[fMe/.4%[Lt}(7Jmdvw' );
define( 'LOGGED_IN_SALT',   '1TgcHaK<QS#wDE)]NC+6n!dt|4Idw(3fq.~wyKR68uF[iXu<s7@(y/m|}/h9Z&$$' );
define( 'NONCE_SALT',       'kAjp^&wW6W@&;z3@(k(QDaTP%M>#X3598Bz{AO0xvuc!*a_*{S9VJw]8>2RqL HJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

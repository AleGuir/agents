<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agent_prueba' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '20Empanadas' );

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
define( 'AUTH_KEY',         '4Z=y8iOu1mcMB=YJhVWvVzupVjk~zH2||h@!|:K@:5En;[dqu~Q@&A+F>&9py@sB' );
define( 'SECURE_AUTH_KEY',  ')TnPiFg|G}&-j&]C:j<ar-KxBc1ww<w:;QX*LA[Qv)A=83Rk>&PTQZtN0:J+DYGn' );
define( 'LOGGED_IN_KEY',    '5#DrYk(TwJv#=9)!%ShHt5kmhh<n&^k2>~]j =bj2509T6y@.sVLZgEu:h3fNTiP' );
define( 'NONCE_KEY',        '6]e$!5U>@}SgwYWG_w%k4.0*e:0pN-so8|+-]SSy4)p?JcKoqmn68MA$=WE;c0v1' );
define( 'AUTH_SALT',        'jdmRJW_CXueM5@wIMppe0_b@5:vGkV~*N:X4OOSnu%6L>_ItKWRyF<n_bY.60gR-' );
define( 'SECURE_AUTH_SALT', '/S!DNS.RJ;ZiA:(>?>sf^#^w6@u3()J^j~^/pDgZlVQo/zpuJb8l!!t[61P/)7z,' );
define( 'LOGGED_IN_SALT',   'lw/yGtZ9$7`aFK$ L%K7W[O#Z>[ui)vq>R5?6r9(&<LdD!`BXgC7natDGLb<%|^w' );
define( 'NONCE_SALT',       'g+`J{g6~SI{mb=KM&Nl]>1EJPIsCI|L F>Dm<+/J&g)2cq~[^>=P`*js!bItDCX1' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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

define('FS_METHOD' , 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aimyourcustomer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'q-nGz^H|WS`V!g[> ~IbR4NOS9R h4e](lY2K$3zG4e-DREz*|{kp3QI.Lo/EKS?' );
define( 'SECURE_AUTH_KEY',  'b%X-hZpDoY-v}ZVc@GxTULgwWErrJMJEV%tp*sp#JBddH,rpu619Ix@w}u$^D<$|' );
define( 'LOGGED_IN_KEY',    '3Ijtt&xxEiCj3<Y]sk@<n; ]VbG7v,PTaTz5s,xU`3De#X<]?Rk:8_Tx#t88Aap|' );
define( 'NONCE_KEY',        '<Q@G=fx9QECb1C,IRO0S>i*2XR$|!TMLkJv:~%0m_ $u6hV(4<STRBGGN0oMAM[z' );
define( 'AUTH_SALT',        '`~%a(jSPRX<Av)l`dXV:N8s69KDew/Yzb2^wW9wMSeZNiLy]x[3XkqNjzm;+WHiZ' );
define( 'SECURE_AUTH_SALT', '<l_4mia4.xGY-J +Qr_x1BA|*-~VTN#KJ/Z./*lrm(6Daq`B6(6?*NRi9z<)IION' );
define( 'LOGGED_IN_SALT',   '=L]TS:L8TkkbfDpMXH#]aWe[A343*GRo[W-0n,*k:rfHSgj4:x~.ia$O^A0,U5vO' );
define( 'NONCE_SALT',       'B{D}8&za($}sTd|EozkYP|7IT*-RYZmynfP#m8ZIq#oIFH[a-#K|1}Z vYP{_zT>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


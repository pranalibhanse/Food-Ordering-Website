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
define( 'DB_NAME', 'ordering_food_wp' );

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
define( 'AUTH_KEY',         'f@.GF4kv=1X;#9V>OCn[4z0X9+,gwsg-.zM6QfgQyNqCy>(5L}/P(Zw}J4ggi$9$' );
define( 'SECURE_AUTH_KEY',  '~?!6zK7nRqGZ^X]co^_]%~tZRyA<VTf!%ZWEVVdOo.>OGyBJSVGS-T|{M#_U~>AM' );
define( 'LOGGED_IN_KEY',    'zNoQ:u[Ua}N#QUqsIQb*G|fJvWyEchz.COqT8~vT9[r&$t?0$!L;:Q#NE7;/Mo4;' );
define( 'NONCE_KEY',        'ukEq)I+Bn_^%F]@8td)s5SYY5SNIdi.v^iz7) K3i;EIS(hMiO`:9QB1k?5(gHYW' );
define( 'AUTH_SALT',        'ia^5+$7J=U]TB0O7IB;%;V%eyOtxV|+p!+XiGitIWmFj$jeO2ne=416fsd_ X0HG' );
define( 'SECURE_AUTH_SALT', '`YPu}@.snu0<>|[7/2_RT,2X.{[_:M_2,06^Z[)Jm1wg&~~]Mhn~zA9 %*&ad|ZW' );
define( 'LOGGED_IN_SALT',   'p<F`m)04x{}^_+_{{:y;C5dx,VzAp4(2i$U; sa0x2:!D[lmP@Tol#WgU(f-v_pE' );
define( 'NONCE_SALT',       'N<NM![3t#upw{!g-V~C/u,L-K65}=z<(74zOEiQ`BMVBH<Y]JB8Q`aKl9eH^.*.-' );

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

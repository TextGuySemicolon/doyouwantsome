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
define( 'DB_NAME', 'doyouwantsome_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j|lybmmaCh^oIao+8zsoF*b*7+pJ{Dj)9i<XkDfKDXeYZlwwN*?,U27,gfPl=|d}' );
define( 'SECURE_AUTH_KEY',  '? }y:W8(%Bxx1qFd}PK*p^VCR2M2AKFKLkYM)/?Pa1`O9z~-E*fDQ7%>A5^g^YlS' );
define( 'LOGGED_IN_KEY',    'lpb v$W2hWaH&;Z5p;e#6[m9Vf[rlMn92~^h#8::cO&i^F.s{7)!8o,Cpjqwi5;e' );
define( 'NONCE_KEY',        '_^9b8Hr?VJb+>GsA,&<rAbil7-9GbhTvjztB2:d+r[%w~bvj.A~k}WOj&V3%/X!$' );
define( 'AUTH_SALT',        '8aBy-t`?6~f% :`h{b.ShfWcTr(4P%Km*N)}k/bYUX:Z#hfuJ#P9g`q[VXp;ZA(g' );
define( 'SECURE_AUTH_SALT', '!]oNLAfFe+x24DYpqwx[J h14Yb&,e[F.6V8:(4+o0hDLSSd >@,rizeGB]h1_1K' );
define( 'LOGGED_IN_SALT',   'K?jz^*Rew6CR>x!/plnaBri&O:N/x@r $;pP%nxC9}l]@A~#.fm;nVhj{~Q4pR5y' );
define( 'NONCE_SALT',       '=GjtZLr[q~Q(/EyV=).a7PQ2o{pmcb$oBrFmszS^9<5>$?*tN?_b<BmH*{g@f3n4' );

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

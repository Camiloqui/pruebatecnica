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
define( 'DB_NAME', 'pruebatecnica' );

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
define( 'AUTH_KEY',         'm+ebNrB!be_Om<x}p}YH,>r!,:lax#ClHQkP.OP7t}F%O>1jE5Z L5236,ZW_~!M' );
define( 'SECURE_AUTH_KEY',  '0f7giTO2ijoP]D$)&)z`Q#rMFL~l/@m09P4[l|^h(G-!xYqXxQ.:G^}M+H~lwY-w' );
define( 'LOGGED_IN_KEY',    ';Rd MgHcyI=4F(9PR[)cg=Z88ZN|CQ3f95wRu9&S7E7.kh.D^h$y=P%ShFpfA<w]' );
define( 'NONCE_KEY',        'fR;A3YEZUosId`SO0gnyBwb._pll~rF]A*M[997pNp^Yajj:=)pRB!W]?a{g%zk ' );
define( 'AUTH_SALT',        'FelBwiVehAn56EuX&stCFx&t%AMfb PE;tFl]Q*d@x! pAz}~l1i`,;ja?w([3RD' );
define( 'SECURE_AUTH_SALT', 'N]w9o7[}qYEJD`fK9U}X%LP_LO*=vGHl X9l/fhW9.7yQ~u)cH9!VQ<gdbgg2nUc' );
define( 'LOGGED_IN_SALT',   '{)(?5&!4vJK?[mk1i=a[&Qh!$e$G-$:dH>Z7MF9B.g)LQ<J.zi&zNKm#}vR7~!+~' );
define( 'NONCE_SALT',       'AZWAq^)`|8/$o,!==SShc^UY&(ouxS91k:`S[dCy~yo}-?yKrmL|/?YK/eV5A5SD' );

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

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2^NG;9$;)/1l^-P0E5;4l+Y4,o_z@@a=g=r6KiBZ2)EWT*o}6B_qLaWn8&F-jr5C' );
define( 'SECURE_AUTH_KEY',   '0a4vT1)G%NRC8sO2%aHTqGASKrpC$AgrmqLx]G`a6;Ky0wB6}PN(&WP+V1kx>FS~' );
define( 'LOGGED_IN_KEY',     'xY+T.ffJM[&l{_SWMH)$NIJhY9pGPzJzwqf[tQU~Z3dg6 5_X/`a1g#y5NH*NlB,' );
define( 'NONCE_KEY',         'F>CGz2/{D?F$ufns|PMfc`.kh6DqYOy}pD%:<oDs>CfY(rZkJ`eP,f B8D~7@g*S' );
define( 'AUTH_SALT',         'mo6F Z9bdTgwl+H].>9sl6OGS4[DeDi[}h+m~b>~U4A]24*w-GW3G!lwCeeTt]ak' );
define( 'SECURE_AUTH_SALT',  '`P)/ZS(xy?X;>LGe>Gp3[dZiknYJQge=uOI/|&m>jr!wUXgan88%S4S&wCA}]c40' );
define( 'LOGGED_IN_SALT',    'w:,`B&eg&vT;?B[x%tGQ2Fr&.G(gd^Vg7PYK*J$TPEOD5 qXag(DyYK4raeMP:{B' );
define( 'NONCE_SALT',        'Ev6n$]7fnfub/eG]%)>Q|)E;-:[<Q<SkNG?oB#`hcw-eL6&TuTy!dUCCzBrPGcyc' );
define( 'WP_CACHE_KEY_SALT', 'WJH-Ky6` xVRx(xGMf-La]ibG*Y9Ic^CpS=+}>7#.BMX`/4LT|8R>Su%:Z~2UaSN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

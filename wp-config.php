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
define( 'DB_NAME', 'rayhan' );

/** MySQL database username */
define( 'DB_USER', 'muhin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XJ2oBGhk3Q62V2jD' );

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
define( 'AUTH_KEY',         '{Edli@)5)w].dXX6};F-Z//o<;O`Cm]cak%E!_U&nY+oO`^{m>*W6t$^8R-YT&|m' );
define( 'SECURE_AUTH_KEY',  'HcH`O/BJvEg~`#Igbk8QELsBQ?L,QMCy5JSz1{Y);Zex/l=,TkY/p0DK.lefm6Gf' );
define( 'LOGGED_IN_KEY',    'Z@`y0?%0R}XgU[?*xL0Bexor9y# 2a`8y=M:q><o|&Qctoez3Yq~uR5@pMHY2Dh0' );
define( 'NONCE_KEY',        'stm(#>)`.gIC!Z`eco>9e9en+^SFEfLl/RSn4E1:.-ox,w3DHz=tNeOlw->sDRm|' );
define( 'AUTH_SALT',        '2;#!ZGLb/ <_N#eabu{jRB)grpYe)Dr9<HU5q,G`M{LR*js.]7pmj_&o16J=XeI@' );
define( 'SECURE_AUTH_SALT', '+-9a^hny6m(Wu)G%Lv:rhK(.:;0uB=,jn8F6tknWfwuvNiF_H2R@TcHSvQYU;IE$' );
define( 'LOGGED_IN_SALT',   '!8uAWna-q`ap.(itt )p/k2~9-[)6f^0`ny$l?Rr<~^Z_1;)3L}Z.DcJ((Z)JUKh' );
define( 'NONCE_SALT',       '%TD3*F2J)}rFI=PGx-uLI<+9]ywq66|G#N^,-9`U0#BOA|F7=6];INO3)T.DG(Z[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gt_';

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

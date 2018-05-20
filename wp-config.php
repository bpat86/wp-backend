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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-backend');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[pCt-;4]CcaxI]2+=,KIt%-I7:r=Vz@QAXN4L<;_a2oUlajt~%(/xY3}m&*=ov(a');
define('SECURE_AUTH_KEY',  'OAf,X(Vn^mbDN8#0eNCR5:ANQU_nCL3&CyXwT*.TjL;iL1UHpF*1A=lw0bQrVd{@');
define('LOGGED_IN_KEY',    ':wWL9.wUY>Qs/fXj2tbQNte8R.(TsoN%V)D#h4t/?$4R &AAqK@Gd*c}iJ15AgdW');
define('NONCE_KEY',        'i[OB+l/6*c/#O`bcIC[LV8c(fF3:[UDFCbLL{V2t?5nkU#6]PNWpjAyo/gDnb#>6');
define('AUTH_SALT',        'xMIvq5HecLE}l/#vH2|~81BAJbm?=uv0oGK(t^pq8V&[=T_YDRQRWlY;TD&j[7^X');
define('SECURE_AUTH_SALT', '=mskX-!BBVmrhjxpQE^,|uJ[HnsdhHZ/co-Yi}=FC#l^P;/&J`J}jaHsUlX^i8E.');
define('LOGGED_IN_SALT',   '3*@-9 d3sT!h9uY|}JwGYBF2#4K*f[sm2FfGTv+=n!_ {iY< ,. x7b[3;I %NBf');
define('NONCE_SALT',       '|]8qFC~2c8DXbt5b)R_hFL%9ug&0rE-O6S{7!!iNlq#6%pC[*pZ:Pn=zc:u^^o,<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

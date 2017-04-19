<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db271602543');

/** MySQL database username */
define('DB_USER', 'dbo271602543');

/** MySQL database password */
define('DB_PASSWORD', 'wD7MgxSA');

/** MySQL hostname */
define('DB_HOST', 'db1814.perfora.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'n1)l9RZ69X5{fhPkB^i+zKU WzPwtC]rP/rB]JsBQ`g9N0_6wKR%:C-v>+I~t-+S');
define('SECURE_AUTH_KEY',  '+icM>{8L5/{alNK#)YZGwPMPgQe@(h9T2s9q+wv)y|4o%UlG@Ba0R7XFU4pRn6h|');
define('LOGGED_IN_KEY',    'ZttH_NxUh2rQJ)-QpZQeM98yW251I-bwK![<=?ur|x|}Q<`uEThNPA|uJT<:&X<B');
define('NONCE_KEY',        '|JD[YvTA&<)#}B-xWQutWi,OEC!-~@Not{u8[3(AMk)0uph+e5+n9^o-m&ni);%n');
define('AUTH_SALT',        'Sy!1^DIm`hKEEa;O=D~+0A_hWzQxU5nAtw4?=UZc{6j4eP5Hqa1Mt[/Ca%-+]}@s');
define('SECURE_AUTH_SALT', 'd])Q*Romg}M .4I[wf-Ze-hs#0.nz0A6*SSP~Lg+}*fzB ?_BN )K/,D.7W4OWJ ');
define('LOGGED_IN_SALT',   '9lExGZad-vO=r.|j@R!g:`H3}2](S#|l2oZ+>G O3o(i6qf5)yAJcI=)J*I2O>uM');
define('NONCE_SALT',       'SGu8/vYuG_x{wsP-<t?5+&*JH%Nbmk5OzbtZ+S8fCUE^$MO!zyzgkHl/Lvb$g=z{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

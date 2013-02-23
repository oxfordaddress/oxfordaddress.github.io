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
define('DB_NAME', 'oxfordad_wordpress');

/** MySQL database username */
define('DB_USER', 'oxfordad_chris');

/** MySQL database password */
define('DB_PASSWORD', 'Wxl031--');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '[9s| V |8NtW}h@KR/r826|`8^VY.+2^iK!k[_IdFi3X%XXB@>ry51coBfX200SE');
define('SECURE_AUTH_KEY',  'hPx*s/s(<V9Ke=OQI@?*s65t<nSPuDYt-i6X Td_90s3@pVi*,L,~Nn.D5@wTl;+');
define('LOGGED_IN_KEY',    '}%$<=HDf*&3,kaxNYcHugVK3c43$Ce;Bd54=~IgO6e+Md/]C/^N;_VtN5r+/]E-.');
define('NONCE_KEY',        'Vqlz5[xh^l*:[lg|,[]{6O[.-FjC4.A``s}Pto~@Z;gU7859asG^;|/[0?-B`4?I');
define('AUTH_SALT',        '?F~!CHpt659qd`^YR 2F;B|oFvP#O<!>yw4S.z#IOr[H ,@WRlcdCQ:3J)(1l@$|');
define('SECURE_AUTH_SALT', '{lG;0c![-Wv_[M=EA@B<BR rx:L%z3KWK@$:hOPZg>}Bt!`bmsC tn>OmV:9m6,$');
define('LOGGED_IN_SALT',   '|d6m/~@dr?;ZX{D)_63wRb1Uvhfu|a#;M/fGJh1<0KNjGenXzI_(9W5#1O#uF<*{');
define('NONCE_SALT',       'jvD;k5GQc(Z27%EeTF,kVD}AZYFA.0(NbTAo4~w-_Ay;^|wS%bnq6B8S-mAN@&Do');

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

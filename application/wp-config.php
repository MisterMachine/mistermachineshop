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

if ( file_exists( dirname( __FILE__ ) . '/env.php') ) {
	require 'env.php';
} else {
	die('Please add your local configuration settings.');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OA6U}K,SKDJV=C~Da=U/vm}EFFw0J*0y|T1V 5BU@=O>,]fiAc-Aw.MgT7tYOuy+');
define('SECURE_AUTH_KEY',  '&+nsPGn)@z0-#&}A}B,3/{,$QSG=|$J;N,v|H/i|US_<Du>mi ]gNYB+(11!i)t!');
define('LOGGED_IN_KEY',    '^L#]e6yDn<MYIlm%~G=>@9U=VcilSmiCu#z<+rUhn;7nlzGD^}C2ZGSAAtR+u?z{');
define('NONCE_KEY',        'CuS=Se8^(T^4r]%A+@C+%lA`SIzs;[H%g@}a+.kji)t}U!,?Wxr=+q*ETdeYMDOg');
define('AUTH_SALT',        '(TzqIF9d]Xof?K&Yz&Uj65W=Q}Gc:6$_(9D4Vb[dAP1+pCD BgN77#-F%|04oJ[ ');
define('SECURE_AUTH_SALT', 'fVc7@=|2@n@9y`v_qAC~YB[TBCp@[WT)OFw4WBKZhU:jj(s{(39}X[11,~ >QJs]');
define('LOGGED_IN_SALT',   '+a>r=Yg(jKr^^IB!CA}Naj%!5K5+97+T]vso,|[EPr#cR3&x)W@ov5-<JneJ|SFD');
define('NONCE_SALT',       '=M2:w PDV>Q$mu!-nH&<(u-9,3z-H:1HO]r*?n``1P^VtW^irj9=XPP$cYPEe&HZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpms_';

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

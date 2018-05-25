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
define('DB_NAME', 'semanticBlog');

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
define('AUTH_KEY',         'G3]%>{7H]ETgm46d6{T-r^cqrDxX@w@d9$~YFY]xm`R`Q3{)RHSf;10x?[`wl,?b');
define('SECURE_AUTH_KEY',  '9 qn=)b!%CZBb+RIENr;N;6P,{@[Vf^<|t[tc5qrhru_{p89A,MMQ.;Bvj~ZJzvP');
define('LOGGED_IN_KEY',    '4A7`@<I`Ui_>:vRU/*W(WV1c`;c0>7(>C+x0dBL3gcm|x[65mL.#$zL<zU{&I(}3');
define('NONCE_KEY',        '!ue0lh6@F(VKhd6!jY4EYe!wmMk3|z^NvnIMn-Wg@b7@U4hOz|iqM);<^NA>H>Zm');
define('AUTH_SALT',        ']pvxS+,EO@@3Og!nROWh2b4`hl@<y)ge0g7$B {8/)pP#,:c_:(.itUCW(k-uLBu');
define('SECURE_AUTH_SALT', 'Sma]Y40x=0l4Gb>q ^D2Jc@#HBa) ?|EYFiSPFCZ~aWdn2TfHs$Hbm09[<eOT[Dc');
define('LOGGED_IN_SALT',   'zTrezFRL3N=<-oB&s:;pHFz;z+(nn]{kKREOOcs7}06TFS##tv@W0v*3Oy=96- Z');
define('NONCE_SALT',       'a)%(.)aPFTAhW! r+C7sc`lt@(&kMG[BN)-Nww1e-6=%]tEt)?TnPjj]l-:IU3o_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog';

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

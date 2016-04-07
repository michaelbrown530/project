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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'c3:N~OJ`I*8:5U>_7}:yzaQO8|$F4=LhM~AnUd7a*{K,W~H+=M{k//{a-._JXT2V');
define('SECURE_AUTH_KEY',  'f1|KPqh+#f)lcY+66|mxT1v,du|Q)W7]U*%P|n!Z~saS>0/V/9#e5d5!kFpN+m/{');
define('LOGGED_IN_KEY',    'AM]OmMDH++DBxtBm9&$qq9skm% p<4 gC1/{Qzau|DuHw6!weX{#& y|Kq?)kD=A');
define('NONCE_KEY',        'd[K1X[UQ#k5%`!u(D,WBJx7JCKRJU[-Ra|Ko,+Iqv.q)bO~6IraS&o@j._/eR|W4');
define('AUTH_SALT',        'LzFx*83TrTBUaw|-o@f_k@<-E`Ww!qDX)e5->tCk-f;bh|>!#6p_XU5-D#9`?7?F');
define('SECURE_AUTH_SALT', '/WKv(s{ |5!579ItI--6-55Yj-0Nn;.5.+i|$Qm8fU_m4(m fYJBr0<0m.Mo7+}8');
define('LOGGED_IN_SALT',   '7j y^BAz_ ihs{,:}{|OuFQA=0#x9h_;4{dF%4k4GlP]-_}1Uj.lM{Cdn9|f*Iob');
define('NONCE_SALT',       'H#eA{Chdp+GnvZ(^}yZYy^{;PGG w$z:!+e+mb1<#50n(WL3+RLCn#=M77j#81%?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mjb530_';

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

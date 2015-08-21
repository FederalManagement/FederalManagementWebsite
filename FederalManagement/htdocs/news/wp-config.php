<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'fedman01');

/** MySQL database username */
define('DB_USER', 'pwinter');

/** MySQL database password */
define('DB_PASSWORD', 'federal08');

/** MySQL hostname */
define('DB_HOST', '213.171.200.57');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        '&2K v8f^ )+30M~);O3#q5Nf3ykm/i^gHQs0+;^|BZ--59plstH5Kf]ABfTWwcV]');
define('SECURE_AUTH_KEY', ']:/k/=iCl!zP~7Ozuxzs:*{~Z%0-3EOewrNIDP5(r!y(>s1f#U93UOA;<-|~/8Zi');
define('LOGGED_IN_KEY',   'U +sWR)|JjG41JnS:3FmMQIsbUrHh?L)jrWUc [Q,i;aAS/> +Z0Ur-~${E`8z>A');
define('NONCE_KEY',       '!}LnG^bif$K9{7+!1ZiDr]>Vr.zMd!p+/pUa4jT~O8v-:4b;oXT&8/&+pM0lJj83');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fdrlm_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>

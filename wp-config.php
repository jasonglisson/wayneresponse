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
define('DB_NAME', 'wayneresponse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'gZP/&kRwu(`j #/qw&L((/,Z0Df33g]K0b-##s.x@KZ>lu)(-ul0R;141sJ>Y]//');
define('SECURE_AUTH_KEY',  'dEaflng?c`-Q]UA6(P{c3.%CYsO;[~C:FKCl**[y`+yop62kQ!T*y.^S^ZT[vORj');
define('LOGGED_IN_KEY',    'V@$Al!C$wd7nW`|C7B#=rW4P5:AX1`;~@=R5=dAU0#xMOC{FzA?F[C}Eb3&%cD~<');
define('NONCE_KEY',        'q|VkO.F.vw$`&i^I e5}EoE>R~l+6S]g}9&T}{3V!^XjJctYBf6)g,[Nme0PgsYy');
define('AUTH_SALT',        'PXMG6?<P{Z4_1+,v-+J`XF3^Kf<3y&kGr_0S26*A.$1+;Y@eCFf&ubX&.5/wS>j|');
define('SECURE_AUTH_SALT', ']9NY-dNZtQST(@hTlt_bJweNx.O@1%1#FJT/=M.?{dt[p:#_5=R08j*rUIue 1#o');
define('LOGGED_IN_SALT',   'h(bN3HRkGcJ`-gV/_:9|ZX#c{1!5hf|Ar/|?m$nS+y*Q7KCnk9e! 3QZikkI@=mf');
define('NONCE_SALT',       'zy -Dc];/Q3n5([EQpPT^eZymMh6II[sN7FU72k|eMw&_F~Z?Ux-e|E]*__(_Cct');

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

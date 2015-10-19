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
define('DB_NAME', 'topmedianetwork');

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
define('AUTH_KEY',         '<84~;}CH0pGT{#Ar+p-(/+y|_@#{.`;CGbTGzd>l+Z.t-dUPJW~Hu.=OVRZ5* 5-');
define('SECURE_AUTH_KEY',  '2^->;=bzx*J/%Ga+mtS-xF<nY3fmhH{OPmNUbNs20-w>4 @NE]8ul]/f_OpEX+2a');
define('LOGGED_IN_KEY',    '-<h1sGO.l|UEI,|4ccL9HafN1=4 Bmy:NfTdk3vJc!.JM%w!PI|&+FqtS_BEJ9%?');
define('NONCE_KEY',        '>bZYpJ=^QWDkX}xP HyE^7{ny<pScaa~a$s,f1)~gyfYrtzN|5Z-R}ALl)BzR,hz');
define('AUTH_SALT',        'aZrVmu.f*L=>^0~O2nS7_n|=s@Jk=vgwv5LrAj$((t+vjIA|oRnDj!%wiA,=T{+2');
define('SECURE_AUTH_SALT', 'UiM|nCd1.x+K9,%9%A8pqIn+igXP/&JJm@?-$5gPVd&4lQ`Eu0?UF[E`5kI#UN;N');
define('LOGGED_IN_SALT',   '{|B>SP sN0gl@F4toFYW/$N&eNP}SV+<+xx+8K(q[tbT|ISCS!T{THF}soYx|PJt');
define('NONCE_SALT',       'm^qQ`JxFU>X_;@E#L?vD~dl<4Z8y4}:`UoOG^I1OtFwJMO-=Z.H*k>b{ x!-DQ~(');

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

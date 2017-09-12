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
define('DB_NAME', 'human-behavior');

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
define('AUTH_KEY',         'MwBzTU)k|RHdf@pJ;h~z1`w6fU]}pvch3LS^lDWMFDY<:IErKQ^CiR2M4Eye99<2');
define('SECURE_AUTH_KEY',  'o}>u6.e@][10-dG,Lm;k,{_Da&Wi]dU[eGPz&? i2G<|=e{d|E$N/,wwT0+L1Hjs');
define('LOGGED_IN_KEY',    '!z^HuasYct&TnO3jDWA}?Q@!3onG==lMfq-bfz]3<>g&{RE3>3aB`p)=aL;FYHyZ');
define('NONCE_KEY',        'D4IScL#`lo;!@M6.k3xWq|O&gU[L$g4g1<wJEix>L+1;3c*uz_YgL]l+R3dkA%> ');
define('AUTH_SALT',        'oHae ] 8u</wm7$y^bzn=CGR/rng-dA},9cXQv8/8tH6Gd>.gwZfLHGT,C4&/1[?');
define('SECURE_AUTH_SALT', 'Getp0mi!};r9y?Gh_Z4FrP$F(r^QzFHU84e8??<Q}#VH)9tEL_ZCh0j9qSLXipwm');
define('LOGGED_IN_SALT',   'hu]eRe_d-3p2Ply1G;j_d}f;W=#>oNeuNB9.`,<mKFjKTBA;9P^f|c4%|bpvJGji');
define('NONCE_SALT',       '(K83n&1p.H3e@3eeo|go-4{]YY8Ya+8(6b`&0*7ux}a;zc<D>aF.T3O5FxGiu+VH');

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

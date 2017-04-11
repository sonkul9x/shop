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
define('DB_NAME', 'shop2');

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
define('AUTH_KEY',         'kV9C[jdwaA!EtKxWL3%d4P/[@2|^:!%m~~dD&y5X=8:9b1as~WGby}[1C<?;6)ii');
define('SECURE_AUTH_KEY',  'jizd|d^w~(bL5#4Zo8}/$y=C`jPB}+uqn/qs*R#rRM+cB{?u-Y=jok-+Hu&LTxvi');
define('LOGGED_IN_KEY',    '|IkrI./ph$Y{kRTypx[XUi83+^FH2~0O^TBQjg6A$/lXG2}AOwmXo6lnV%%{DlqU');
define('NONCE_KEY',        'O3S9u/:!TM9)V-<h62.FE:ZdV70uVil/2@iJjI+ClO!H,22wTZXCB1dp;Qjo~+r1');
define('AUTH_SALT',        '5_7:r_PsQh[O=/ds$RH<rvjXHD`&CuY&9j)`W:qLsN82`Np2/(2N(0;RodPEGDWl');
define('SECURE_AUTH_SALT', '=<yN@|i=y(4wO]x{0A_dPwJ;.99/Y&^2P6f2FoFdrkk2< =|z.v+eqbUP>:I{%Cv');
define('LOGGED_IN_SALT',   '29`P87sKi@DZ/*Zd;l@}3dp_`*`#|DL?##g#Q!ha4#=[.tsV{oY2}AI6$]Iv%y<y');
define('NONCE_SALT',       'hs_XOll4&h[_4Jt?fXfn8u(]xmvI_[g]P(GjH}^jQAC,I~2&*Gm~jPd<l$bDVjk ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sl_';

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

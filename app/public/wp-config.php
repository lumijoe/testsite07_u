<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'suV8:gxc{&F$>WO]t{NnL$K5`k*Lh&<b)6(++5UhXlI5r9{y~AM{PXD^zeE:QtRN' );
define( 'SECURE_AUTH_KEY',   'AK-qhEKHuKKS1GQ}Py*Fi AS-Zjy4HBK=u]0KTmM!iJf^,kaL-<ibN;`*6JUjPu:' );
define( 'LOGGED_IN_KEY',     'Xf^$Uzd{~4J_,1D]_ujb*1g@eN&],rzL]Mpsz<WXr?!SY[(%RDMw?=#>*[1%s$dZ' );
define( 'NONCE_KEY',         '<a5`@l|:(vogk9~ji$s3aw=wMT3s+p5Nh!pQ@&eO%r?$ 5NI)60E4Ny)sSGi2hqQ' );
define( 'AUTH_SALT',         '~XUh7a~^8@%g5qg(3ZdKjD.T%y-i|H?V[St))zWsyHr(xFaRLTpU0?Yh%tJ9k_.t' );
define( 'SECURE_AUTH_SALT',  'P?ggcD@n#abpj!1yC~p9Fl;O2V>t[Fw$uZ(P8fK8OjyjZdWzF%E3H>=*,P.>x 3p' );
define( 'LOGGED_IN_SALT',    'k=^4I0xUX %BlMhsS?}U[.n(q~eS;JYI?R]]v:H]J]%e4s|Xgn:kRa [{=FO@k5:' );
define( 'NONCE_SALT',        '995yd}wb<Cs&DqMbV9aw%&Wf>n(j=ltP;,9eI158,?f-heMoF;9,|siK=^qXJ9F`' );
define( 'WP_CACHE_KEY_SALT', 'KS^HJ@>vslwh1tP9;V>s%*071HfL%E-fU*zrnG,:ZuvoS6iK}pP)z8w.{ft7ux=m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

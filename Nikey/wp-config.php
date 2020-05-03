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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nikey' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',[nw2dY,Wx@KR &$v_mIN!<{e{q|]@?/.oi4G$&Z#wxyp(+D4*8y?&K&jR}d}^dJ' );
define( 'SECURE_AUTH_KEY',  '~@<8j_N`x=*:<bt}=19xgLZ63.dcoBjUh~J%:Ys->CXGhEK$q0UoJcvKmsYG(M<Q' );
define( 'LOGGED_IN_KEY',    'xAP(XAf}J%#e,WWAu0JaLu-ROo!T_C?uvpeZhRQv)5cyQf8y(Ffmo6[$k!pSS#V;' );
define( 'NONCE_KEY',        'r#Np~I%n^#QD%`D4s r+#R?;W6br6~vV[3:3P.G=:Tu_H]mSX0OoOl!D*~gpvd{B' );
define( 'AUTH_SALT',        'F?*G~RD@.h_0{m&]a%4*oU!l1JQ*D*`fyr8p!tGO%W>*4>Iq>T2xy-)g%RSF25DU' );
define( 'SECURE_AUTH_SALT', 'k8p;t`((;,b&g%RJ@,^69xjo@643R-Z/VmHE8S`f`if:!6=P> 4OSZX[PlQ7|daa' );
define( 'LOGGED_IN_SALT',   '}09T^IA9x-%z8wMfriis`4M/A^Q)ygics8@L?).6<h9&3dt6=l4f*dZAYVc90{fr' );
define( 'NONCE_SALT',       '/x) U+5X7}5RXU6+@nRTJonXFmyHL|yiJS`#SeFp7I3+b5r}Z f]<z>-7&M@P9~u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

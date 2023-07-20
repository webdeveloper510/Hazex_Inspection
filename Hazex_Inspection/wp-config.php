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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multivendor_db' );

/** Database username */
define( 'DB_USER', 'multivendor_db' );

/** Database password */
define( 'DB_PASSWORD', '$(ehjuGv8XO5' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'sVAI#Qhp,sGc`V3]iUrxDULePX.%0yP)#Sb_u#V.2[Rwlb5o$;Tl0jK*u|8+q.W|' );
define( 'SECURE_AUTH_KEY',  'F.z+OK4&qPXba<{#mAz^>%rg1?_{Y4t|V 9^4ZdBaC?kOL9p[BD7Vs~J/zb66(n-' );
define( 'LOGGED_IN_KEY',    'v >.cb7p,z|a8y{Tq*Sp-p4NEdLqZT[!H}`zm5gy3yiMfkJ&(YCO)VuvKt&B-m.t' );
define( 'NONCE_KEY',        '@z/b!I%+AbfM|G7f66@wMllsYf JC-`wCr^Gg#>>@cR`PGHZi%M#aE jTY4p1K.^' );
define( 'AUTH_SALT',        '=k>2PHvV&G[&BO&L%:D^ o15A5 _||P*C%*.|js#3xCaAGF@ZRw_h JTSHS&7vp#' );
define( 'SECURE_AUTH_SALT', 's{T:Z&]<)_/GlIk8^DQ%}ks/XqE/B2Qy= 6@xymX$d|y+:AIUtfp/zP+w}_(e3H{' );
define( 'LOGGED_IN_SALT',   'D#>F4lST^tIj+mMkTi2`G{G>@ZbA+1W1q{j;)}lUl}+&E,>+e*|!34qy5,rd]<Rl' );
define( 'NONCE_SALT',       '$ltcISm wW @j$@l]E-CrszK9Cd{euzO+1OLjec/t.4p,N)q*y^q{&ug:`EC->l8' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

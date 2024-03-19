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
define( 'AUTH_KEY',          't|V2@^y?nHzU kWsjrNkt%i6c*FDd!YB.3>_O*#}<snOi!O%Fw2|ucYe8J==q|yC' );
define( 'SECURE_AUTH_KEY',   'B lh3!@AA (.P%Agw#V`3tv*bU|2!w++4O((VsPDgHGb)Cf2u}cw^[Uu|WDH$<i@' );
define( 'LOGGED_IN_KEY',     'DC:5mbaa?}U0e4xFg<8`Y~C*@]BGAKjS57MebKZI6kKmLCbH$2)A.)_IWxcIv:;m' );
define( 'NONCE_KEY',         'eW}osDYLE;fQ)A3@{UT/(-6g+/G.3H,cg;Xes)F}:1XkY@o*mqIZKCAH#;CEj&=,' );
define( 'AUTH_SALT',         't#Gl|TA{>LrlJLEb5978KLDr@Ibk`h#g2w{>lfj+-%<e`b2T3Y^==R)IDp~`7UnW' );
define( 'SECURE_AUTH_SALT',  'h#8nrAB)l$(x[}7?7=(T4^W-]yGY#IATFZaFG#/#s!kryP`nLMq/9$>M!lAQ@c8J' );
define( 'LOGGED_IN_SALT',    'PlT&P pWWY^^37Hj@(eA;GRZpJ7Axqg_H8CxKwrMlf{|h /^7OVvy2v;V=:##nrj' );
define( 'NONCE_SALT',        'B[@J#@N$W=e;+sf]CeE_ `u}m9kfiF,RI6=VoMJvi4TV5/qC%RDP=U;5j[Yd3+g-' );
define( 'WP_CACHE_KEY_SALT', 'HsuP]c}tUf:,9I29a/-Z?%Bm(:2&b{1gw%0*w(ColN:j]A;eslGuL3}| L59n:2r' );


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

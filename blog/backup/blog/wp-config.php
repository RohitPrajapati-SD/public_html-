<?php



/** WP 2FA plugin data encryption key. For more information please visit wp2fa.io */
define( 'WP2FA_ENCRYPT_KEY', 'JO7AsUCfVt2CsUDOlXSAnA==' );




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
define('CONCATENATE_SCRIPTS', false);
/** The name of the database for WordPress */
define( 'DB_NAME', 'db3wftsw3v8dvt' );

/** MySQL database username */
define( 'DB_USER', 'uuvfp75du6zyn' );

/** MySQL database password */
define( 'DB_PASSWORD', '&c36+1t1g8g`' );

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
define( 'AUTH_KEY',         'i/e+U=3=Mx,M*61(1dvT59[fVL=#uO#-7-9:x&NW}XT5Lm<7H:(X-HG.@`n.y@oK' );
define( 'SECURE_AUTH_KEY',  'so5!MMMC7U?36pSHoY*X%.o^p*M,8v `V{v^#w@5,-j<%Q12vi@8&}`Af x.L@F%' );
define( 'LOGGED_IN_KEY',    'm(?bFw(|/P`H+,!R2F]-.e+,!QX%(u`*b,zO[7@juuL,,J@U+Efy:TvXy5u(BV(?' );
define( 'NONCE_KEY',        'FDWE5ilP>c jU<{.E,6GTVz- |51SU{n-}cu>0&:LfC)xQWqi]~DM;5R-K bk,Pf' );
define( 'AUTH_SALT',        'JEmcn=c2ft/y|15fB%``08^q5W.mJ*UvO`S>T}nq)*GM!~J_n$iB,9)SMpncl#fV' );
define( 'SECURE_AUTH_SALT', ')Z;eaW=ZXooc+q>L;vJ/]Lt/6V?v}K:@D9BGk()2/JT N&s< C3Wqt`(9WEmd!4j' );
define( 'LOGGED_IN_SALT',   'MFmd> M2vUL,_nV#8DJ#&;|j {v<GxCvO<S vO2:W`5F9P1MA6R,-<}KzteW6|?+' );
define( 'NONCE_SALT',       'pUS`X010iI9!FhpgrD8pF+Cz*~:n.QTD$0BJp#!IlZ+0g &f0Ds)re].,=GBMPVJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once( ABSPATH . 'wp-settings.php' );
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

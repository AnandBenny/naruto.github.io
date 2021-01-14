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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'sN@2|MA!gw&+lCE>IFWMSP(mCZXojM|R97;Nspv;d=]9(-{:srSD2WIg6:Wc;0pg' );
define( 'SECURE_AUTH_KEY',  '}xr!I<abPxZxZ>T]VW}G+#>B283WjrVn2NSA$?kHEqc9Zm<F#;&e!6Dnk lBYI!.' );
define( 'LOGGED_IN_KEY',    'OQhtH$fM}lTe{/V;Vu@|K:2 |OOSGW{U-/I~7D_+o5=:d6T)`^h0B0U`,IkJ>lAm' );
define( 'NONCE_KEY',        '-%_bK4Ooh)L)!^uBS1)!AN;Po6DT1u?!uMjI|7u:~e<{?o|eI8{t<][n*%)/i.q,' );
define( 'AUTH_SALT',        'FImgP%jI0M-)[H$;bt5V-Ql]q!+R{2`:pv#3:UVu$;eB#+#I,_MQF6%muyMj_tSi' );
define( 'SECURE_AUTH_SALT', '0pk[kj0LvH6)`i<ff6+rU`iL$<4<vbx! @k#*C5tAcONRK,X`@tOAF(%; Trry$W' );
define( 'LOGGED_IN_SALT',   'mw(,d?EFmCQ(,,wKz=.xP_sx~9bwTD;t&lp@-*_tYb>3BcJ?UAMJN(kQWonf)rlw' );
define( 'NONCE_SALT',       '!8NL:L=qT7:wa-ennXK0~f5IK#PQDF~fswFAcqa!$Pbc9a63_@5)N{BH uX8}ko.' );

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

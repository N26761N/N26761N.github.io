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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nswdvrtr' );

/** Database username */
define( 'DB_USER', 'nswdvrtr' );

/** Database password */
define( 'DB_PASSWORD', 'rdR6szSnxwJ3cWsN' );

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
define( 'AUTH_KEY',         'PMJV1NCw99U<bNH3I `&|&W|}=6y5J ,T?E <cngNLPZ?<h $|6^|6tbZzPGzeA)' );
define( 'SECURE_AUTH_KEY',  'wdwGFMiy|chF?QQeJTNUNVCpX-W47L7ch&P78(m!9&<XI<zy>zo(6I7OHPxn)TF|' );
define( 'LOGGED_IN_KEY',    ':K@4-W@~T <xbp)6#]]Ph0U+8f!!EB4Hnc(XL$?}rSUGKtLBuZQ3,u#zW2@=w)44' );
define( 'NONCE_KEY',        'BF=JUako1af`0!~6g]H.nSI0.snaz;<6HeQbah t;T6=y#brAhIU.L@Ay6.z+AKC' );
define( 'AUTH_SALT',        ' xLP5i0G{72T]GlexcuWYJ*[ oSKcI)aXDTwN*wQP!59E77gZWLQ]a+:7_(QhIl]' );
define( 'SECURE_AUTH_SALT', '@IZ9P8}l2*OG-b~*p6nN2Ev*haOwE%<&*(MB$FL!gku`:Vn`[3B}*Bv++e^6>BEL' );
define( 'LOGGED_IN_SALT',   '^yxfj `L1rn2*[`:ebIz7)U*}H wN({E0A`f8!U|pn@L |O^;67[h5GB Z!a  L>' );
define( 'NONCE_SALT',       'DMZWJD)vU8Q{ZOb&P+nbB$W2m39Q<bJYtk3J>quGYvIdg(O[;7*xpFv3q>x)Z4{}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

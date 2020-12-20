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
define( 'DB_NAME', 'pcm4' );

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
define( 'AUTH_KEY',         ':b)Tl6ZpfOjtV>vhT;Pr>/`$e>JvJq0zM?[b{/HK-:bu@qDR] Jd7)c}my}]Wvon' );
define( 'SECURE_AUTH_KEY',  '@dT:P5$*s|X;jk.f`_!]%RD7>0:k3V@f&KU_=WCIV1yd>t|<XmlCP!u VvRDf14`' );
define( 'LOGGED_IN_KEY',    '6F8fXLv;`aNY?^]M?SK]@wR9J/pG@gD4rS9GKr)J>=;)8dE*^x<(**A4ZSUj82JK' );
define( 'NONCE_KEY',        'Z2JrX]{z]LsP]*(:hKXSJX 558*@m D28?}C}&-Jy}m?s7;d7p7Q5!OqJs3mD5Z%' );
define( 'AUTH_SALT',        '?vo?ZM#o=vv*)4@sG)gEH.1AYT({aAUSjCVb _q&};gBX*WDeMao2!Dn)#6D8z~i' );
define( 'SECURE_AUTH_SALT', '.TXcH e_U_fk#8NN8dD{%;PEC@SC9rZPhQt}B{|_spUs7qz8y A~<Yi=cm9/anT%' );
define( 'LOGGED_IN_SALT',   'x3k[tK6wV^wx+B4q&^bmGgAIud)x;Cd9L.n(Nl~{9PVuw+_l`3c/_8unMp:HNzv}' );
define( 'NONCE_SALT',       'Ww!f=5$pp]gn[[Ke![KFH}Y4~Jo1X:Zfy]w8? WiQVu1hWczy2N j<9ds6,optFC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pcm_';

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

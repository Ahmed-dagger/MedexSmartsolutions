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
define( 'DB_NAME', 'medex_new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@a<9L?m9.Fis!DF9+6WB)V/JQ@swjen5;wpg rj{@ze!ip=3FiTD$Eku:}7<J1tl' );
define( 'SECURE_AUTH_KEY',  '6&}s-$]GL?:WqAw30+_502;aEP^_0F]zQ9Q8TY4Z<7*n:da}g(7I0V4-K4Mp7<C.' );
define( 'LOGGED_IN_KEY',    '.=fk`Ka8MNMi/4flm]d~/z;h0g!X0gg3D&no^(S[6{9zOUXW-6qF2:O@.<L)b+{F' );
define( 'NONCE_KEY',        '~4}B[gU5t1J]6k&H]0r%W1NTPaWEpmLVik~q<*GYpc?J&E5B:[n&2@&OnQi?&eSr' );
define( 'AUTH_SALT',        'rB*`~2e|P3Iu96DOJ87cAX/IA?@X-y|e~Ot:5T7Q;YXhtD5xda;+^u;t+/SD^2TP' );
define( 'SECURE_AUTH_SALT', '0tM{h[q,Y#M@O![AYc5?YdSQ@[oPo:o:`F{$Re+#88xkdhWv.JyMUq5RPaz$: [j' );
define( 'LOGGED_IN_SALT',   '69]lG>h&.gC)^HB_!F#:[;a-%-k_[gB(. 1,H_J!^|O<L!`oZ*Zkxwu*I}5Vky.n' );
define( 'NONCE_SALT',       'xNFU7iz$5/q?iY4+aq5=@WzE-*y?$I#-[y>hT:`q Ex/5llnmIn0,`{17}tYC{5;' );

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

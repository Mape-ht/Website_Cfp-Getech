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
define( 'DB_NAME', 'cfp_ngor' );

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
define( 'AUTH_KEY',         '3iX[ShukNBht5.] &Rh31fIs&68S/-B$T3V92km/r+$J>1N-<DyOJMNQt@~N__dt' );
define( 'SECURE_AUTH_KEY',  'Kr^6}A|RL/icVe%vsh `sDp[vJ?K=k<f?Y:bqi=hW$C0a%r@5m$-L o H+Ut#azS' );
define( 'LOGGED_IN_KEY',    'W-2b6F5~<^s?b/x+l9us=)Zw 8xqq:_FGttv,?oK_^3fg}gU<A|lKP~cwF$)6V$)' );
define( 'NONCE_KEY',        't/o@v&a>WZ#FrjrT0+r35@BJg:x8YKu*EJ)J|=.J!MY~v9$Gf^nlJ*BCtTA_;8sp' );
define( 'AUTH_SALT',        '8EEK)F`pyRp=EQH<I~nFI*-SYoy]qO;eNgC_DUGN`avH:9 !6={OQ[Y+h&7UkGbG' );
define( 'SECURE_AUTH_SALT', 'R${@a[5=4lIAKwyt5c9-gk||HI*PMIb:_(#aWroQ..iY3t;vs>eZ2  Z?K}C.ENG' );
define( 'LOGGED_IN_SALT',   'Gng.iF:UN0V9]Rg4)]1~&8WZ`nPsID778Jd0.{INJY&]YHP}8J.fxt2L%p<h?3V5' );
define( 'NONCE_SALT',       '<yf|$I.7Et~7rPbaq$6xpW4Zn)Mtv/q=cAM>q-rD=_!&3MH*)S1t#)l%!:-26#1,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'anaywp_';

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

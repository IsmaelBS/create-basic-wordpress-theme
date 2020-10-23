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

define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '. OL?v)icBZ(jW=-yrG4&aqyNFomy5DLu/#v]eO,3k](R5</G6fz#Xy6}@uP8L9-');
define('SECURE_AUTH_KEY',  '<0g,Qq@$pKNO^T+{5}g[G2 xJXzW=xj@NJ<qq/P|!wo4j^I{vb;m%?Q^%;iA4pD|');
define('LOGGED_IN_KEY',    'ItuP2-=pk~@w[<qaU~>g|y.rfq5KTQSO)K}2eMxeg=i|,BB%eC6pMS,2$`wwt]Oi');
define('NONCE_KEY',        ',eyd{7;Szy*)d vq5O!t%+O}>-$3jOHx[My5&-PF}wf(cvKcE&JPC5}!|4d0QW?R');
define('AUTH_SALT',        's%gA9*1H{<aRm>b$3|<-Wlha-x:FtIL?wsu6@)U4clS|H3_rmKtGwm+^?gTK]_MV');
define('SECURE_AUTH_SALT', 'I%rh4!m5.6-;5#5G396`I6%d8D@(qVSno&Ou^X6Z*B#Tssrd8o J(r^XuSi-h+]s');
define('LOGGED_IN_SALT',   '-OY_qPAM-$k8B%.=&P`+Ph:@Gz[tDllu$jZ-GM~Pi9a[FI_~O+W4!{Ba@N<1.9sM');
define('NONCE_SALT',       'YyJ{wPC}b{2RIClsrbeh+h-7J,w ,MWVgU`x}8-V>}lF~>{iD`Lmj]G|61.d+VeE');
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

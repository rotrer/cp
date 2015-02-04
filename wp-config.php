<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cp_leonrov');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jmbo!gu)<D__Okf,DYQd(E f,-1[=R-%-SPrJ:c{y%Q> )$iutb;v;=#4<PQ- t,');
define('SECURE_AUTH_KEY',  'P]an[u8]S`uahA;n:9X~-+%HhJ]:%k+A{ v)7a3hULBGodRQ=:}S_pf:g2u#Hn#S');
define('LOGGED_IN_KEY',    '^g1rSim$0(H]n|bi.S8m|pvwfy#ZN-_Fvjh0?{f<?3{<Syj]CT`fV7>e4*Ub*zz-');
define('NONCE_KEY',        '$xnz~-Zt)-,wkRm[{;=Jgs*~`F`2CYYLRp7CkD(S%F+1<X1rB5^|3q7)PT0n&I|G');
define('AUTH_SALT',        'x00VX.W)O<(-P/j`N-WRn9r^kaT-dq)y;/1%E({(bz#q=@&UoIx@Wt]m?Q_pUs-^');
define('SECURE_AUTH_SALT', 'lf_4zj+[$L`4L7H|-vmTk mg_|7A]OrpFU#mV$2iuk+|*n+SFvmV]=#0/$[ eWoz');
define('LOGGED_IN_SALT',   'k:<}7$KZ=v(f9CokW2PP9]XFD4s[SlJ[g`PdV@+o@*qy@&*zm75Y4&lM<?&gcy#g');
define('NONCE_SALT',       '1PW@l6P-+YhHEand-ZAw6gJ.c`ukcLa(T2FkO?b[E*NV-@75l?;-X-$v%/<hT&.e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

//WP-CONTENT outside core
define( 'WP_CONTENT_DIR', dirname (dirname(__FILE__)) . '/wp-content' );
define( 'WP_CONTENT_URL', '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

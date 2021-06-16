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
define( 'DB_NAME', 'botika' );

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
define( 'AUTH_KEY',         'zYZX:-J$ZI3ux9zHvgX6ozvr<PnWF+}xhe28%#F-mU])KbyJB4EnFRJKb%F70,_a' );
define( 'SECURE_AUTH_KEY',  'fez[Cm#:n9ryV&jg5Iyz{-h~1MF%<Kwt0;LD2v-cjEu(Vujq}xOE^kS&le-kYxwo' );
define( 'LOGGED_IN_KEY',    'LQfot@-jmLMN$vg2wt#Qdmq%4fKyG-g}k]%Cp5~<wyYs>CVfTGa=mDb:S^UF6vlt' );
define( 'NONCE_KEY',        '-;9sDKN_A%.9NY#jU!~#H(^GiyIvjR{feL}066_Xjfh3B=wgD#Czw< #Pg[GIeW~' );
define( 'AUTH_SALT',        'b7`9F4eNuP(BBzSmfR_[-+`#@]cj_&-rqUSII2U&<.]b]dd7W^?|q{5H:jMb2Ayb' );
define( 'SECURE_AUTH_SALT', 'GV8AC/fn^MH`zzz}~}*{X);N61k<U#)7*Q}^#P|5u1{%U0$.,d^7G1jQ.R^LQ[3h' );
define( 'LOGGED_IN_SALT',   'i}L+c.u6w#){*tJshJpim84>Gz%7XTuSxDWb Wf.mf-bSo!f`8DvV&wyRXSyeJTe' );
define( 'NONCE_SALT',       '-ovy$/$U[R1u4h,cydAAlmiZMT6JgO3TnAt83aP}U&3$@kxzW^QNgZsE26=DA/8o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'btk_';

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

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
define( 'DB_NAME', 'wordpress_database' );

/** Database username */
define( 'DB_USER', 'wordpress_Hama' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '?oMm+<#$`dL>r#zP+`t<dkK7<z5a6 z?trge{QJ,,r<hZKA~U/7F&Js9 PlWoz_C' );
define( 'SECURE_AUTH_KEY',   ',rEm:{6,FiJ:tpkbs I=.w&?(j]W{PD}txEqqND$jt1gwMKdwdjO;B~1VuoQX9eP' );
define( 'LOGGED_IN_KEY',     '77QZ`U}:q+(uV,g9ndW|CZoq#@sQ1YcIO:0zLmExi=vw9-,v:Fl?Z;CR2ihMtWdF' );
define( 'NONCE_KEY',         'x>~x]uQ.?>32P7 rB3*4U>;5XXGjjqN| ~0K5=p(1|jPdgUN4*EA#R^/QMV+:cR=' );
define( 'AUTH_SALT',         'FZe$2+f6)gwW2~i1.0#3rqgoEu$#7z^;Lk6~fB?%Ek=C~1~3b9xSRnnGB~njRSe2' );
define( 'SECURE_AUTH_SALT',  'zIdw>Kt`Px<C&(IxX(oxJE_.![~cN%~W&xAIC02);r;U3):Fu_I|bRJd>+y%tooH' );
define( 'LOGGED_IN_SALT',    'Ztb*#iY7V[(@6n+c5-,IHo@5I=qf(FQ wp&w$U,bK>yJi3x|6 &Z*g&mTBQ)=9j=' );
define( 'NONCE_SALT',        '#Zv_D?Le HboJ*?AIb*kTm&yem}1Cz +]k2govasJ.ROefFKRh%4pZ=J`W_wy@$I' );
define( 'WP_CACHE_KEY_SALT', 'e8_iHzJSmS+Vn-AyuHZ7D_}3>]{x-7{n*|wlBj;BKroT^pKI!5`z2~Q#C#*gV*&d' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'id22019898_wp_8bf89badb385e8350ea823b305281254' );

/** Database username */
define( 'DB_USER', 'id22019898_wp_8bf89badb385e8350ea823b305281254' );

/** Database password */
define( 'DB_PASSWORD', '6705f162b2722eced4f99c74ce223b5cd75350c4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '3t&<<2%>fc.{,zv]kQA=uTjnU82h=DJde2*6.jD?d)^jaml^@uYUcGMB{opA5W;,' );
define( 'SECURE_AUTH_KEY',   'X77EtI~~N(qS X,@CK^gAzA}k,J8>j1uYP|[@AH^74jJPa/^pxG9+ze3NH_77IvM' );
define( 'LOGGED_IN_KEY',     ')bT6Zj}Wq=jQ:1)[p18$CfR[6FOn{b6>KAAMu|3==tJB/O>*YCv$p_2Hf.:a]#S6' );
define( 'NONCE_KEY',         'RZYE_mS`[(R@-U[e1%OhaK_,7ZGXt];`OiKq3l_!o?~XQVy7p*a.^T:Kef9Wa>X]' );
define( 'AUTH_SALT',         'De1b.G33l-D2,21kKo:GpyeM]9#(iNgfigddIKvo:f+`0U ,cqGs|cOqg56w TKs' );
define( 'SECURE_AUTH_SALT',  ']Luf{/QI%e<%ChZ`kNz?#iAN<&6HY{$)t,+!P khD>V*fk-x&4P,X_37QB``3ey=' );
define( 'LOGGED_IN_SALT',    '(9j)`F(3$O.qi8l;0z8s%p&JG.o9IH`c(@*W~@(;S:mE8I8<cQdzJ!z+Uxo oFsy' );
define( 'NONCE_SALT',        'c5a#1lQ;et&y`}2R^m.~6nO07a~14kQdcq^fFRsOuhMri3[*LMxI0RgW1VB&i4]B' );
define( 'WP_CACHE_KEY_SALT', 'MLo4^Z@M2F[y4.^;y1[&Z n){*~ZI|o9!_uiJh0gt2vdL9;IZ%g|.Q@Yl!`fLkBY' );


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

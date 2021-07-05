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
define( 'DB_NAME', 'wp_business' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'KME%fw(uX&xr@f<_?5|&JKY4YbY]fG#H.%.K4&!(n`u#z8-%uNr~W6S,hBhK2S{Z' );
define( 'SECURE_AUTH_KEY',  'aAJz+9bZb$ZQ,;%bL!c>Sr=wv I#+E0#>d3K`ISFHUPkXa(82;E}Ui-OpGBMzH3i' );
define( 'LOGGED_IN_KEY',    'X7i5:7PK{j?8e5qJy{;z>v>l-L;CT&wG0[85p4[HWqYc3a>L:su<Iy_bueOv[HCb' );
define( 'NONCE_KEY',        'bP,n_AC4=#s>Qk?2=DoK{Y2jyY)bQiQ9VK{/vxj}Xv5-Uer}:?SrJ!nW@Re>)oBL' );
define( 'AUTH_SALT',        's[qFLdA+{u>o,X#8Vob-rS7m-WCQUG?,Dun~-gz![Q3`~=_8}ev%G2[]W|Yqtw*1' );
define( 'SECURE_AUTH_SALT', 'jGiB%+{OrngpfOOye[US-M gRIz/MS+sc=1TAjJTZF.tn.Np2~M4BjPh$*dDpyR;' );
define( 'LOGGED_IN_SALT',   'orX:RQF:a$IbBw98krRoyCzC=dY3Dw=&$a&~ kXx{[pE0B5OLbr0umKgYem)wh;^' );
define( 'NONCE_SALT',       '!>ZyQdIw)/6-qWN`/#2OQ<1V%M8%F*;Q=@38=ZI6i,_M [|CmF]aKg%uKm+`KVQz' );

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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9 H*:~|:,XRl@eaOcx``C)Dq+b]FOe*`n;}jY0#(y #O$&v/^4/+boLM)HuF(:k-');
define('SECURE_AUTH_KEY',  '3FO=ule>?D.X=(g@bGm@nsQmcs}O5nS+p7/x3PvvS.9u~QSmVA-Gc#TJnE%5%]H%');
define('LOGGED_IN_KEY',    '@+&44&Ytu~~6%N0~(!r&rJT.+[k6<XxV3)3k{Ag}+-ohd*92BCoH2<6tUVN5f.s!');
define('NONCE_KEY',        '6AFA-R[lBctd{c<j!ZXIWVu$4zfq^8HO]som@DK.q8 8seXy-$uxk[LGii)_uv|P');
define('AUTH_SALT',        'h|z(a|1w,wRhd*4M@.Tv1Kj!%Od5X_)x5vQw|;d2[yii|7k,UFr pQ#Z0-B~;c+r');
define('SECURE_AUTH_SALT', 'P%y#lqj]Y:eEp9^$b[nFxP3m])mbL0&5^@5Cdp7H=ZdC=#|6:OJr-l%QLTn/L2@p');
define('LOGGED_IN_SALT',   'AqEcC @2`(?;lR-B-ct}{2=w@j1FE.gUM670=>&TVv>XOzTHYFk{Y%7@0Di<Haw-');
define('NONCE_SALT',       'w<E[oKEU2i%cMn3L(f5HY98?F$S-^H:qK5uG]Z!K/_Hmz}Y:nrUc t}Dry]g<K^$');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

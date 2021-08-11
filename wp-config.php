<?php
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include_once dirname( __FILE__ ) . '/wp-config-local.php';
} else {
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY', 'lu6[ZV#:cw:kAJjPWi}LqM7 %TmJtByo,*4- Jx1t$d3DO.3Bt]JaiN<hyc6=xs2' );
define( 'SECURE_AUTH_KEY', ':LVPl4tDo++.3XG^nRDCc#dpM45+#W/|^[8;wPpkAG*pJ8Paj~o,umiM;l84h(Cd' );
define( 'LOGGED_IN_KEY', 'H_vy3d^62hl%:[2&Qj5aGx]qJCudahcB6PW#iivZlMDV@+&%(/C5K{#q}4gDXbGJ' );
define( 'NONCE_KEY', 'Ix5YYv[::F}~)4l] 5r:G|ub(|lD5FEsM<NKMl:qB}$YKk-X_7n)Z7&R5:fWTBW0' );
define( 'AUTH_SALT', '9}JEuzfXy59mT>cH!GRva0-Lc){0K{CSN77>W/6b;D*_sG:xUc3aye3.pE=Dd-|8' );
define( 'SECURE_AUTH_SALT', ';1.W]]O40 r:<mKa>=+ 4_[iIz(?m3bnz{#gJo)q+EciSn 7qcFXgEOSHa!:nOVw' );
define( 'LOGGED_IN_SALT', 'zg_$Y?CIpoT`R>{1dEauoTT0B8Av1FK3Pk?wGFdkNZ=WTq^,~b0r!sm3nMFH5[$i' );
define( 'NONCE_SALT', '3e#lDWeJB,l*P2itkj;:>` 8K.qc],%bQF[v#XY&_Sqp-e5rw|NA(X:JsQ/BUPT8' );
define( 'WP_CACHE_KEY_SALT', 'BE]eottQd:X(eRm4jWx`>}+$rU3k7X.M?>`>dl]o3|gXpJ4#G(53pYypagmW6pm)' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

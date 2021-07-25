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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '4lkcEOrb}kv@~{vk/kum!Ah9zR.k8j@*,e+?f$cqU}c9xO{mz5>cAy4!wQE_TjL=' );
define( 'SECURE_AUTH_KEY',  't]M9DzO.$!}yy1omZGza2`J1ogjBLZ3pJ!DgerH%bzQ,Xty. V mMr71NO,w2u5v' );
define( 'LOGGED_IN_KEY',    'uEhr};7UKNF,%*oe3JNH1&PaQO:@Hq*k;pI];Lwdt=mqq/#/M8%o+r64_=LgDb,m' );
define( 'NONCE_KEY',        'Ghy_>R`kgp$)8bdU>@4w6;U4mCe(zLtivXbd9J=Ob36E[Pd_5aCy^WK <Y@=]Tqq' );
define( 'AUTH_SALT',        'SCB{1`as7@Iz2}&y (jGT]Z)hLhc9c<b|nQSOBk<)@Y{|:/azkaMDh`cqQ[.I?/_' );
define( 'SECURE_AUTH_SALT', '.a9F~;1Q/u7@dx$Q3[q*<BX5eQp;1r[FGBl5E$R}KU5aTaGpB.-QzdN%~$KKBn{&' );
define( 'LOGGED_IN_SALT',   ';[<pNyZrgW@^2JCA@hCpQ1E`6j6$bNE-!C=FeSHp*Gs!<+puG7lh5@WlP@]-~:*p' );
define( 'NONCE_SALT',       'j3MK&`dJEuW0OH6.0=px_GkRs-h7eUl(0j|n>AY?~d|(LLI.aZtv6p(a~6*(ULFH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

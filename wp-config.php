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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'f1academy1');

/** MySQL database username */
define('DB_USER', 'f1academy1');

/** MySQL database password */
define('DB_PASSWORD', 'lim1031!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^ocgyG$ln7o464pW8wnJjm=K,~l>a($$jztp_WatHPVC72kqv,`DRvJ64wEeIk^d');
define('SECURE_AUTH_KEY',  '7fSO$QdH?J`agXAQ1EZ,6TIxQo0m=w*mlQ~wvi?:A+wQm7Tma@Mz5E[~U>&9#zS!');
define('LOGGED_IN_KEY',    'V7-8)]V%gLY?4&<a*<^olV1q9#nCZR^kA.iw8q7z{TN`b<H^lo#*SQse4HFce]%G');
define('NONCE_KEY',        'AmbE,-U^8,:oSoOS+7[^5Y>:t5[/-JUH%4%{LW/f5SwBRZML>.}PtuR9mSW}uXzU');
define('AUTH_SALT',        'NRg:0@O YvGOaVAk>V%;>3FeI)<*k`&az9}8&1r{@=q3tb%7Yo#*77Q`:Z*W6T(p');
define('SECURE_AUTH_SALT', '`Fx,b`33A#)wp=uf?X@.gF ~15$:To#e{yTD/{3Wa#^&p[Q}vJZ|B,MP0H)qVSsp');
define('LOGGED_IN_SALT',   'NwWfj>|u^qpchntt,_Ef-p[q-=@45?pGT#KUxh%u:n_1_xma.R}2c_9lhgg>0ueB');
define('NONCE_SALT',       '2xiCI#)<-k%H}5A<LA&Z)2L$uHU,KBPD(LhkQ6REKp,Q:|5E|rG=sfFr6/]_m@66');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

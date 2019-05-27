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
define( 'DB_NAME', 'adarti' );

/** MySQL database username */
define( 'DB_USER', 'adarti' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adarti' );

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
define( 'AUTH_KEY',         'I22J,I9PyL$HfE,=XJQ,8VT&[Ipj +&gC:NB[+#e^$mqUpG}oy!yxBqF%z=c L8u' );
define( 'SECURE_AUTH_KEY',  '6Z$!!k]n:xcPErSv}56p&Z[%kCSB]9Na12$[.t#X<NyKSASb_YOo|S>+Y@opUxDl' );
define( 'LOGGED_IN_KEY',    'dP?Oi](x.b :{MNt|(G$Xof|,w}upo/:L_&~fFSII3X&Z_JBJ55({{mgIdLMm~(B' );
define( 'NONCE_KEY',        'P?>o`EO/VG_6Tp.|LP-)=8I^%6v]mfgC,*?`;Vfy3gHhf<k|,9Gw@8aw9w=P1zcB' );
define( 'AUTH_SALT',        '}JXn`bw9_K(n`8LyT+8!Lh4bgCe[}~L)v0aLwQ&IwPNHflM#%!b2IbZbzjqrI[!z' );
define( 'SECURE_AUTH_SALT', 'IO=&*sPc`?iO>A)u#;cq,@1~=5S1Z4Ea6H;wqtmEsqR@x%}.OHQdrpc]jePhHXx$' );
define( 'LOGGED_IN_SALT',   'Za$<Zjk,+_$P^od{i|W~*#P%N2s8E8z})ID]`Z1TJ/iQ/6s/-+)MATpSrhs->|;N' );
define( 'NONCE_SALT',       'T?,?8$HP+pIrIR%8Te98<W M;Qm.*26VJ|$?Av.Rre,~1@R;bo0kENo?eq;d^RKE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

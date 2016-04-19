<?php




// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?UPry^N01nJLPh:T:VEA:|np7[L?qU3qS~.(s$r7EC+Y[D]BtggXF(zdu4>9LNh-');
define('SECURE_AUTH_KEY',  ' x]#P(wz1/X!#h3AAr0doM,2_M^`[YC7L7yG;R|F-`wq< XvWt1qO!=PF)Zb6:P{');
define('LOGGED_IN_KEY',    '?+}gG!d*Qpxc>0p~|Pg<(hXNCZo8g,;Nvb%3F*,tgjy5H-0X){+*:uR8?U/17pM<');
define('NONCE_KEY',        '-S/`@t8&jU2(]S{ev}>|uLSGttvggW.B&Tyi8$AyN#4$V~ L`t66oJEhEa52_K|P');
define('AUTH_SALT',        'd|e?cL~L,x/jh6,9:-YhXs@F%+^Ce%3zVO`[F<@FPAS&{,vY&z+*d7i77O6FJ!|$');
define('SECURE_AUTH_SALT', '$:5$^KZ+Y-2iV0;gggO;p`29kMY|WEG}1aA!@3t_0i{RM)iI!kMe5TiEiB|6;Zn8');
define('LOGGED_IN_SALT',   ']D@UuN_t0_!-GDZXi1%nV@Gaa7Y lX|5fX$;Z{inqC6m0+s#VZ1c=>$B$3s$!BJy');
define('NONCE_SALT',       'TolrnSWJB=-)6m]W!t%b5Z-%]&Cs^7QziV1bsH3<uTMI-n@Ln-J4^?+0vdqp=?i2');



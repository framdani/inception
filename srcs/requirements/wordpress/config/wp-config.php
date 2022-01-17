<?php

define( 'DB_NAME', 'database_name_here');

/** MySQL database username */
define( 'DB_USER', 'username_here');

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here');

/** MySQL hostname */
define( 'DB_HOST', 'hostname_here');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'jE*X*bI51JAG(X[hHq7/*W[|f:R<c3wk#)pzcCIb><eNRCN9G[bpYmt#Ca}j9iWi');
define('SECURE_AUTH_KEY',  'StO6e*!/g#|V~%0(WNU- T)^z% ryB*n2m-A?W``pM!~1dm+hB_=VC=>]&?HM|j+');
define('LOGGED_IN_KEY',    'KmaR~Ol5.(3(O,y4#N6!G>aIP%_z|FP@A:_J|1KYy {M%CTMP||V&/||T+z[h$B9');
define('NONCE_KEY',        '#QV+f[u!~8d+YEosdo%i~(`[*}..Zb*4GP+J1d{-=s}ymsDU) zS8+MX2*gPmU[0');
define('AUTH_SALT',        '6ax^]P:}~;s[gN;_Cvgk@5^vm-WQpy_?Bi3G[ ^8s{6m:@aOSaQr*%lA(qgns-7p');
define('SECURE_AUTH_SALT', 'Y^Q!^}?^Z06oo.hA}JQ6e/<}fJ/w@kfu.zDk50I;|lp{Gd=jAx<T08XMbGQ{}9I|');
define('LOGGED_IN_SALT',   '0rcfTW|aDo[P$S=wB[xOzi@8[#IG}|Q`%TWLM95x,(+w.V<NAW^SJ<U9+#.h_sKm');
define('NONCE_SALT',       '|:8%G $^|d,on38ASA+m2j@|FR??[%%Bu%vC}tS)J*Xx{=$*TG:i4j3R|?6542xc');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
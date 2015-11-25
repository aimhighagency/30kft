<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '30kft');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hollerlujah');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '3m)m%wsp|#mD:7c+XZA9Act}g?SX9p$twXL{i.C/9ipEE-Nhq,>zy*dytGJ[vaNB');
define('SECURE_AUTH_KEY',  'I^X39dUTynD(A+-qNF_FRSVN//C_IglU(zd~QjbaqKo@isXz2~)BJ~eqMxe(/qJ)');
define('LOGGED_IN_KEY',    '%8XAEm$n+qpuG4d)Phi<k(B|45Qhcx>6$_SO~*K|HNWS&/g4mF`~I~j:U?.(Q?32');
define('NONCE_KEY',        'vZIim<2j~dO%.-sU_ANu;{Tz?Zn2eQUSP.oB+L>Ux+,LCOS^8D=W?b2D}PQL`die');
define('AUTH_SALT',        'sea%(0WvPpM$c+c~T^eo%t&evrmAJLU-@vcel0NsO3Sd[~nEw9|T$xr>hwX][15O');
define('SECURE_AUTH_SALT', 'XtV-JU>Q|5Z3+7X!5bWOWC&_@i[5QE4&M4#]_3w;=2iUeym+Ew}+ke%VYiqdl:#G');
define('LOGGED_IN_SALT',   '$z*x~Yu`^EY*:hy`5@loH*-LU3PaYs[R}S17PA`!g+@~VfPk#P|ngvzYGN<Z|~YV');
define('NONCE_SALT',       'S-K@nkXmJEP2JMR4lm.sN1&}@ajG|N*=4(!|R+[_g)f-8VLbS|Fl2)a@Xr<03$un');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

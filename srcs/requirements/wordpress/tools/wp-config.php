<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'ykissiko' );
define( 'DB_PASSWORD', '1234' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         'u|[qxmd9~T/G[+D.a|AHsyln-Afd>y|L61p7wvK$tr=SszaUmGQ-YPqbRuIk->;K');
define('SECURE_AUTH_KEY',  'ev2%XM76iqDl`iaT&(x|:9Q%)mPav7jnNHBz`y=s|L/m%(,sutZ#v4^w@N?R8!@H');
define('LOGGED_IN_KEY',    'fdrZ)KV!HGHGmJ6i:Z)pG-8!_15>9JD2u!j=C1gHm+n@I[9aS]iB;^Z:c5pD!%mz');
define('NONCE_KEY',        '$o(Q-.XN|3Csn>&S@cX>0Imrv{&@@@qqg7!b+h$swj;> xp3|MECtU_rF_-&y0KH');
define('AUTH_SALT',        'zMN 3L/lM!j_`UkgBf6J3E#RN}rWDvXRGm>+Ajl[L8q;%}c2fhrG*hgNo*,yr-So');
define('SECURE_AUTH_SALT', 'j$]H+[z+3XOzN.rhTXH_;+2V,L*aq0*,I:XSC!zjAc$!9-T.dFIu5.B9D^X1&O@G');
define('LOGGED_IN_SALT',   '{*)(%-U9-F]3E/h8Fk}Dqg4?9Gfn^~|c,pfq2nU=I(uv=(]P67BD.S.cs7}h-Dv^');
define('NONCE_SALT',       '#}_,j.tkjor:. ^`=la0V@1:>SOnR+a_j@z_*uI$f|)pc$zrhUx/m|Bp;uV)P|*)');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

require_once ABSPATH . 'wp-settings.php';

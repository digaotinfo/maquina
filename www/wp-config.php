<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'maquina');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
// define('DB_PASSWORD', 'y8TF4Va1P2');
define('DB_PASSWORD', 'mysql');

/** nome do host do MySQL */
// define('DB_HOST', 'mysql-zoio-bancos.jelastic.websolute.net.br');
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ba@HwskT>-uZPOT?W)~`Hoqforq,;x[3,,SSNzd!Mbz`GTK]O$/GI,=8fCjkFu|D');
define('SECURE_AUTH_KEY',  'wx#s}Q3Nd+]?zXPMQwja[_h^;s#]&X_5R8aG{YP:y2bzrU%mkvGM!1s@b6Qf Ddy');
define('LOGGED_IN_KEY',    ']5.yw`RV*k=tH.FuCTuQC,*{ni1(i()v%G&{Rv>cDNbDQek;<]%hfdyK)g4.%LE_');
define('NONCE_KEY',        'rOCo.d[azrT3HMa_a75WI[x<YJ9umEeX4]t[sV@oAeQ_e18BP.p6D_=Xs_3kuLuJ');
define('AUTH_SALT',        'IBgQ94E+[,:g^oB~N,bX18jrbM2)V[yO}~*9WxoR6Jm[Z]`sOO{CygqO8#~EQV>-');
define('SECURE_AUTH_SALT', '.)G%qd:3<;j!0I R*~>I c-&iyX4-T$G_()7<z?odzWH5Lkj06nRwy,s]y{|!co6');
define('LOGGED_IN_SALT',   '1[k/:72s]c.STf:I;&*j8Zi=GFNog4f@^RGm.pd{CUN`sg7Q,Hu@m68f]%Wf3@,;');
define('NONCE_SALT',       'v;m=Ak_:ReE_M%w3Z0GKOacpX#IUl]KX.,otj<fpXimfxuriX2g8/jISx%e*3DLi');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'sap');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'sap_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'TrainningEAD5000');

/** nome do host do MySQL */
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
define('AUTH_KEY',         '*9SY,of&W=dEzylpp09YrTasE(bqW-?#(6e)u+t~Blr- w;4yneGm7|(Z}&&!aOe');
define('SECURE_AUTH_KEY',  'MX8Rms5L6|mwr%op:7Z6e1}&O;mHylUtVTSp!6/*#|ZhhtQ#@jFx!*s<3:&u7EXC');
define('LOGGED_IN_KEY',    'R|/(7Z^Q<u_tFYJ;b<5W+ ^UG?P/[.`+qpvk6m+]6@+nIV5l=|)apRG-+YT50hgE');
define('NONCE_KEY',        '=M#aMAdux-I5^4r] -.-vWC}qETa-2}?%~1Q0Qrr$CE[{K?gLAy-R_nQnc)z |u.');
define('AUTH_SALT',        'a<+eu*MI-Ik67;!rlMCEJin%.y_z*Z(3+0@^I*r%|3-/80GId`Xm(OJ:|wV)oR_E');
define('SECURE_AUTH_SALT', 'kLczAedM.sy*QZ-es&DS9SpUfO0PzPF4-aTn0`N0pFHW1N*QH i^d<036cxUCpjH');
define('LOGGED_IN_SALT',   'k]4XG4JRu_?2<FcUE]GM4p`+7czfCPVDLzHfREWnFoh#jf5D.^vD<OL{a)GU!uW*');
define('NONCE_SALT',       'T+k|w8Ow|9{v(tC1SRzgfZ|g;;y@|}wtV70];siFTT|4QF`xiB4$e7{d=yz0SD{R');

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

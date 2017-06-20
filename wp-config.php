<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'osjc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S;zt+Ep[4OWZ^7!&1W9.b|XVyq_aW)CP?zD0J|vD4N9JmU8X{%.xBly{O.u{[-)P');
define('SECURE_AUTH_KEY',  '>Yj$E{naprC[@&?qCHScjn/&9x=B:l.>kxUQ0p:LJo2:NIaD|<#}F+z`g6ag!j@h');
define('LOGGED_IN_KEY',    'mBO=YG -_Qf>3T5Vb_L,7.hO)w$gR:gR5+UZO1N@8j{$6GvyTUQa)2?a*X$zQk{%');
define('NONCE_KEY',        '`y^<UPR!A:^!B7_B)&CK`H>sb-7)n[@58n^JqKIEuX>c3^t/*i$,c1+t/:hS^n}s');
define('AUTH_SALT',        'E5#~SA776&%d3a^[kgi j~SAw}iJx%Ojf{(AN&1L/QWiM;3T,=W8BoEtq`KNOxH{');
define('SECURE_AUTH_SALT', '+,`n*/7(77g13/qseb@$_9bg/s>+KF2UU;fw0N0my{tm#| RBDOee@}BW<b5vfiO');
define('LOGGED_IN_SALT',   'b?+U6]lK3x5i`,_m{817+i3V3YE)=0W,dx%To?H`,N3AYr,.9/A5c~trJ?|2O,jj');
define('NONCE_SALT',       '~{IKOZTSGOrAA^Qj|@U->4GNm`^2&qnxtGa.-zet[r}xc}pyLAP*0G&+8XhL>jp)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp5__';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

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
define('AUTH_KEY',         '>mw^v*|F_$^_Ryd+[,YVn7tCu/-]p.N^q&51e>@U [lYQJ54J3OMHR{*u86UhLw-');
define('SECURE_AUTH_KEY',  'p4zgh/uOi|yP/!WW`b,*<g0%Z2xH28E)~S>nw{} f>,BQZ[$<|%B/FkK<v>=>3ZQ');
define('LOGGED_IN_KEY',    'k<)l6(]L9N#9kV/h+j[:fwEsokU&2jBL{NG7EAe^{3#:cZQ_`x-cvrb@VrsBZAml');
define('NONCE_KEY',        '.2ez6)H3lc3n`pXe+s! zZB)c2eli<ne|3YIHA5Gs.D5/W=zQ.3)#C@#XBBPT:Se');
define('AUTH_SALT',        '4xa[zrziRT0z/OdQ5kX1>VmC*z>GK)S]5(4b`c<h+R|?!)n7I8N)Q2-^Gfwx.a%3');
define('SECURE_AUTH_SALT', '7C[uGJd2e0([g^!s.0q~rEjVL&cZ#c]DzFGa5B6FPP8WI/],dB}L}A*y5bM;%[Ch');
define('LOGGED_IN_SALT',   'vw2Xur;m,Gn|bH@K%nLZ{a=Rog-{0u`_ceME$m0YE0 ri|:$5)ny:)GUX=JU0X`o');
define('NONCE_SALT',       '@+](MrO%zrdx-dofXEKgUD6gA.k=fw+i(:C2/c(H!e``A:6DT{X~D15}UMmL9Gb;');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp5';

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

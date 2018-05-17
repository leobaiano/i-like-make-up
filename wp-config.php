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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'i-like-make-up');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '29RT8;cPow-0U}s;Iqx!TPKXNjw[r5_[5PFwT&BY+Ut7a?.c/KL&<A<.Xl!COUF>');
define('SECURE_AUTH_KEY',  'm;4 .</}!8rJDKJ!1z)EiwHeY]Y4cOpk|dFEa+(aJ[Eu -?hIp@N*B331iAh_JyL');
define('LOGGED_IN_KEY',    'mjRhar$j3PsK5bEYug_)V+zt}yep+VlO)-:q|[O_j|mH*H$ +c;vZ Enz1|$o.ML');
define('NONCE_KEY',        '/N0k-D(qx+-SHfaglTJwD_zr~K*8lvdI.2S1ABdPV8A~|B2^(pQ)VW?9OaN$>Np(');
define('AUTH_SALT',        '*`56yfX[fe*BVp:TN:id**M4NX[4F%V:Ecx-wF04!|s ]]E+1kpJt>(&WII0q}[7');
define('SECURE_AUTH_SALT', ',Ad)t2B^HbcfR1|-w@5oeB$q.|<BBj;pQoTv+8gw{b-(R9?+@y:n$`g)V*#reJ[T');
define('LOGGED_IN_SALT',   'FJALzF#X*W/73p-M+KbMY>kFBv8hxd5eBCA?z>l7:1JJP1ClmqKnqJ!1-ye Ltm|');
define('NONCE_SALT',       '?SrE-q~E2Ql&JozC^OqicCLzfreh)} 2D/NDv+@umynXt8m c}jCMP3XsEK5]l0i');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ilmu_';

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

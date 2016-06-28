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
define('DB_NAME', 'psycap');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'denys');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'a1920212223');

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
define('AUTH_KEY',         'Rxl6tr_/.LL.z^Vh1Uj]v6Hx&4mi#O#q||<fIW:{>#!?or!Q~:241ueDSM(s:JX@');
define('SECURE_AUTH_KEY',  ':lyP05L7L%D&;iH)a!L_U^SvN^ZhPikY4UGF)R~}j!m;}a wOaEofFTR`9fR=lih');
define('LOGGED_IN_KEY',    'HuUbRvz*zI/u`;7+Q+K*vW>`S5%B(^_v=J_tgJ-uyc.y(f$=w^-@bJ0*b4Oyv3x`');
define('NONCE_KEY',        '~F%rPEM{Ge9,,5T={=yCouY[Y#JZem1`b5nRH(pAlB$=@JPB9<R.nShe7#xI-4X[');
define('AUTH_SALT',        '[f2n_RSQ!e9WmY}i|+~@*Z8&TP~j>8wJA@7[O$|junbg#kMuK>U)r~IbYks@);Y]');
define('SECURE_AUTH_SALT', 'Muq$E,#GpkBh}pR9};,8 -gob4GxOP_9b:]QH|kbNhZ[VB$r-m=>xKpF=bf5X8iN');
define('LOGGED_IN_SALT',   'xWu(?su&)x2mNjG.zb6XV-1jac~0[5eVED@)Y=Jgq2lWuls[<p8n@e)s~RI4T]{T');
define('NONCE_SALT',       'Y8c{u_/1!bsp:m@sa=79,j@Aa%Gk^h^lgmYHzvwU~cfep(tbL~ K.)ll<T@;w> f');

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'digitalimpactdbo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '{;sQDc$vh!](9I2Q6YO]gK}B.Sa2G?d2KSCNF ;bPq]dOlT;4LL}/izvCg9;1uel' );
define( 'SECURE_AUTH_KEY',  'Uay:de*}D~z`0r*Q?OF@kh/6J:P+4mX|$t&C~M)#q#Fpv,d$#4]>z7v*/;1g_,PR' );
define( 'LOGGED_IN_KEY',    'r15).uQ~Fxv8s;U98eDkaU4/F]VE;/-7ry0dL$ZEtn }qid6&C}sH`!xY*(q2;&a' );
define( 'NONCE_KEY',        'hE *gES+AuEY[7KD^}&^~vG=+*]G=T1V Qe&4`lsQ]p[EX.K^*5!28# S5Px=QF9' );
define( 'AUTH_SALT',        'jc7g(+-VW;wt9V|0-j,E.S|o63)[3J]a79mtiq5K7=jQ^Rw&PZ47ZgPoh*esuChc' );
define( 'SECURE_AUTH_SALT', 'A(^*(D`B/Aqf}ZdNjve#>QZxOx=Gld@@/o-Ee0M77plig3KfV@7An!y;N_A]TV&*' );
define( 'LOGGED_IN_SALT',   'xYneu8/#B!A^tIo]U5?k[72n4E6c7Mh,oHZjOc9 AoPr@P*@^K8umLcOTI_a</g5' );
define( 'NONCE_SALT',       'd&lYpWM}zoh7}]~tPo< kQ`m`K)W&chdbhcA ui&J.L(?6Oi?r>H)CG2wU6b)!>.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

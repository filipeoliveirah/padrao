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
define('DB_NAME', 'padrao');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Jmyv]DU4.XlnRZz|}gGW2pv@&j2 e7=h +R/wx<Rke69WJ@1!u<8H9~Q-.a3F*R7');
define('SECURE_AUTH_KEY',  'CTaH&sWF?U]oW1IZjVzxSk[nvfa0BbKTE3oFt-CSP+^GuFU!=h9*FUT`T`B?.NG>');
define('LOGGED_IN_KEY',    '2.|0WBWOkt&LT,Jx&<Coo-e?}BnIO2zNZ=iJk!u_9WcxBp1yWN4&M~p$Lx# 48{!');
define('NONCE_KEY',        ')o.I5TQy=)ap?[R$^R%dSQ&;TM*-!^-][%(*0W77){0wItv.81*{I>KEd]9|k04*');
define('AUTH_SALT',        't?U6CgI*H7gIu}0,i^^%1Q_X{D?IXm% 6{ru]Xy>[QVkm#W9NW@_lBzM,4XOfym4');
define('SECURE_AUTH_SALT', '#SK#rln!:>yO)ynI6k9>$~9_LlXl]o+&v_D^fEGXHe3-wu9BF<->%<:o=6urcCqQ');
define('LOGGED_IN_SALT',   'o2;r{Ar(U#g9o@v/BmJSBbV&A.2>0n@XGE#J:{{Y<<d @m5UVczA,y-}D#VC8FJu');
define('NONCE_SALT',       'C)8qDTCH$/po4G:9E_Jp_5:t^<f.wd(eZ6E]GAR/nw#LvPNA&Lx8vExl tHw8}#N');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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

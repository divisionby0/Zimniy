<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'Zimniy');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6I/:73j#q5JEe4#{beE6#dl1WuBfGKp9{IJAIYJTg_$Qn.Hc3k_X<Y0EAlPO1^&?');
define('SECURE_AUTH_KEY',  '6103:]1lwoUA9ogW(:.@?p`2ZjZr` AE7;!V;eI-1pcE22xRHsi8@;_kX!QL>K9;');
define('LOGGED_IN_KEY',    '[(GQ]2pYHjx^]MM@:oEZaqtvFd-0>r{|#:3Ac)kdA:xD0ML(CWxupVbJ4Fwf}o6j');
define('NONCE_KEY',        'E+LxR<8>Cya|Ae,lTxbou 9>xM $XaAiWd5ylyc :CN9u9tg-_l/go!V bB>syr+');
define('AUTH_SALT',        '<h j!bP#R_obhtU5{@99|X48#7>j,CmpN-OVPkbinCwvZ*X8]-r7b8kW>^[4L |K');
define('SECURE_AUTH_SALT', 'J @8x.`xiM q!gyG_]&Hd]N8(R^bwf3[};Nvywe?4we?`mdG{=rIA2N(]FQKX=*[');
define('LOGGED_IN_SALT',   ']=6pxoaVc]by@m9V^#<W(Qj(}Ma^4g$ )jvH9TxLbap.>7~B: Vzq^;Y)?B%Gl{0');
define('NONCE_SALT',       '$6=ZTsmS(R9vi$CYcu,L z;oUE`xyL?|*5qEC<n}~A1U{Vt$4<$HsqG`bz/mM[1r');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

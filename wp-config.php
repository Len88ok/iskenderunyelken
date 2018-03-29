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
define('DB_NAME', 'yelken');

/** Имя пользователя MySQL */
define('DB_USER', 'yelken');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'zUxmLIP8cQFNW1fF');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'a0`WSAdRadW@S|(HJE(f2X&&n2#/ktHR>as67nlktx!f(CS.>a(yK6YUnp}Ver,w');
define('SECURE_AUTH_KEY',  'iwv rJSmwv1jl`$*6 9u]Q5x}t-9b8z7&)!.yE/!!D;.l o<Wg?(V);=716bVks$');
define('LOGGED_IN_KEY',    'UXVjct] $aExF^X9LD@vSw*srjy,G?#A7 Ibr7tfsmY;E!1(]$K]_M(R;%eR!np9');
define('NONCE_KEY',        '2MqL%Y;Ry|}y3?dbD!9!9Nq[RF~8tX| B~j!?VJb)0xk#u] abcJDO+e4QNXc|a8');
define('AUTH_SALT',        'S]z[W0o[]SYPPO~.eEttd63B6,G/6HoxDz,%wPw2=/fL[l~O{0Ia3g}3Z&u[|<B`');
define('SECURE_AUTH_SALT', 'DhuM9( [/W)%.>1Lk]fXR:3xh+Nqj+t{s?xK<UJO^-e7<cD+r3N7fC7AMS-_&1Zp');
define('LOGGED_IN_SALT',   '$Rl[MD^/X5dao~,&:q/#oQ,B&Be+-1Z)a[tl5qMAEgq3V+*/,*kwSbqgls5g//Vh');
define('NONCE_SALT',       ' TpeUShh<12m8@p3ST8d5Jx2&0[o)p,3hAs<v(w+eqWYK3a m%Sv&|u`NgR4X%ZR');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

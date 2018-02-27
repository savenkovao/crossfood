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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/sata2/home/users/crossfood/www/www.crossfood.od.ua/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'crossfood_d9io4');

/** Имя пользователя MySQL */
define('DB_USER', 'crossfood_d9io4');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '4GjKEmidL');

/** Имя сервера MySQL */
define('DB_HOST', 'db19.freehost.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/* Первым делом защитимся от того, чтобы никто в открытых wifi сетях не смог подслушать ваш пароль при входе в админ панель wordpress. */
define('FORCE_SSL_ADMIN', true);


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hJHjfISxv2dkG56bv7zd');
define('SECURE_AUTH_KEY',  'BgReFCzQeZl51NywpUG0');
define('LOGGED_IN_KEY',    'vbxGOPMlFMT9nNahTReT');
define('NONCE_KEY',        '8JAV4IsjOZV5ARHSVFnn');
define('AUTH_SALT',        'kbBKtqEb64ZzcBmP5kWT');
define('SECURE_AUTH_SALT', 'LBOFL1wmVLuQYu2HytjA');
define('LOGGED_IN_SALT',   'koiuvshjTqFv1ZCe5Yae');
define('NONCE_SALT',       'zlKS32A4JmkZncFCbj1w');
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
define('WP_AUTO_UPDATE_CORE', true);
define('FS_METHOD', 'direct');
define('WP_MAX_MEMORY_LIMIT', '128M');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
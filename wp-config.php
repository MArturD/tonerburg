<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_tonerburg' );

/** Что-то там для тегов формы */
define( 'WPCF7_AUTOP', false );
/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GIH7HW.sVKf nru*-$/Y320%N1=Ea8e!Ss*/B5`K><XTpPlvSTBuwjbkG^xr;9he' );
define( 'SECURE_AUTH_KEY',  '2S*9dgnrpCJ_Id+qZDnc,cxxpcekOC#4l6j-?vki4l)~U^|OZ3mfSAeIdnQkyx/[' );
define( 'LOGGED_IN_KEY',    'GQ+yvz~q13k?PCi.w?a^?fo91WGx1*|Fjre4]w6S!CknLukl}yRc)+&si60REQ<2' );
define( 'NONCE_KEY',        'i*;:ZO9LyB)b;7=ZCX,r_}E2|[XA;8Th~lUCv2uwsTS5aPKir[rSP<!ptox,K8(1' );
define( 'AUTH_SALT',        'wx>N[6M2AC:B&X--Z~1#A@Md`WT0pL2k-BYDOSp&5CY.q}4<xHgEsmhQ^[{OO[W~' );
define( 'SECURE_AUTH_SALT', 'ftR!D+Ny{O=<n&<tBX7`KJmFe/SiMWEG-95m?hx`+Rega`Zrx$Rni^S*&u YK,o)' );
define( 'LOGGED_IN_SALT',   'E5lV~8Ly!0G<5b!W6,&,F~@cdh>TT?[?r&P0 &uDU,A<tW]YGndbP#&?Aqu1<!HB' );
define( 'NONCE_SALT',       'xc>lQn>5(XRPRiDgg?37,|vpk]%Rdjf!zKpn4a<57H9t?dB=>MI:*qs%u&I3]u-&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

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
 * * Настройки MySQL
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
define( 'DB_NAME', 'news_bd' );

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
define( 'AUTH_KEY',         'o6HoIpJ1fUki9=X<xV6Df[YQV_rGIzB|w}d</STL%]:cG)X<=_:>Hq[VjD[$u8rw' );
define( 'SECURE_AUTH_KEY',  'M_SS<IGUgc*O$#g!77[fCO0e?q9U)9Y|a E.H3G}<G0D{P+~.#Ms,q}fiI~WMI,a' );
define( 'LOGGED_IN_KEY',    '+/TKaPj;^1V}RQj_WP65+$e%>(VAOIXokAN,7:EDb8:$;3|m8UfPS:,bQZ/9&<`+' );
define( 'NONCE_KEY',        'Vf !oI_|]]MWp<;yWc97?ba(~RE@ !),Xi:Jf~B1[Cq1E[L`AJ^SrAM0![P6t2L]' );
define( 'AUTH_SALT',        '.~[+U([h*69w/,4Krzs-(D`Fs0ieJ>&9Pe0DxV)6_6% OX-bF7o4KXf]j74zt/Ss' );
define( 'SECURE_AUTH_SALT', 'ab_YW8^}ko6l#ExVG{]j( AY:Eb=!HU)fBMs]*yM(x2HyuV9e$(pv~1/ESlWpRY=' );
define( 'LOGGED_IN_SALT',   'M,oD!CB3E:,2 rkg3Th%! 2p5DhmI/I1L*=hi$8?7F;r#pMx5PZ|c;d,hzj`26YQ' );
define( 'NONCE_SALT',       '%V!Onj}V*L|D&g2O?]zl>n@FCd-DpA22ZuBYYC+5ZA(Fe~<uBq!F2]14/F@,zW{_' );

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

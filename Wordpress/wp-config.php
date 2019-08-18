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
define( 'DB_NAME', 'wp_regul' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9IbkC-1;Tmf.f!NY@ T*3d8apHZEIO1:dcyqVITy3[v+&@z#GHg}X!-]/q{v;9df' );
define( 'SECURE_AUTH_KEY',  'bLCk$HXSEN#19u/3fum%p2.DUi.u&hx,8fBD]3JRzXUx.l;R<b/oBP}7;Rwkd(xO' );
define( 'LOGGED_IN_KEY',    'E<!ZAAx7l1Q7?pK^B}ZDKumA8SyZ57O{UNKZ}B_<)FZv6LC/oinj5[vAs/:_8+A ' );
define( 'NONCE_KEY',        ')wTr<8y4h~NhT ociB_>.4yWO0fS56]XG3zf:[i.CEN^rqt>l&{Et0SZ2([GYE@m' );
define( 'AUTH_SALT',        ';eSVp`:[U=qb*CYyqk+7>w,bZMyjCy_SU_c.7!u0aVqMD5%XaWz>R5}TV!?ae<DG' );
define( 'SECURE_AUTH_SALT', 'AQn?q*D/7~<W_D!g5 ~SzScno=LzDt}>?|r Bii*P^ZQ.BZS3adaO^e)nW*8LQ>H' );
define( 'LOGGED_IN_SALT',   'Z&|S;E4YDM~aLC](:AeNa2[1}T 1]tbH7qP(={R~| e6!#2}{a&$k>+.Acd]$Qq&' );
define( 'NONCE_SALT',       'W[zPx~.0vc6:$Gmsg,(V=V^B0zwv<,72k?IO>^!r&y$lf]Ypi])(Q-nW6,M9{>S.' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

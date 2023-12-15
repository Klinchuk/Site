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
define( 'DB_NAME', 'myfirstbase' );

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
define( 'AUTH_KEY',         'doJGk5$awJTZ+LOx83~FY|HG,e1HyxKbCFmt6Bqg0|+j B0.t^a;!=+R]acML_pk' );
define( 'SECURE_AUTH_KEY',  'Ls?usqr2F{77#94PsogMxs?yc|uno`i)rW#Q0#!Cz.au1SxkN]1`[?D84I(N+w5y' );
define( 'LOGGED_IN_KEY',    '(Uf*I@Nm#iLf,/C:sqaxJ }6yhn;mFUH=baU$Mf~Ex$LiNR&7:8.JA1^]~|aW,F8' );
define( 'NONCE_KEY',        ']tgf]Ek>:^7e)O/<|#7x=;*$Uw^?I*{)zL%Ia>i2:`G_q+wU_:KBn)P4Z!nv0Y%#' );
define( 'AUTH_SALT',        'jZnvSgNoidJ&cjbfrMA9/$Q$QSI<?F_?=TQQre+L2Ib@#+J!.4W1g6f}>x{FRJY3' );
define( 'SECURE_AUTH_SALT', 'DQgsemjn^RiPctT)7bM}nO>tt~7AM1BN:y:>XM%^7F+cq|G!,RgEqF9s?p`-_!#p' );
define( 'LOGGED_IN_SALT',   'bZ_=jrviwoV%4zpcUa>~=;/c)cbD,x._i$XDWpTN{eN7%My!=in6H^W@P+NjgnqR' );
define( 'NONCE_SALT',       'IMO_LU(zTl@uZ }twxTvfwE&:*@oeQ]+Q,R)cQE#~U>#,~@M$essSk/Vhc3;~c<k' );

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

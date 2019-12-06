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
define( 'DB_NAME', '1' );

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
define( 'AUTH_KEY',         'oP:sPrt;bTx51Hy[Q0#~^aHX;4yl96* 2ibi}6X|SI?9z(AY7bJ;Ph$a:|xLs`^[' );
define( 'SECURE_AUTH_KEY',  'ig|q40q@x<m]&tXqJ^rV|0R3&,})T~a;(SFcdW(Vy6-nU<n[5sHw)XxbK`||I{I|' );
define( 'LOGGED_IN_KEY',    '62#7y%<CRjH(dm _Jta5R8N5W=X>x1$o&[EFQj#zwP{YzZ/D~W%{Hj uFaEcA^E~' );
define( 'NONCE_KEY',        '`.2S*^fNx4i{@3<~J&Pssn!Vyx7[ aZJGr`|H<fnz49||_&i(h|}jECu| V]<,Zk' );
define( 'AUTH_SALT',        '|Sl23beWeTFso@Xh}IEk^DD>O%!!3v{6EUZ=:g~J4F`m+y(!DtPfpFEAGoamWe|0' );
define( 'SECURE_AUTH_SALT', '7`XLS[Md<IXO,hP:(Kb4fw@bf5$0,YC7c@.Z),G~xD_[Q2b6@j&~%vlrMyHw8tp(' );
define( 'LOGGED_IN_SALT',   '=v[# ]#o$~<x.NQj!`/C$_Gtrv/P2+cJ2:J3DDbr/d<XDdg9,rbIH}6J#[G,N@;7' );
define( 'NONCE_SALT',       '(3s,ET0!6?9!t|Mh>YD;c8HU^W!^7%hHI7k;Sj+ds3kMryb444l2kJa)9[rdND</' );

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

//Изменить паку языковой локализации WP.
define('WPLANG', 'ru_RU');
define('LANGDIR', 'mylanguagedirectory'); //Если языковой файл загружен не в папку languages .


//Изменение очистки мусора сайта
//Вся удаляемая с сайта информация хранится на сайте в течении 30 дней (по умолчанию). Это время можно сократить или увеличить.
define('EMPTY_TRASH_DAYS', 30);  // 30 days

//Отключить хранение удаленных файлов
define('EMPTY_TRASH_DAYS', 0);  // Мусора нет нигде.

//При установке wordpress не в корневую папку, а предположим в папку "blog" или при создании сайта WP на локальном компьютере, редактированием файла confic.php можно указать новый локальный путь (не слеш) к каталогам  "wp-content" и "plugins".
 
//Можно переместить содержание WP__каталога, с вашими темами, плагинами, закачками, вне каталога приложения WordPress.Для этого нужно установить для  WP_CONTENT_DIR новый локальный путь (не слеш) к этому каталогу. Например,

define ( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content' );

//Можно установить для WP_CONTENT_URL путь (не слеш) в полном URI блога для этого каталога. Например:

define( 'WP_CONTENT_URL', 'http://example/blog/wp-content');

//Можно изменить путь к папке с плагинами и установить для WP_PLUGIN_DIR локальный путь к этому каталогу (не слеш). Например:

define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content/plugins’);

//При таком изменении пути к каталогу может возникнуть проблема с некоторыми плагинами.

//Редактирование config.php можно изменить интервал автосохранения WP

//При редактировании статей, WordPress использует Ajax для автоматического сохранения изменений статьи. Можно увеличить этот параметр, установив  более длительные задержки между авто-сохранениями. Также можно уменьшить промежуток автосохранения изменений. Если вы боитесь потерять свои изменения. По умолчанию значение автосохранения составляет 60 секунд.


define('AUTOSAVE_INTERVAL', 160);  // seconds

//Сохранение копий редактируемых записей
WordPress по умолчанию сохраняет все  копии при каждом редактировать статей и страниц. Это  позволяет при необходимости откатываться к предыдущим версиям статей и страний. Если этого не требуется, можно отключить сохранение копий или ограничить их число.

//Отключить сохранение отредактированных записей можно следующей строкой:

define('WP_POST_REVISIONS', false );

//Указать определенное число отредактированных записей можно так
define('WP_POST_REVISIONS', 3);

//Число сохраняемых ревизий указывается целым числом. Например, 3 или 5 или 7.

//Отладка системы Wordpress

//Опции WP_DEBUG  управляет отображением некоторых ошибок и предупреждений. Если этот параметр отсутствует в файле wp-config.php , то значение считается ложным. Чтобы опцию включить нужно добавить в код следующие строки:

define('WP_DEBUG', true);
define('WP_DEBUG', false);

//Для того чтобы Wordpress позволил вам изменять некоторые из встроенных в JavaScript, нужно позволить (true) WordPress следующие опции:

define('SCRIPT_DEBUG', true);

//Добавление этой строки в wp-config.php позволит  вам редактировать [wp-admin/js];[SCRIPTNAME];[dev.js файлы в wp-includes/js].

//Отключение Javascript конкатенация
//В Wordpress все Javascript файлы объединяются в один URL. Это делается для ускорения администрирования. Но если Javascript не может работать в Вашей hand-up области сайта (администрировании), вы можете попробовать отключить эту функцию (false):

define('CONCATENATE_SCRIPTS', false);


//Если вы получите сообщение  "разрешенный объем памяти байт исчерпаны хххххх", то значит, исчерпан лимит памяти выделенной для PHP .По умолчанию это 32 Мбайта (смотреть код вначале wp-setting.php).Это объем только для Wordpress,а не для приложений.
//Если ваш хостинг не возражает против увеличения памяти для PHP,то можно указать wordpress ,использовать больший объем памяти. Например:
//Увеличение PHP памяти до 64MB

define('WP_MEMORY_LIMIT', '64M');

//увеличение PHP памяти до 96MB

define('WP_MEMORY_LIMIT', '96M');
//Хочется отметить, что многие устанавливают лимит памяти для PHP в 8 мегабайт.
   

//При помощи опции 

 define('WP_ALLOW_REPAIR', true);
//Можно включить автоматическую оптимизацию баз данных WP.

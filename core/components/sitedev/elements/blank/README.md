#  Создания процессоров для управления записями

Чтобы создать структуру файлов в виде
```nginx
PHP
    core/components/{namespace}/processors/mgr/{item_key}/
        create.class.php
        update.class.php
        get.class.php
        remove.class.php
        getlist.class.php
        multiple.class.php
        disable.class.php
        enable.class.php

LEXICON
    core/components/{namespace}/lexicon/en/{item_keys}.inc.php
    core/components/{namespace}/lexicon/ru/{item_keys}.inc.php

JS
    assets/components/{namespace}/js/mgr/widgets/{item_keys}/
        grid.js
        windows.js
```

Используйте код

```php
include_once MODX_CORE_PATH . '/components/sitedev/elements/blank/build.php';
$namespace = 'Telegram';
$class_key = 'TelegramAction';
$item_key = 'Action';
$item_keys = 'Actions';
$lexicon_one = 'Действие';
$lexicon_many = 'Действия';
$Builder = new SiteDevBlankCoreBuild($modx, $namespace, $class_key, $item_key, $item_keys, $lexicon_one, $lexicon_many);
#$Builder->remove(); // удаление всех файлов ресурсов
$Builder->build();
```


Данная конструкция будет работать только с компонентами созданнми на основе SiteDev

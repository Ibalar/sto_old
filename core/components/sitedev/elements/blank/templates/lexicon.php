<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 10.08.2022
 * Time: 19:40
 */

class SiteDevBlankLexicon
{
    public function en()
    {
        return $this->ru();
    }

    public function ru()
    {
        $outer = <<<EOD
<?php
include_once 'setting.inc.php';

\$_lang['telegram_[[+item_key]]s'] = '[[+lexicon_many:ucfirst]]';
\$_lang['telegram_[[+item_key]]_id'] = 'Id';
\$_lang['telegram_[[+item_key]]_resource_id'] = 'Ресурс';
\$_lang['telegram_[[+item_key]]_name'] = 'Название';
\$_lang['telegram_[[+item_key]]_createdon'] = 'Дата создания';
\$_lang['telegram_[[+item_key]]_updatedon'] = 'Дата обновления';
\$_lang['telegram_[[+item_key]]_description'] = 'Описание';
\$_lang['telegram_[[+item_key]]_active'] = 'Активно';
\$_lang['telegram_[[+item_key]]_create'] = 'Создать [[+lexicon_one]]';
\$_lang['telegram_[[+item_key]]_update'] = 'Изменить [[+lexicon_one]]';
\$_lang['telegram_[[+item_key]]_enable'] = 'Включить [[+lexicon_one]]';
\$_lang['telegram_[[+item_key]]s_enable'] = 'Включить [[+lexicon_many]]';
\$_lang['telegram_[[+item_key]]_disable'] = 'Отключить [[+lexicon_one]]';
\$_lang['telegram_[[+item_key]]s_disable'] = 'Отключить [[+lexicon_many]]';
\$_lang['telegram_[[+item_key]]_remove'] = 'Удалить [[+lexicon_one]]';
\$_lang['telegram_[[+item_key]]s_remove'] = 'Удалить [[+lexicon_many]]';
\$_lang['telegram_[[+item_key]]_remove_confirm'] = 'Вы уверены, что хотите удалить этот [[+lexicon_one]]?';
\$_lang['telegram_[[+item_key]]s_remove_confirm'] = 'Вы уверены, что хотите удалить эти [[+lexicon_many]]?';
\$_lang['telegram_[[+item_key]]_active'] = 'Включено';
\$_lang['telegram_[[+item_key]]_err_name'] = 'Вы должны указать имя [[+lexicon_one]].';
\$_lang['telegram_[[+item_key]]_err_ae'] = '[[+lexicon_one]] с таким именем уже существует.';
\$_lang['telegram_[[+item_key]]_err_nf'] = '[[+lexicon_one]] не найден.';
\$_lang['TelegramB[[+item_key]]err_ns'] = 'Объект не обнаружен.';
\$_lang['telegram_[[+item_key]]_err_remove'] = 'Ошибка при удалении [[+lexicon_one]].';
\$_lang['telegram_[[+item_key]]_err_save'] = 'Ошибка при сохранении [[+lexicon_one]].';
EOD;
        return $outer;

    }

}



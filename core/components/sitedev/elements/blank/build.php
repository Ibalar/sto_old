<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 10.08.2022
 * Time: 19:40
 */

include_once 'templates/core.php';
include_once 'templates/asserts.php';
include_once 'templates/lexicon.php';

class SiteDevBlankCoreBuild
{
    public modX $modx;
    private string $coreProcessor;

    public function __construct(modX $modx, $namespace, $class_key, $item_key, $item_keys, $lexicon_one, $lexicon_many)
    {
        $this->modx = $modx;
        $this->namespace = mb_strtolower($namespace);
        $this->class_key = $class_key;
        $this->item_key = mb_strtolower($item_key);
        $this->item_keys = mb_strtolower($item_keys);
        $this->lexicon_one = mb_strtolower($lexicon_one);
        $this->lexicon_many = mb_strtolower($lexicon_many);


        $this->coreProcessor = MODX_CORE_PATH . "components/{$this->namespace}/processors/mgr/" . $this->item_key . '/';
        $this->assetsProcessor = MODX_ASSETS_PATH . "components/{$this->namespace}/js/mgr/widgets/" . $this->item_keys . '/';
        $this->lexicodPath = MODX_CORE_PATH . "components/{$this->namespace}/lexicon/";


    }

    public function createDirs()
    {
        $cache = $this->modx->getCacheManager();
        if (!file_exists($this->coreProcessor)) {
            $cache->writeTree($this->coreProcessor);
        }
        if (!file_exists($this->assetsProcessor)) {
            $cache->writeTree($this->assetsProcessor);
        }
    }


    public function build()
    {
        $this->createDirs();
        $this->saveLexiconFile();
        $this->saveAssertFile($this->templateAssert());
        $this->saveCoreFile($this->templateCore());
        return true;
    }

    public function remove()
    {
        $cache = $this->modx->getCacheManager();
        $cache->deleteTree($this->coreProcessor, ['deleteTop' => true, 'extensions' => []]);
        $cache->deleteTree($this->assetsProcessor, ['deleteTop' => true, 'extensions' => []]);
        $lexicon_ru = $this->lexicodPath . 'ru/' . $this->item_keys . '.inc.php';
        if (file_exists($lexicon_ru)) {
            unlink($lexicon_ru);
        }

        $lexicon_en = $this->lexicodPath . 'en/' . $this->item_keys . '.inc.php';
        if (file_exists($lexicon_en)) {
            unlink($lexicon_en);
        }
    }

    public function saveLexiconFile()
    {

        $SiteDevBlankLexicon = new SiteDevBlankLexicon();
        $arrays = [
            'en' => $this->chunk($SiteDevBlankLexicon->en()),
            'ru' => $this->chunk($SiteDevBlankLexicon->ru())
        ];

        foreach ($arrays as $lang => $content) {
            $filePath = $this->lexicodPath . $lang . '/' . $this->item_keys . '.inc.php';
            if (!file_exists($filePath)) {
                // Обязательно проверяем что файл существует
                $cache = $this->modx->getCacheManager();
                $cache->writeFile($filePath, $content, 'a');
            }
        }


    }

    public function saveAssertFile($arrays)
    {
        foreach ($arrays as $fileName => $content) {
            $filePath = $this->assetsProcessor . $fileName . '.js';

            if (!file_exists($filePath)) {
                // Обязательно проверяем что файл существует
                $cache = $this->modx->getCacheManager();
                $cache->writeFile($filePath, $content, 'a');
            }

        }
    }

    public function saveCoreFile($arrays)
    {
        foreach ($arrays as $action => $content) {
            $filePath = $this->coreProcessor . $action . '.class.php';
            if (!file_exists($filePath)) {
                // Обязательно проверяем что файл существует
                $cache = $this->modx->getCacheManager();
                $cache->writeFile($filePath, $content, 'a');
            }
        }
    }

    public function templateAssert()
    {
        $TemplateClassFile = new SiteDevBlankAssert();
        $actions = [
            'grid' => '',
            'windows' => '',
        ];
        foreach ($actions as $action => $i) {
            $template = $TemplateClassFile->{$action}();
            $actions[$action] = $this->chunk($template);
        }
        return $actions;
    }

    public function templateCore()
    {
        $TemplateClassFile = new SiteDevBlankCore();
        $actions = [
            'create',
            'update',
            'disable',
            'enable',
            'get',
            'getlist',
            'multiple',
            'remove',
        ];
        $arrays = [];
        foreach ($actions as $action) {
            $html = $TemplateClassFile->{$action}();
            $arrays[$action] = $this->chunk($html);

        }
        return $arrays;
    }


    public function chunk($content)
    {
        $pdoTools = $this->modx->getService('pdoTools');
        $data = [
            'namespace' => $this->namespace,
            'class_key' => $this->class_key,
            'item_key' => $this->item_key,
            'item_keys' => $this->item_keys,
            'lexicon_one' => $this->lexicon_one,
            'lexicon_many' => $this->lexicon_many,
        ];

        $data['name_actions'] = '$array[\'actions\']';
        $data['name_varable'] = '$array';
        return $pdoTools->getChunk('@INLINE ' . $content, $data);

    }
}



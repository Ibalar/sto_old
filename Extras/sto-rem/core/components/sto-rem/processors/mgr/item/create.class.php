<?php

class sto-remItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'sto-remItem';
    public $classKey = 'sto-remItem';
    public $languageTopics = ['sto-rem:manager'];
    //public $permission = 'create';

    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('sto-rem_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('sto-rem_item_err_ae'));
        }
        $this->setProperty('mode', 'new');
        return parent::beforeSet();
    }

}

return 'sto-remItemCreateProcessor';
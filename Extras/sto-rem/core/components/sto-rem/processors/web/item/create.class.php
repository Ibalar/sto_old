<?php

class sto-remOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'sto-remItem';
    public $classKey = 'sto-remItem';
    public $languageTopics = ['sto-rem'];
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

        return parent::beforeSet();
    }

}

return 'sto-remOfficeItemCreateProcessor';
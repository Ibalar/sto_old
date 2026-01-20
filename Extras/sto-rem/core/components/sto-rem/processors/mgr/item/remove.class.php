<?php
class sto-remItemRemoveProcessor extends modObjectRemoveProcessor
{
    public $objectType = 'sto-remItem';
    public $classKey = 'sto-remItem';
    public $languageTopics = ['sto-rem:manager'];
    #public $permission = 'remove';

    /**
     * @return bool|null|string
     */
    public function initialize()
    {
        if (!$this->modx->hasPermission($this->permission)) {
            return $this->modx->lexicon('access_denied');
        }
        return parent::initialize();
    }
}

return 'sto-remItemRemoveProcessor';
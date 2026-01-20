<?php

class sto-remOfficeItemRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'sto-remItem';
    public $classKey = 'sto-remItem';
    public $languageTopics = ['sto-rem'];
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('sto-rem_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var sto-remItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('sto-rem_item_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'sto-remOfficeItemRemoveProcessor';
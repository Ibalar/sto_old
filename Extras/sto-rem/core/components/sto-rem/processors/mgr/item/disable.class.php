<?php
include_once dirname(__FILE__) . '/update.class.php';
class sto-remItemDisableProcessor extends sto-remItemUpdateProcessor
{
    public function beforeSet()
    {
        $this->setProperty('active', false);
        return true;
    }
}
return 'sto-remItemDisableProcessor';

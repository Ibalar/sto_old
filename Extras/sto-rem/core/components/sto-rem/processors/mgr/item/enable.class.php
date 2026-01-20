<?php
include_once dirname(__FILE__) . '/update.class.php';
class sto-remItemEnableProcessor extends sto-remItemUpdateProcessor
{
    public function beforeSet()
    {
        $this->setProperty('active', true);
        return true;
    }
}
return 'sto-remItemEnableProcessor';
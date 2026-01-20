<?php
/** @var modX $modx */
/* @var array $scriptProperties */
switch ($modx->event->name) {
    case 'OnHandleRequest':
        /* @var sto-rem $sto-rem*/
        $sto-rem = $modx->getService('sto-rem', 'sto-rem', $modx->getOption('sto-rem_core_path', $scriptProperties, $modx->getOption('core_path') . 'components/sto-rem/') . 'model/');
        if ($sto-rem instanceof sto-rem) {
            $sto-rem->loadHandlerEvent($modx->event, $scriptProperties);
        }
        break;
}
return '';
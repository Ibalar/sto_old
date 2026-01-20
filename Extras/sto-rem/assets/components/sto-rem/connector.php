<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var sto-rem $sto-rem */
$sto-rem = $modx->getService('sto-rem', 'sto-rem', MODX_CORE_PATH . 'components/sto-rem/model/');
$modx->lexicon->load('sto-rem:default');

// handle request
$corePath = $modx->getOption('sto-rem_core_path', null, $modx->getOption('core_path') . 'components/sto-rem/');
$path = $modx->getOption('processorsPath', $sto-rem->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);
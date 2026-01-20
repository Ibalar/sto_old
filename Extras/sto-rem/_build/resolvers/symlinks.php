<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/sto-rem/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/sto-rem')) {
            $cache->deleteTree(
                $dev . 'assets/components/sto-rem/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/sto-rem/', $dev . 'assets/components/sto-rem');
        }
        if (!is_link($dev . 'core/components/sto-rem')) {
            $cache->deleteTree(
                $dev . 'core/components/sto-rem/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/sto-rem/', $dev . 'core/components/sto-rem');
        }
    }
}

return true;
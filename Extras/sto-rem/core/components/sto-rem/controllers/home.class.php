<?php

/**
 * The home manager controller for sto-rem.
 *
 */
class sto-remHomeManagerController extends modExtraManagerController
{
    /** @var sto-rem $sto-rem */
    public $sto-rem;


    /**
     *
     */
    public function initialize()
    {
        $this->sto-rem = $this->modx->getService('sto-rem', 'sto-rem', MODX_CORE_PATH . 'components/sto-rem/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['sto-rem:manager', 'sto-rem:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('sto-rem');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->sto-rem->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/sto-rem.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/misc/default.grid.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/misc/default.window.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/widgets/items/grid.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/widgets/items/windows.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->sto-rem->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addJavascript(MODX_MANAGER_URL . 'assets/modext/util/datetime.js');

        $this->sto-rem->config['date_format'] = $this->modx->getOption('sto-rem_date_format', null, '%d.%m.%y <span class="gray">%H:%M</span>');
        $this->sto-rem->config['help_buttons'] = ($buttons = $this->getButtons()) ? $buttons : '';

        $this->addHtml('<script type="text/javascript">
        sto-rem.config = ' . json_encode($this->sto-rem->config) . ';
        sto-rem.config.connector_url = "' . $this->sto-rem->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "sto-rem-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .=  '<div id="sto-rem-panel-home-div"></div>';
        return '';
    }

    /**
     * @return string
     */
    public function getButtons()
    {
        $buttons = null;
        $name = 'sto-rem';
        $path = "Extras/{$name}/_build/build.php";
        if (file_exists(MODX_BASE_PATH . $path)) {
            $site_url = $this->modx->getOption('site_url').$path;
            $buttons[] = [
                'url' => $site_url,
                'text' => $this->modx->lexicon('sto-rem_button_install'),
            ];
            $buttons[] = [
                'url' => $site_url.'?download=1&encryption_disabled=1',
                'text' => $this->modx->lexicon('sto-rem_button_download'),
            ];
            $buttons[] = [
                'url' => $site_url.'?download=1',
                'text' => $this->modx->lexicon('sto-rem_button_download_encryption'),
            ];
        }
        return $buttons;
    }
}
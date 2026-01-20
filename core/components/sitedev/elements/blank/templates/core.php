<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 10.08.2022
 * Time: 19:40
 */

class SiteDevBlankCore
{

    public function getClassName($action)
    {
        $action = ucfirst($action);
        return "[[+namespace:ucfirst]][[+item_key:ucfirst]]{$action}Processor";
    }

    public function action($action)
    {

        return $this->{$action}();

    }

    public function create()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php

class $nameClassAction extends modObjectCreateProcessor
{
    public \$objectType = '[[+class_key]]';
    public \$classKey = '[[+class_key]]';
    public \$languageTopics = ['[[+namespace]]:manager','[[+namespace]]:[[+item_keys]]'];

    /**
     * @return bool
     */
    public function beforeSet()
    {
        \$name = trim(\$this->getProperty('name'));
        if (empty(\$name)) {
            \$this->modx->error->addField('name', \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_err_name'));
        } elseif (\$this->modx->getCount(\$this->classKey, ['name' => \$name])) {
            \$this->modx->error->addField('name', \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_err_ae'));
        }
        \$this->setProperty('mode', 'new');
        return parent::beforeSet();
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }

    public function update()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php

class $nameClassAction extends modObjectUpdateProcessor
{
    public \$objectType = '[[+class_key]]';
    public \$classKey = '[[+class_key]]';
    public \$languageTopics = ['[[+namespace]]:manager','[[+namespace]]:[[+item_keys]]'];

    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return bool|string
     */
    public function beforeSave()
    {
        if (!\$this->checkPermissions()) {
            return \$this->modx->lexicon('access_denied');
        }

        return true;
    }


    /**
     * @return bool
     */
    public function beforeSet()
    {
        \$id = (int)\$this->getProperty('id');
        \$name = trim(\$this->getProperty('name'));
        if (empty(\$id)) {
            return \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_err_ns');
        }

        if (empty(\$name)) {
            \$this->modx->error->addField('name', \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_err_name'));
        } elseif (\$this->modx->getCount(\$this->classKey, ['name' => \$name, 'id:!=' => \$id])) {
            \$this->modx->error->addField('name', \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_err_ae'));
        }

        return parent::beforeSet();
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }

    public function disable()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
include_once dirname(__FILE__) . '/update.class.php';
class $nameClassAction extends [[+namespace:ucfirst]][[+item_key:ucfirst]]UpdateProcessor
{
    public function beforeSet()
    {
        \$this->setProperty('active', false);
        return true;
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }

    public function enable()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
include_once dirname(__FILE__) . '/update.class.php';
class $nameClassAction extends [[+namespace:ucfirst]][[+item_key:ucfirst]]UpdateProcessor
{
    public function beforeSet()
    {
        \$this->setProperty('active', true);
        return true;
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }

    public function get()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
class $nameClassAction extends modObjectGetProcessor
{
    public \$objectType = '[[+class_key]]';
    public \$classKey = '[[+class_key]]';
    public \$languageTopics = ['[[+namespace]]:manager','[[+namespace]]:[[+item_keys]]'];
    
    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!\$this->checkPermissions()) {
            return \$this->failure(\$this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }
}

return '$nameClassAction';
EOD;
        return $outer;

    }


    public function multiple()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
class $nameClassAction extends modProcessor
{
   /**
     * @return array|string
     */
    public function process()
    {
        if (!\$method = \$this->getProperty('method', false)) {
            return \$this->failure();
        }
        \$ids = json_decode(\$this->getProperty('ids'), true);
        if (empty(\$ids)) {
            return \$this->success();
        }

        /** @var [[+namespace:ucfirst]] \$Service */
        \$Service = \$this->modx->getService('[[+namespace:ucfirst]]');
        foreach (\$ids as \$id) {
            /** @var modProcessorResponse \$response */
            \$response = \$Service->runProcessor('mgr/[[+item_key]]/' . \$method, array('id' => \$id), array(
                'processors_path' => MODX_CORE_PATH . 'components/[[+namespace]]/processors/'
            ));
            if (\$response->isError()) {
                return \$response->getResponse();
            }
        }

        return \$this->success();
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }

    public function remove()
    {
        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
class $nameClassAction extends modObjectRemoveProcessor
{
    public \$objectType = '[[+class_key]]';
    public \$classKey = '[[+class_key]]';
    public \$languageTopics = ['[[+namespace]]:manager','[[+namespace]]:[[+item_keys]]'];
    
     /**
     * @return bool|null|string
     */
    public function initialize()
    {
        if (!\$this->modx->hasPermission(\$this->permission)) {
            return \$this->modx->lexicon('access_denied');
        }
        return parent::initialize();
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }


    public function getlist()
    {


        $nameClassAction = $this->getClassName(__FUNCTION__);
        $outer = <<<EOD
<?php
class $nameClassAction extends modObjectGetListProcessor
{
    public \$objectType = '[[+class_key]]';
    public \$classKey = '[[+class_key]]';
    public \$languageTopics = ['[[+namespace]]:manager','[[+namespace]]:[[+item_keys]]'];
  
    public \$defaultSortField = 'id';
    public \$defaultSortDirection = 'DESC';

    /**
     * We do a special check of permissions
     * because our objects is not an instances of modAccessibleObject
     *
     * @return boolean|string
     */
    public function beforeQuery()
    {
        if (!\$this->checkPermissions()) {
            return \$this->modx->lexicon('access_denied');
        }
        return true;
    }


    /**
     * @param xPDOQuery \$c
     *
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery \$c)
    {
        \$query = trim(\$this->getProperty('query'));
        if (\$query) {
            \$c->where([
                'name:LIKE' => "%{\$query}%",
                'OR:description:LIKE' => "%{\$query}%",
            ]);
        }
        \$active = \$this->getProperty('active');
        if (\$active != '') {
            \$c->where("{\$this->objectType}.active={\$active}");
        }
        \$resource = trim(\$this->getProperty('resource'));
        if (!empty(\$resource)) {
            \$c->where("{\$this->objectType}.resource_id={\$resource}");
        }
        return \$c;
    }


    /**
     * @param xPDOObject \$object
     *
     * @return array
     */
    public function prepareRow(xPDOObject \$object)
    {
       
        \$array = \$object->toArray();

       [[+name_actions]] = [];

        // Edit
       [[+name_actions]][] = [
            'cls' => '',
            'icon' => 'icon icon-edit',
            'title' => \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_update'),
            'action' => 'updateItem',
            'button' => true,
            'menu' => true,
        ];

        if (![[+name_varable]]['active']) {
            [[+name_actions]][] = [
                'cls' => '',
                'icon' => 'icon icon-power-off action-green',
                'title' => \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_enable'),
                'multiple' => \$this->modx->lexicon('[[+namespace]]_[[+item_keys]]_enable'),
                'action' => 'enableItem',
                'button' => true,
                'menu' => true,
            ];
        } else {
            [[+name_actions]][] = [
                'cls' => '',
                'icon' => 'icon icon-power-off action-gray',
                'title' => \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_disable'),
                'multiple' => \$this->modx->lexicon('[[+namespace]]_[[+item_keys]]_disable'),
                'action' => 'disableItem',
                'button' => true,
                'menu' => true,
            ];
        }

        // Remove
        [[+name_actions]][] = [
            'cls' => '',
            'icon' => 'icon icon-trash-o action-red',
            'title' => \$this->modx->lexicon('[[+namespace]]_[[+item_key]]_remove'),
            'multiple' => \$this->modx->lexicon('[[+namespace]]_[[+item_keys]]_remove'),
            'action' => 'removeItem',
            'button' => true,
            'menu' => true,
        ];
        return \$array;
    }

}

return '$nameClassAction';
EOD;
        return $outer;

    }
}



<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 10.08.2022
 * Time: 19:40
 */

class SiteDevBlankAssert
{



    public function windows()
    {
        $outer = <<<EOD
[[+namespace:ucfirst]].window.Create[[+item_key:ucfirst]] = function (config) {
    config = config || {}
    config.url = [[+namespace:ucfirst]].config.connector_url

    Ext.applyIf(config, {
        title: _('[[+namespace]]_[[+item_key]]_create'),
        width: 600,
        cls: '[[+namespace]]_windows',
        baseParams: {
            action: 'mgr/[[+item_key]]/create',
            resource_id: config.resource_id
        }
    })
    [[+namespace:ucfirst]].window.Create[[+item_key:ucfirst]].superclass.constructor.call(this, config)

    this.on('success', function (data) {
        if (data.a.result.object) {
            // Авто запуск при создании новой подписик
            if (data.a.result.object.mode) {
                if (data.a.result.object.mode === 'new') {
                    var grid = Ext.getCmp('[[+namespace]]-grid-[[+item_keys]]')
                    grid.updateItem(grid, '', {data: data.a.result.object})
                }
            }
        }
    }, this)
}
Ext.extend([[+namespace:ucfirst]].window.Create[[+item_key:ucfirst]], [[+namespace:ucfirst]].window.Default, {

    getFields: function (config) {
        return [
            {xtype: 'hidden', name: 'id', id: config.id + '-id'},
            {
                xtype: 'textfield',
                fieldLabel: _('[[+namespace]]_[[+item_key]]_name'),
                name: 'name',
                id: config.id + '-name',
                anchor: '99%',
                allowBlank: false,
            }, {
                xtype: 'textarea',
                fieldLabel: _('[[+namespace]]_[[+item_key]]_description'),
                name: 'description',
                id: config.id + '-description',
                height: 150,
                anchor: '99%'
            },  {
                xtype: '[[+namespace]]-combo-filter-resource',
                fieldLabel: _('[[+namespace]]_[[+item_key]]_resource_id'),
                name: 'resource_id',
                id: config.id + '-resource_id',
                height: 150,
                anchor: '99%'
            }, {
                xtype: 'xcheckbox',
                boxLabel: _('[[+namespace]]_[[+item_key]]_active'),
                name: 'active',
                id: config.id + '-active',
                checked: true,
            }
        ]


    }
})
Ext.reg('[[+namespace]]-[[+item_key]]-window-create', [[+namespace:ucfirst]].window.Create[[+item_key:ucfirst]])

[[+namespace:ucfirst]].window.Update[[+item_key:ucfirst]] = function (config) {
    config = config || {}

    Ext.applyIf(config, {
        title: _('[[+namespace]]_[[+item_key]]_update'),
        baseParams: {
            action: 'mgr/[[+item_key]]/update',
            resource_id: config.resource_id
        },
    })
    [[+namespace:ucfirst]].window.Update[[+item_key:ucfirst]].superclass.constructor.call(this, config)
}
Ext.extend([[+namespace:ucfirst]].window.Update[[+item_key:ucfirst]], [[+namespace:ucfirst]].window.Create[[+item_key:ucfirst]])
Ext.reg('[[+namespace]]-[[+item_key]]-window-update', [[+namespace:ucfirst]].window.Update[[+item_key:ucfirst]])

EOD;
        return $outer;
    }

    public function grid()
    {
        $outer = <<<EOD
[[+namespace:ucfirst]].grid.[[+item_keys:ucfirst]] = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = '[[+namespace]]-grid-[[+item_keys]]';
    }
    
    if (!config.multiple) {
        config.multiple = '[[+item_key]]'
    }
    
    Ext.applyIf(config, {
        baseParams: {
            action: 'mgr/[[+item_key]]/getlist',
            sort: 'id',
            dir: 'DESC'
        },
        stateful: true,
        stateId: config.id,
        viewConfig: {
            forceFit: true,
            enableRowBody: true,
            autoFill: true,
            showPreview: true,
            scrollOffset: 0,
            getRowClass: function (rec) {
                return !rec.data.active
                  ? '[[+namespace]]-grid-row-disabled'
                  : '';
            }
        },
        paging: true,
        remoteSort: true,
        autoHeight: true,
    });
    [[+namespace:ucfirst]].grid.[[+item_keys:ucfirst]].superclass.constructor.call(this, config);
};
Ext.extend([[+namespace:ucfirst]].grid.[[+item_keys:ucfirst]], [[+namespace:ucfirst]].grid.Default, {

    getFields: function () {
        return [
            'id', 'name', 'description', 'active', 'actions'
        ];
    },

    getColumns: function () {
        return [
            {header: _('[[+namespace]]_[[+item_key]]_id'), dataIndex: 'id', width: 20, sortable: true},
            {header: _('[[+namespace]]_[[+item_key]]_name'), dataIndex: 'name', sortable: true, width: 200},
            {header: _('[[+namespace]]_[[+item_key]]_description'), dataIndex: 'description', sortable: false, width: 250},
            {header: _('[[+namespace]]_[[+item_key]]_createdon'), dataIndex: 'createdon', width: 75, renderer: [[+namespace:ucfirst]].utils.formatDate},
            {header: _('[[+namespace]]_[[+item_key]]_updatedon'), dataIndex: 'updatedon', width: 75, renderer: [[+namespace:ucfirst]].utils.formatDate},
            {header: _('[[+namespace]]_[[+item_key]]_active'), dataIndex: 'active', width: 75, renderer: [[+namespace:ucfirst]].utils.renderBoolean},
            {
                header: _('[[+namespace]]_grid_actions'),
                dataIndex: 'actions',
                id: 'actions',
                width: 50,
                renderer: [[+namespace:ucfirst]].utils.renderActions
            }
        ];
    },

    getTopBar: function () {
        return [{
            text: '<i class="icon icon-plus"></i>&nbsp;' + _('[[+namespace]]_[[+item_key]]_create'),
            handler: this.createItem,
            scope: this
        },{
            xtype: '[[+namespace]]-combo-filter-active',
            name: 'active',
            width: 210,
            custm: true,
            clear: true,
            addall: true,
            value: '',
            listeners: {
                select: {
                    fn: this._filterByCombo,
                    scope: this
                },
                afterrender: {
                    fn: this._filterByCombo,
                    scope: this
                }
            }
        },{
            xtype: '[[+namespace]]-combo-filter-resource',
            name: 'resource',
            width: 210,
            custm: true,
            clear: true,
            addall: true,
            value: '',
            listeners: {
                select: {
                    fn: this._filterByCombo,
                    scope: this
                },
                afterrender: {
                    fn: this._filterByCombo,
                    scope: this
                }
            }
        },
            '->', this.getSearchField()];
    },

    getListeners: function () {
        return {
            rowDblClick: function (grid, rowIndex, e) {
                var row = grid.store.getAt(rowIndex);
                this.updateItem(grid, e, row);
            },
        };
    },

    createItem: function (btn, e) {
        var w = MODx.load({
            xtype: '[[+namespace]]-[[+item_key]]-window-create',
            id: Ext.id(),
            listeners: {
                success: {
                    fn: function () {
                        this.refresh();
                    }, scope: this
                }
            }
        });
        w.reset();
        w.setValues({active: true});
        w.show(e.target);
    },

    updateItem: function (btn, e, row) {
        if (typeof(row) != 'undefined') {
            this.menu.record = row.data;
        }
        else if (!this.menu.record) {
            return false;
        }
        var id = this.menu.record.id;

        MODx.Ajax.request({
            url: this.config.url,
            params: {
                action: 'mgr/[[+item_key]]/get',
                id: id
            },
            listeners: {
                success: {
                    fn: function (r) {
                        var w = MODx.load({
                            xtype: '[[+namespace]]-[[+item_key]]-window-update',
                            id: Ext.id(),
                            record: r,
                            listeners: {
                                success: {
                                    fn: function () {
                                        this.refresh();
                                    }, scope: this
                                }
                            }
                        });
                        w.reset();
                        w.setValues(r.object);
                        w.show(e.target);
                    }, scope: this
                }
            }
        });
    },

    removeItem: function () {
        this.action('remove')
    },
    disableItem: function () {
        this.action('disable')
    },
    enableItem: function () {
        this.action('enable')
    },
});
Ext.reg('[[+namespace]]-grid-[[+item_keys]]', [[+namespace:ucfirst]].grid.[[+item_keys:ucfirst]]);

EOD;
        return $outer;

    }
}



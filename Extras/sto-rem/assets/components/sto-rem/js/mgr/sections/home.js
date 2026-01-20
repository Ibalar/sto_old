sto-rem.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'sto-rem-panel-home',
            renderTo: 'sto-rem-panel-home-div'
        }]
    });
    sto-rem.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(sto-rem.page.Home, MODx.Component);
Ext.reg('sto-rem-page-home', sto-rem.page.Home);
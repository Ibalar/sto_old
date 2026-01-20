var sto-rem = function (config) {
    config = config || {};
    sto-rem.superclass.constructor.call(this, config);
};
Ext.extend(sto-rem, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}, buttons: {}
});
Ext.reg('sto-rem', sto-rem);

sto-rem = new sto-rem();
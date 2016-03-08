// Global Namespace
var JMD = JMD || {};

// JMD Components
JMD.accordions = require('./components/accordions.js');
JMD.alerts = require('./components/alerts.js');
JMD.piNav = require('./components/pi-nav.js');
JMD.popovers = require('./components/popovers.js');
JMD.cardOverlay = require('./components/cards.js');
JMD.hcpForm = require('./components/hcp-form.js');
JMD.isiTray = require('./components/isi-tray.js');
JMD.loader = require('./components/loader.js');
JMD.modal = require('./components/modal.js');
JMD.productListings = require('./components/product-listings.js');
JMD.productMatrix = require('./components/product-matrix.js');
JMD.scrollToTop = require('./components/scroll-to-top.js');
JMD.search = require('./components/search.js');
JMD.smoothScroll = require('./components/smooth-scroll.js');
JMD.tableChartContainer = require('./components/table-chart-container.js');

// Loop through the namespace and check if the object has an init method
Object.keys(JMD).forEach(function(key, index) {
    if(JMD[key].hasOwnProperty('init')){
        JMD[key].init();
    };
});

// exposing to global
if (!window.JMD) {
    window.JMD = JMD;
}

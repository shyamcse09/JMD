var smoothScroll = require('./smooth-scroll.js');

var productListings = (function() {

    var $primaryAction = $('[data-target="tab-action"]'),
        $secondaryAction = $('[data-target="tab-secondary-action"]'),
        navIdentifier = '.jmd-product-listing-nav a[href*=#]:not([href=#])';

    var focusOn = function() {
        var $thisSecondaryAction = $(this).next();
        var $thisTab = $(this).closest('[data-target="product-tab"]');
        $thisSecondaryAction.addClass('jmd-is-active');
        $thisTab.addClass('jmd-is-active');
    };

    var focusOff = function() {
        var $thisSecondaryAction = $(this);
        var $thisTab = $(this).closest('[data-target="product-tab"]');
        $thisSecondaryAction.removeClass('jmd-is-active');
        $thisSecondaryAction.removeClass('jmd-is-active');
        $thisTab.removeClass('jmd-is-active');
    };

    var bindEvents = function() {
        $primaryAction.on('focus', focusOn);
        $secondaryAction.on('focus', focusOn);
        $primaryAction.on('focusout', focusOff);
        $secondaryAction.on('focusout', focusOff);
        smoothScroll.scroll(navIdentifier);
    };

    return {
        init: function () {
            bindEvents();
        }
    };
})();

module.exports = productListings;

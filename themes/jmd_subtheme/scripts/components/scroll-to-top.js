var smoothScroll = require('./smooth-scroll.js');

var scrollToTop = (function() {
    var $header = $('[data-component=header]'),
        $trayPlaceholder = $('[data-target=isi-tray-placeholder]'),
        $scrollTrigger = $('[data-component=scroll-to-top]'),
        $trayPlaceholder = $('[data-target="isi-tray-placeholder"]'),
        scrollIdentifier = '[data-component="scroll-to-top"]';

    var affix = function() {
        var headerHeight = $header.height(),
            windowHeight = $(window).height(),
            topOfWindow = $(window).scrollTop();

        if(topOfWindow > headerHeight) {
            $scrollTrigger.addClass('jmd-is-active');
        } else if(topOfWindow === 0) {
            $scrollTrigger.removeClass('jmd-is-active');
        }
    };

    function debounce(fn, delay) {
        var timer = null;
        return function() {
            var context = this,
                args = arguments;

            clearTimeout(timer);
            timer = setTimeout(function() {
                fn.apply(context, args);
            }, delay);
        };
    };

    var bindEvents = function() {
        $(window).on('scroll.jmd-totop', debounce(function(event) {
            affix();
        }, 10));
        smoothScroll.scroll(scrollIdentifier);
    };

    return {
    // Exposed Functions
        init: function () {
            // Checking for the existence of accordion before init
           if(!$scrollTrigger.length) {
                return;
           }
           bindEvents();
        }
    };
})();

module.exports = scrollToTop;

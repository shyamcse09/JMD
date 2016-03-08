var smoothScroll = require('./smooth-scroll.js');

var isiTray = (function(){
    // Private variables
    var $trigger = $('[data-trigger="isi-tray"]'),
        $tray = $('[data-target="isi-tray"]'),
        $trayBody = $('[data-target="isi-tray-body"]'),
        $trayPlaceholder = $('[data-target="isi-tray-placeholder"]'),
        // Scroll to top trigger that interacts with ISI tray
        $scrollTrigger = $('[data-component=scroll-to-top]'),
        maskTemplate = '<div class="jmd-mask jmd-mask--transparent" data-toggle="isi-tray-mask"></div>',
        scrollIdentifier = '[data-component="scroll-to-isi"]',
        $body = $('body');

    var toggleState = function() {
        $trigger.toggleClass('jmd-is-active');
        $tray.toggleClass('jmd-is-open');
    };

    var openTray = function() {
        var altText = $trigger.attr('data-trigger-alt-text');
        toggleState();
        $trigger.data('original-text', $trigger.text());
        $trigger.text(altText);
        $body.addClass('jmd-no-scroll isi-tray-active');
        // Append transparent mask
        $body.append(maskTemplate);
        // Hide scroll to top bar when ISI tray opens
        $scrollTrigger.addClass('jmd-is-hidden');
    };

    var closeTray = function() {
        toggleState();
        $trigger.text($trigger.data('original-text'));
        $body.removeClass('jmd-no-scroll isi-tray-active');
        // Remove transparent mask
        $('[data-toggle="isi-tray-mask"]').remove();
        // Show scroll to top bar when ISI tray closes
        $scrollTrigger.removeClass('jmd-is-hidden');
    };

    // Affix/Release tray
    var affixTray = function() {

        var affixTriggerHeight = $trayPlaceholder.offset().top,
            windowHeight = $(window).height(),
            topOfWindow = $(window).scrollTop();

        if (topOfWindow > affixTriggerHeight - 700){
            $tray.addClass('jmd-is-open');
            $tray.removeClass('jmd-is-fixed');
            $trayBody.removeClass('jmd-has-overflow');
            $trigger.addClass('jmd-is-hidden');
            $scrollTrigger.addClass('jmd-is-bottom');
        } else {
            $tray.removeClass('jmd-is-open');
            $tray.addClass('jmd-is-fixed');
            $trayBody.addClass('jmd-has-overflow');
            $trigger.removeClass('jmd-is-hidden');
            $scrollTrigger.removeClass('jmd-is-bottom');
        };
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

        $(window).scroll(debounce(function(event) {
            affixTray();
        }, 10));
        // Use transparent mask as event handler to close tray
        $body.on('click', '[data-toggle="isi-tray-mask"]', closeTray);
        $trigger.on('click', function() {
            if ($trigger.hasClass('jmd-is-active')) {
                closeTray();
            } else {
                openTray();
            };
        });

        smoothScroll.scroll(scrollIdentifier);
    };

    // Exposed
    return {
        init: function () {
            // checking for the existence of the tray before init
            if($trayPlaceholder.length > 0) {
                bindEvents();
            }
        }
    };
})();

module.exports = isiTray;

var piNav = (function () {
    // Private variables
    var focusableSelector = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]',
        $drawer = $('[data-pi-nav]'),
        $triggerOpen = $('[data-toggle="open-pi-nav"]'),
        $triggerClose = $('[data-toggle="close-pi-nav"]'),
        $drawerFocusable = $drawer.find(focusableSelector),
        $drawerFirstItem = $drawerFocusable.eq(1),
        $drawerLastItem = $drawerFocusable.last(),
        maskTemplate = '<div class="jmd-mask" data-toggle="mask"></div>',
        $body = $('body');

    var keys = {
        "up": 38,
        "down": 40,
        "esc": 27
    };

    var focusCapture = function (elem) {
        var elm = $(elem);
        focusableEl = elm.find(focusableSelector);

        var topCapture = focusableEl.eq(0),
            bottomCapture = focusableEl.eq(focusableEl.length - 1);

        topCapture.off('focus').on('focus', function () {
            focusableEl.eq(focusableEl.length - 2).focus();
        });

        bottomCapture.off('focus').on('focus', function () {
            focusableEl.eq(1).focus();
        });
    };


    var keyboardControl = function (event) {
        var $target = $(event.target);
        switch (event.which) {
        case keys.up:
            $target
                .parent()
                .prev()
                .find('a')
                .focus();
            break;
        case keys.down:
            $target
                .parent()
                .next()
                .find('a')
                .focus();
            break;
        case keys.esc:
            closeDrawer();
            break;
        default:
            break;
        }
    }

    var openDrawer = function () {
        $drawer.toggleClass('jmd-is-open');
        $body.toggleClass('jmd-overflow-hidden');
        $body.append(maskTemplate);
        // focusCapture($drawer);
        $drawerFirstItem.focus();
    };

    var closeDrawer = function () {
        $drawer.toggleClass('jmd-is-open');
        $body.toggleClass('jmd-overflow-hidden');
        $('[data-toggle="mask"]').remove();
    };

    var bindEvents = function () {
        $triggerOpen.on('click', openDrawer);
        $triggerClose.on('click', closeDrawer);
        $body.on('click', '[data-toggle="mask"]', closeDrawer);
        $drawer.on('keydown', keyboardControl);
    };

    return {
        init: function () {
            // checking for the existence of drawer before init
            if (!$drawer.length) {
                return;
            }
            bindEvents();
        }
    };
})();

module.exports = piNav;

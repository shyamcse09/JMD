var popovers = (function () {
    // Private variables
    var $popover = $('[data-component=popover]'),
        $popoverClose = $('[data-role=popover-close]'),
        $popoverOpen = $('[data-role=popover-open]'),
        $body = $('body');

    // State
    var classes = {
        active: "jmd-is-active"
    };

    // Check popover state
    var togglePopover = function (target) {
        var popOverClass = '.jmd-popover--' + target.data('popover');
        var $thisPopover = $(popOverClass);

        if ($thisPopover.hasClass(classes.active)) {
            hidePopover($thisPopover);
        } else {
            showPopover($thisPopover);
        };
    };

    var hidePopover = function (target) {
        target.removeClass(classes.active);
    };

    var showPopover = function (target) {
        target.addClass(classes.active);
    };

    // Close popover with close button
    var closePopover = function (target) {
        target.removeClass(classes.active);
    };

    var bindEvents = function () {
        $(document).on('click', '[data-role=popover-open]', function (event) {
            var $target = $(event.target);

            if ($target.is($popoverOpen)) {
                togglePopover($target);
            }
        });

        $(document).on('click', '[data-role=popover-close]', function (event) {
            var $target = $(event.target).parents('.jmd-popover');
            closePopover($target);
        });
    };

    return {
        // Exposed Functions
        init: function () {
            // Checking for the existence of popover before init
            if (!$popover.length) {
                return;
            }
            bindEvents();
        }
    };
})();

module.exports = popovers;

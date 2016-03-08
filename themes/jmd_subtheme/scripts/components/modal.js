//var loader = require('./loader');
//var ajax = require('./ajax');

var modals = (function () {
    // Private Variables
    var focusableSelector = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]',
        // Store last focused element
        lastFocused,
        $body = $('body'),
        $modal = $('[data-component=modal]'),
        $modalInner = $('[data-role="modal-inner"]'),
        $openTrigger = $('[data-role=modal-open]'),
        $scrollTrigger = $('[data-role=scroll-to-form]'),
        $mask = $('<div class="jmd-mask" data-component="mask"></div>'),
        $closeTrigger = $('[data-role=modal-close]');

    // State
    var classes = {
    	active: "jmd-modal-is-active",
        animated: "jmd-modal-animated",
        noScroll: "jmd-no-scroll"
    };

    // Keys
    var keys = {
        "esc": 27
    };

    // var requestContent = function(event) {
    //     // Request modal's placeholder JSON
    //     ajax.request("http://beta.json-generator.com/api/json/get/EkY8lpxYx", {
    //         completeCallback: function(response) {
    //         var data = JSON.parse(response.responseText);
    //         var title = data.title,
    //         body = data.body;
    //         $modal.find('.jmd-modal-title').append(title);
    //         $modal.find('[data-role=modal-viewport]').append(body);
    //         showModal();
    //         }
    //     });
    // };

    var showModal = function(event) {
        var $thisTrigger = $(this),
            id = '#' + 'modal-' + $thisTrigger.data('modal-id'),
            $thisModal = $(id);

        $(id).addClass(classes.active);
        $(id).addClass(classes.animated);
        $body.append($mask);
        $body.addClass(classes.noScroll);
        focusCapture($thisModal);
    };

    var hideModal = function () {
        $modal.removeClass(classes.active);
        $mask.remove();
        $body.removeClass(classes.noScroll);
    };

    var focusCapture = function (elem) {
        var elm = $(elem);
            focusableEl = elm.find(focusableSelector);

        var topCapture = focusableEl.eq(0),
            bottomCapture = focusableEl.eq(focusableEl.length - 1);

        focusableEl.eq(1).focus();

        topCapture.off('focus').on('focus', function () {
            focusableEl.eq(focusableEl.length - 2).focus();
        });

        bottomCapture.off('focus').on('focus', function () {
            focusableEl.eq(1).focus();
        });
    };

    // Close Modal with esc key
    var keyboardControl = function(event) {
        if (event.which === keys.esc) {
            hideModal();
        };
    };

    var scrollToForm = function() {
        $modalInner.animate({
            scrollTop: $('[data-component=hcp-form]').position().top
        });
    };

    var bindEvents = function () {
        $openTrigger.on('click', showModal);
        $closeTrigger.on('click', hideModal);
        $modal.on('keydown', keyboardControl);
        $scrollTrigger.on('click', scrollToForm);
        $body.on('click', '[data-component="mask"]', hideModal);
    };

    return {
        init: function () {
            // checking for the existence of modal trigger before init
            if(!$openTrigger.length) {
                 return;
            }
            bindEvents();
        }
    };
})();

module.exports = modals;

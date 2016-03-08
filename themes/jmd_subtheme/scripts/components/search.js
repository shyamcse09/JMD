var search = (function() {

    var $searchInput = $('[data-input="search"]'),
        placeholderText = $searchInput.attr('placeholder'),
        $error = $('[data-role="search-error"]'),
        $triggerErrorDestroy = $('[data-role="search-error-close"]'),
        $triggerErrorConfirm = $('[data-role="search-error-confirm"]'),
        $form = $('[data-role="search-component"]');

    var hidePlaceholder = function() {
        $searchInput.val('');
        $searchInput.removeClass('jmd-input-placeholder');
    };

    var showPlaceholder = function() {
        $searchInput.val(placeholderText);
        $searchInput.addClass('jmd-input-placeholder');
    };

    var addPlaceholder = function() {
        // Show placeholder on load
        showPlaceholder();
        $searchInput.on('focus', hidePlaceholder);
        $searchInput.on('blur', showPlaceholder);
    };

    var hasText = function() {
        var $input = $form.find('input[type="text"]'),
            placeholderValue = $input.attr("placeholder"),
            inputValue = $input.val().trim();

        return inputValue && placeholderValue !== inputValue;
    };

    var showError = function() {
        $error.addClass('jmd-is-active');
    };

    var hideError = function() {
        $error.removeClass('jmd-is-active');
    };

    var bindEvents = function() {
        $form.on('submit', function() {
            // if input is empty, prevent form submission and show error
           if (!hasText()) {
               event.preventDefault();
               showError();
           }
        });
        $triggerErrorDestroy.on('click', hideError);
        $triggerErrorConfirm.on('click', hideError);
    };

    return {
        // Exposed Functions
        init: function() {
            bindEvents();

            // Check if placeholders are supported
            if (!Modernizr.input.placeholder) {
                addPlaceholder();
            }
        }
    };
})();

module.exports = search;

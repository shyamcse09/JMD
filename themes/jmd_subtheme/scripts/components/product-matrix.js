var productMatrix = (function() {

    var $toggle = $('[data-toggle="product-matrix"]');

    var toggleMatrix = function(e) {
        e.preventDefault();
        $toggle.removeClass('jmd-is-active');
        $(this).addClass('jmd-is-active');
    };

    var bindEvents = function() {
        $toggle.on('click', toggleMatrix);
    };

    return {
        // Exposed Functions
        init: function() {
            bindEvents();
        }
    };
})();

module.exports = productMatrix;

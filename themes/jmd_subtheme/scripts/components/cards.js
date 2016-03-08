var cardOverlay= (function(){
	// Private variables
    alert(100);
    var $card = $('[data-component=card]'),
        $cardClose = $('[data-role=card-close]'),
        $cardOpen = $('[data-role=card-open]'),
        $overlay = $('[data-role=card-overlay]');

    var findOverlay = function(event) {
        
        var $target = $(event.target),
            thisoverlay = $target.closest($card).find($overlay);
        if(thisoverlay.hasClass('jmd-card-overlay-is-active')) {
            animateClose(thisoverlay);
        } else {
            animateOpen(thisoverlay);
        };
    };

    var animateOpen = function(overlay) {
        var $thisCloseButton = overlay.find($cardClose);
        overlay.addClass('jmd-card-overlay-is-active');
        overlay.attr('aria-hidden', 'false');
        $thisCloseButton.focus();
    };

    var animateClose = function(overlay) {
        overlay.removeClass('jmd-card-overlay-is-active');
        overlay.attr('aria-hidden', 'true');
    };

    var bindEvents = function() {
        $cardOpen.on('click', findOverlay);
        $cardClose.on('click', findOverlay);
    };

    return {
        // Exposed Functions
        init: function () {
            // Checking for the existence of card component before init
           if(!$card.length) {
                return;
           }
           bindEvents();
        }
    };
})();

module.exports = cardOverlay;

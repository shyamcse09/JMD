var alerts = (function(){

    var $trigger = $('[data-toggle="alert"]'),
        $alert = $('[data-target="alert"]');

    var closeAlert = function() {
        var $thisAlert = $(this).closest($alert);
        $thisAlert.fadeOut('slow');
    };

    var bindEvents = function() {
        $trigger.on('click', closeAlert);
    };

    return {
    // Exposed Functions
        init: function () {
            // Checking for the existence of alert before init
           if(!$alert.length) {
                return;
           }
           bindEvents();
        }
    };
})();

module.exports = alerts;

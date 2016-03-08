var _ = require('lodash');
var loader = require('./loader');

var currentCall;
var ajax = (function() {
    // public request method
    function request(url, overrideOptions) {
        var options = overrideOptions || {},
            defaults = {
            // accepts: null,
            // async: null,
            beforeSend: function () {
                loader.openLoader();
            },
            // cache: null,
            complete: function (response) {
                // close loader
                loader.closeLoader();

                if (typeof options.completeCallback === 'function') {
                    options.completeCallback(response);
                }
            },

            type: 'POST',
            url: url
        };

        options = _.merge(options, defaults);

        currentCall = $.ajax(options);
	};

    return {
        request: request,
        currentCall: currentCall
    }
})();

module.exports = ajax;

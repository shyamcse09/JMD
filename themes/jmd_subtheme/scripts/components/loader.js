var loader = (function(){
    var $body = $('body'),
        loaderTemplate = '<div class="jmd-loader" data-role="loader"><img src="assets/images/loader.gif"></img></div>',
        $mask = $('<div class="jmd-mask" data-component="mask"></div>');

    var openLoader = function() {
        $body.append($mask);
        $body.append(loaderTemplate);
    };

    var closeLoader = function() {
        $('[data-role=loader]').remove();
        $mask.remove();
    };

    return {
    // Exposed Functions
        openLoader: openLoader,
        closeLoader: closeLoader
    };
})();

module.exports = loader;

(function($) {
    //view source toggle
    $('[data-markup-reveal]').on('click', function(e) {
        e.preventDefault();
        var item = $(this).data('markup-reveal');
        var source = $('[data-markup-source="' + item + '"]').html().trim();
        var $target = $('[data-markup-target="' + item + '"]');
            //if markup is not visible
        if (!$target.find('pre').is(':visible')) {
            //add html to element
            $target.find('code').text(source);
            //highlight element
            var elem = $target.find('code').get(0);
            Prism.highlightElement(elem, true);
        }
        //toggle markup element
        $target.delay(100).slideToggle();
    });



    // Disable Scroll to Top on Patterns Page
    var $scrollTop = $('[data-component=scroll-to-top]')
    if ($scrollTop.parent('[data-markup-source]').length > 0) {
        $(window).off('scroll.jmd-totop');
        $scrollTop.css({
            'display': 'block',
            'position': 'static'
        });
    }

    // Reveal scroll to form button on patterns page
    // $('.jmd-modal-scroll').css('display', 'block');

    // Bind loader launch
    $('[data-bind=open-loader]').on('click', function(){
        JMD.loader.openLoader();
        setTimeout(function() {
            JMD.loader.closeLoader();
        }, 4000);
    });
})(jQuery);
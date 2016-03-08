var accordions = (function() {

    var $document = $(document),
        container = '[data-role="accordion-body"]',
        panel = '[data-component="accordion"]',
        $accordion = $('[data-component=accordion]'),
        indicator = '[data-role="accordion-indicator"]';

    var trigger = function(event) {
        event.preventDefault();
        var $trigger = $(event.currentTarget),
            $panel = $trigger.closest(panel),
            // Combine sibling and inner panels
            $siblingPanel = $panel.siblings(),
            $thisContainer = $panel.children(container),
            $innerPanel = $panel.find(panel),
            otherPanels = $siblingPanel.add($innerPanel),
            otherContainers = otherPanels.children(container),
            $thisIndicator = $trigger.find(indicator);

        if($panel.hasClass('jmd-is-active')) {
            hide($panel, $thisContainer, $thisIndicator);
        } else {
            // Close all open panels
            hideAll(otherPanels, otherContainers, $thisIndicator);
            show($panel, $thisContainer, $thisIndicator);
        };
    };

    var show = function(accordion, container, indicator) {
        // Store alt text
        var altText = indicator.attr('data-accordion-indicator-alt-text');
        // Toggle alt text showing state
        indicator.data('original-text', indicator.text());
        indicator.text(altText);

        // Animate accordion
        accordion.addClass('jmd-is-active');
        container.stop(true, true).slideDown(350);
        accordion.find('[data-role="accordion-trigger"]').attr('aria-expanded', 'true');
        accordion.find('[data-role="accordion-body"]').attr('aria-hidden', 'false');
    };

    var hide = function(accordion, container, indicator) {
        // Toggle alt text showing state
        indicator.text(indicator.data('original-text'));

        // Animate accordion
        accordion.removeClass('jmd-is-active');
        container.stop(true, true).slideUp(350);
        accordion.find('[data-role="accordion-trigger"]').attr('aria-expanded', 'false');
        accordion.find('[data-role="accordion-body"]').attr('aria-hidden', 'true');
    };

    var hideAll = function(accordion, container, indicator) {
        accordion.removeClass('jmd-is-active');
        container.hide();
        accordion.find('[data-role="accordion-indicator"]').text(indicator.data('original-text'));
        accordion.find('[data-role="accordion-trigger"]').attr('aria-expanded', 'false');
        accordion.find('[data-role="accordion-body"]').attr('aria-hidden', 'true');
    };

    var bindEvents = function() {
        $document.on('click', '[data-role="accordion-trigger"]', trigger);
    };

    return {
    // Exposed Functions
        init: function () {
            // Checking for the existence of accordion before init
           if(!$accordion.length) {
                return;
           }
           bindEvents();
        }
    };
})();

module.exports = accordions;

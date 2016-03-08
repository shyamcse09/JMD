var tableChartContainer = (function(){
    var $tab = $('[data-role=table-chart-container-tab]');

    var tabbed = function() {
        var $thistabContainer = $(this).parent();
            $otherTabContainers = $thistabContainer.siblings();
        $thistabContainer.attr("aria-selected","true");
        $otherTabContainers.attr("aria-selected","false");
    };

    var bindEvents = function() {
        $tab.on('click', tabbed);
    };

    return {
    // Exposed Functions
        init: function () {
            // Checking for the existence of container tabs before init
           if(!$tab.length) {
                return;
           }
           bindEvents();
        }
    };
})();

module.exports = tableChartContainer;

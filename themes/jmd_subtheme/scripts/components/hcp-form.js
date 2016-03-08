var hcpForm = (function(){

    var $form = $('[data-component=hcp-form] input'),
        $requiredFields = $form.filter('[required]'),
        hasInputValues = false,
        $formSubmit = $('[data-component=hcp-form]').find('[type=submit]');
        checked = 0;

    var validateForm = function() {
        checked = 0;
        for (var i = 0; i < $requiredFields.length; i++) {

            if ($requiredFields.eq(i).val() !== '' || $requiredFields.eq(i)[0].checked) {
                checked++
            }
        }
        if (checked === $requiredFields.length) {
            return true;
        } else {
            return false;
        }
    };

    var bindEvents = function() {
        $requiredFields.on("change", function(){
            isValid = validateForm();
            if (isValid) {
                $formSubmit.attr('disabled', false);
            } else {
                $formSubmit.attr('disabled', true);
            }
        });
    };

    return {
    // Exposed Functions
        init: function () {
            if($form.length > 0) {
                bindEvents();
            }
        }
    };
})();

module.exports = hcpForm;

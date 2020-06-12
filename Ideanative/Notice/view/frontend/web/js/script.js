require([
    'jquery',
    'mage/cookies'
], function(jQuery){
    (function(jQuery) {

            jQuery('.notice-wrapper').show();
            jQuery('#close-notice').click(function() {
                jQuery('.notice-wrapper').hide();
                jQuery.cookie('show_notice', false, { expires : 365 });
            });
        /* if (jQuery(window).width() < 1024 && jQuery.cookie('show_notice') === null) { }
        */
    })(jQuery);
});
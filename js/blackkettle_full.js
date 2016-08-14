/// <reference path="../../../../wp-includes/js/jquery/jquery.js" />

//CHANGES to this this file > CHANGE the version in the enqueue AND the register
jQuery(document).ready(function (i) {
    QueenOfTheWorkaround = {
        Creator: 'Ramona Eid',
        Supporter: 'Tara Dunn'
    }

    //jQuery(function() {
    jQuery("#tabs").tabs();
    //});

    // Customizer is Incompatible with jQuery UI Tabs.
    //https://core.trac.wordpress.org/ticket/23225 (punted from 4.6 to Future Release)
    //https://www.tjvantoll.com/2013/02/17/using-jquery-ui-tabs-with-the-base-tag/ (use #3)
    var makeTabs = function (selector) {
        jQuery(selector)
            .find("ul a").each(function() {
                var href = jQuery(this).attr("href"),
                    newHref = window.location.protocol + "//" + window.location.hostname +
                        window.location.pathname + href;

                if (href.indexOf("#") == 0) {
                    jQuery(this).attr("href", newHref);
                }
            });
        jQuery(selector).tabs();
    };

    makeTabs("#tabs");


});

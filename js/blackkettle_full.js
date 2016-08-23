/// <reference path="../../../../wp-includes/js/jquery/jquery.js" />

//CHANGES to this this file > CHANGE the version in the enqueue AND the register
jQuery(document).ready(function (i) {
    QueenOfTheWorkaround = {
        Creator: 'Ramona Eid',
        Supporter: 'Tara Dunn'
    }


    // ================================================================================
    // Begin Code
    // ================================================================================
    // Customizer is Incompatible with jQuery UI Tabs.
    //https://core.trac.wordpress.org/ticket/23225 (punted from 4.6 to Future Release)
    //https://bugs.jqueryui.com/ticket/8637
    jQuery.fn.__tabs = jQuery.fn.tabs;
    jQuery.fn.tabs = function (a, b, c, d, e, f) {
        var base = window.location.href.replace(/#.*jQuery/, '');
        jQuery('ul>li>a[href^="#"]', this).each(function () {
            var href = jQuery(this).attr('href');
            jQuery(this).attr('href', base + href);
        });
        jQuery(this).__tabs(a, b, c, d, e, f);
    };
    jQuery("#tabs").tabs();
    // ================================================================================
    // End Code
    // ================================================================================


    // Highlight the first Item every page - Secondary Navigation Menu
    if (window.location.pathname != '/') {
        jQuery('ul.secondary-menu li:first-of-type').addClass('current-menu-item');
    }

    // From Tom Usborne 08/21/2016 7:16 PM
    var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());
    var instance = jQuery('.generate-page-header-video').data('vide');
    if (isWindowsPhone) {
        instance.destroy();
    }

});

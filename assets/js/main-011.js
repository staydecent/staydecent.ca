/*! main-011.js: Staydecent.ca website enhancements. (c) Adrian Unger. Public Domain. */
jQuery(document).ready(function($) {

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Animated Scroll to Menu                                                *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    var menu_selector = window.location.hash;
    if (menu_selector) {
        $("html,body").animate({scrollTop:$(document).height()}, 800);
    }

    $('#menu-anchor').click(function(e){
        $("html,body").animate({scrollTop:$(document).height()}, 800);
        e.preventDefault();
    });
    

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Trigger Scale Animations                                               *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $(window).bind('scroll load', function(event) 
    {
        var fold = $(window).height() + $(window).scrollTop();

        $('.scale').each(function(i) 
        {
            var e = $(this);

            if (fold >= e.offset().top + 100) 
            {
                window.setTimeout(function() {
                    e.addClass('animate');
                }, i*100);
            }
        });

        $('.invisible').each(function(i) 
        {
            var e = $(this);

            if (fold >= e.offset().top + 100) 
            {
                window.setTimeout(function() {
                    e.css({
                        visibility:'visible'
                    });
                }, i*300);
            }
        });
    });

});
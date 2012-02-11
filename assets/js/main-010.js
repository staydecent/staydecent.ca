/*! main-010.js: Staydecent.ca website enhancements. (c) Adrian Unger. Public Domain. */
jQuery(document).ready(function($) {

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Responsive Media / Content                                             *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $(window).bind('load resize', function() 
    {
        if ($.browser.webkit) 
        {
            var width = document.body.clientWidth;
        }
        else 
        {
            var width = window.innerWidth;
        }

        if (width >= 540) 
        {
            // .column in use, add .last (method for IE support)
            $('.column:last-child').addClass('last');
            // replace w/ hi-res image
            replaceData('img', 'data-replace');
        }
        else 
        {
            // revert
            replaceData('img', 'data-original');
        }
    });

    // replace img src's
    var replaceData = function(selector, attr) 
    {
        $(selector + '[' + attr + ']').each(function() 
        {
            var e = $(this),
                d = $(this).attr(attr);

            if (!e.attr('data-original')) 
            {
                // if we haven't saved the src
                e.attr('data-original', $(this).attr('src'));
            }

            if (d !== e.attr('src')) 
            {
                // only update if diff
                e.attr('src', d);
            }
        });
    }

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

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Hover effects and such                                                 *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    var thumb_index = 0;
    $('.thumb').hover(
        function() 
        {
            thumb_index = $(this).css('z-index');
            $(this).css('z-index', '11');
        },
        function()
        {
            $(this).css('z-index', thumb_index);
        }
    );
});

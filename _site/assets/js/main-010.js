/*! main-010.js: Staydecent.ca website enhancements. (c) Adrian Unger. Public Domain. */
jQuery(document).ready(function($) {

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Responsive Media / Content                                             *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    var do_position = false;

    $(window).bind('load resize', function() {
        if ($.browser.webkit) {
            var width = document.body.clientWidth;
        }
        else {
            var width = window.innerWidth;
        }

        if (width >= 540) {
            // .column in use, add .last (method for IE support)
            $('.column:last-child').addClass('last');
            // replace w/ hi-res image
            replaceData('img', 'data-replace');

            if (!do_position) {
                position_frames();
                do_position = true;
            }
        }
        else {
            // revert
            replaceData('img', 'data-original');

            if (do_position) do_position = false;
        }
    });

    // replace img src's
    var replaceData = function(selector, attr) {
        $(selector + '[' + attr + ']').each(function() {
            var e = $(this),
                d = $(this).attr(attr);

            if (!e.attr('data-original')) {
                // if we haven't saved the src
                e.attr('data-original', $(this).attr('src'));
            }

            if (d !== e.attr('src')) {
                // only update if diff
                e.attr('src', d);
            }
        });
    }

    // position media
    var position_frames = function() {
        $('.entry').find('.browser_frame').each(function(i) {
            var e = $(this);

            // position text below frames
            e.parent('.media').css({
                'float': 'none',
                'height': e.height()*1.5,
                'z-index': '12'
            });
            // position the frames w/ variance
            e.css({
                'float': 'left',
                'margin-left': -i*100 + '%',
                'margin-top': i*10 + '%',
                'z-index': 10-i
            });
        });
    }

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Trigger Scale Animations                                               *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $(window).bind('scroll load', function(event) {
        var fold = $(window).height() + $(window).scrollTop();

        $('.entry').find('.scale').each(function(i) {
            var e = $(this);

            if (fold >= e.offset().top + 100) {
                window.setTimeout(function() {
                    e.addClass('animate');
                }, i*100);
            }
        });
    });

});


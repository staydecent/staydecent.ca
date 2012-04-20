/*! main-011.js: Staydecent.ca website enhancements. (c) Adrian Unger. Public Domain. */
jQuery(document).ready(function($) {
    

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Image Captions                                                         *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $('img[title]').each(function(i,e) {
        console.log(i,e);

        var title = $(e).attr('title');
        $(e).after('<div class="caption">'+title+'</div>');
        $(e).next('.caption').fadeIn(500);
    });

});

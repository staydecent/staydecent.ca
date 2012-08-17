/*! main-012.js: Staydecent.ca website enhancements. (c) Adrian Unger. Public Domain. */
Zepto(function($) {
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Image Captions                                                         *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $('img[title]').each(function(i,e) {
        var title = $(e).attr('title')
        $(e).after('<div class="caption">'+title+'</div>')
        $(e).next('.caption').show()
    })
})
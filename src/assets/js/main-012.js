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
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Logo/title treatments                                                  *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    // $("#site-title").css('opacity', '0').lettering('words')
    // setTimeout(function() { $('#site-title').fitText(0.35).animate({'opacity':'.6'}, 200) }, 100)
})
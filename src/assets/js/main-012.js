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
    * Randomly recolour page title                                           *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    var titleCharLength = $('#site-title > span').length
    var colourClasses = ['blue','green','orange','yellow']
    $('article > header > h1').lettering().find('span').each(function(i,e) {
        var colourIndex = Math.floor(Math.random()*4)
        $(e).addClass(colourClasses[colourIndex])
    })
})
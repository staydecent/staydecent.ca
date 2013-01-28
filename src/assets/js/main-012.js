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
    // var titleCharLength = $('#site-title > span').length
    var colourClasses = ['blue','green','red','yellow']
    // $('article > header > h1').lettering('words').find('span').each(function(i,e) {
    //     var colourIndex = Math.floor(Math.random()*3)
    //     $(e).addClass(colourClasses[colourIndex])
    // })
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Fit Text!                                                              *
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    $("article header h1").fitText(0.9, { maxFontSize: '24px' });
    $(".big").fitText(1, { maxFontSize: '36px' });
})
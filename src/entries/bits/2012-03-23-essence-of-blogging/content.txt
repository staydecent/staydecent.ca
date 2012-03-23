title: The Essence of Blogging
---

<p class="big">Inspired by Dustin Curtis' <a href="http://svbtle.com/">Svbtle</a> and the subsequent open-source project <a href="https://github.com/NateW/obtvse">Obtvse</a>, I took a shot at simplifying the blogging interface.</p>

Actually, even before Dustin [unveiled](http://dcurt.is/codename-svbtle) the interface for Svbtle, the concept had inspired me&mdash;with the three words *essence of blogging* I began to think about what that meant to me. I took it to mean two types of posts, those which are ones purely written word, and those that are commentary on some link. The main difference being that the latter would have its' title link to the external source.

So, I started dreaming up an interface that began with a single text field.

## A demo of sorts

To catch the wave of this [fiasco](http://news.ycombinator.com/item?id=3744237), I tested out that interface concept today. So, the demo is limited to only the writing interface, though it can save the post data to *localStorage*.

View the demo <a href="http://test.staydecent.webfactional.com/Gumblog/" target="_blank">here</a>.

### Some notes:

- I've only tested it on Chrome.
- Try pressing 'tab' or 'enter' ;)
- Try pasting a URL
- 'DRAFT' and 'PUBLIC' do nothing
- type `clearPost()` in console to clear localStorage data

## A bit of an explanation

Like I said, the goal is to accommodate two types of posts, purely written word, and *link posts*. The type of post is determined based on what you enter in the initial field (which is actually the title field). If a URL, we'll fetch the title from that page, and populate the title field with it (moving the URL to the link field). If the initial field is just text, we wait until you press *enter* or *tab* and generate a *local* permalink for the post.

In both cases, once the initial field is dealt with, we move the focus to the body field.

## A note about the name

You may notice that the Demo comes with the title *Gumblog*. It will eventually be working blog software, made purely to allow me to experiment with PHP 5.4, [PJAX](http://pjax.heroku.com/) and this interface concept. You can view the base framework, Gum, [here](https://github.com/staydecent/Gum).

I would love to hear your thoughts about this interface concept. Feel free to reach out via email or Twitter.





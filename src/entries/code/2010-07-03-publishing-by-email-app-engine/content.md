title: Publishing By Email With Google App Engine
---

I really like the Posterous approach to publishing online—I often write my ideas down in GMail. So I decided to enable posting by email on my blog.

The concept needs some work, but could very easily be adapted to a
multi-user environment. In that case, some serious security work would be
required. But for my personal blog, it should suffice.

### How It Works

Google App Engine has amazing Email handling built in. Just check the
[docs](http://code.google.com/appengine/docs/python/mail/). Because of this,
not much code is required. Anyway, here's what I've accomplished:

 1. Write posts in email
 2. Process those emails for *YAML Front Matter*
 3. Continue using Markdown

Pretty basic. I haven't got into checking attachments, but I don't think it
would be too much more work. As for the [YAML Front Matter](http://wiki.github.com/mojombo/jekyll/yaml-front-matter), a concept taken from [Jekyll](http://jekyllrb.com/), I follow [Rasmus
Andersson's](http://hunch.se/) formatting exactly as it [appears](http://github.com/rsms/gitblog/blob/master/docs/content.md) in [Gitblog](http://github.com/rsms/gitblog)

### How I Did It

I just read through those [docs](
http://code.google.com/appengine/docs/python/mail/) I mentioned above and
wrote an Email Handler. My blog has a very simple Entry handler, so saving
new entries is pretty easy.

<script src="http://gist.github.com/462907.js?file=email.py"></script>

If you have any questions or input, message me on [Twitter](
http://twitter.com Staydecent on Twitter).

---
category: articles
layout: article
---

<p class="big">The implementation and advocacy of responsive web
design is increasing, and possibly fully manifested in the web design
community. Are you taking part?</p>

### What Is Responsive Design?

Responsive web design, basically means your website responds to
different screen sizes. So, people browsing your site on a Smartphone,
Tablet, Netbook or Desktop all get a usable (and hopefully similar,
but not exact) experience.

#### Types of Responses

There are two main ways to respond to various screen sizes and
devices, with: *responsive designs* or *adaptive designs*. Responsive
design usually means a fluid grid, using percentages. See: [Stephen
Caver's Portfolio](http://stephencaver.com/) and [Maykel Loomans'
Blog](http://www.miekd.com/). And, adaptive design usually means you
have fixed grid, that adapts (changes) depending on the screen size.
See: [Mr. Simon Collison](http://colly.com/) and  [Authentic
Jobs](http://www.authenticjobs.com/). You could also use a combination
of both, sort of like my Blog that you’re reading now.

### Media Queries

CSS3 media queries, quite literally, let you query different media
types, `screen`, `print` and `handheld` as well as other helpful
properties such as `min-width`, `max-width`, `orientation` and others.
**Media queries easily let you define your CSS for any screen size by
querying the `min-width` and `max-width`.** So, all you really need to
know are the common screen widths. According to [Bryan
Rieger](https://twitter.com/#!/bryanrieger/status/75597655870406656)
the “major breakpoints are 0-320, 320-720, 720+ with minor
breakpoints dependent on content and key devices (ie: 360, 480, 768,
etc).”

#### What Does This Mean?

In the below snippet, I have included the exact media queries that I
use, as well as a few (one, for now) examples from popular CSS
frameworks and authors.
<script src="https://gist.github.com/1021805.js?file=media_queries.css"></script>

So, if you’re like me and usually develop a new grid for each
website you design (which, I highly recommend) those media queries are
really helpful in adjusting your design for specific devices and
screen widths. And, if you like using boilerplates/frameworks and
often design a 960px grid, [Skeleton](http://getskeleton.com) is
great.

### But How Should I Adjust My Design For Each Query

Obviously, you can’t just continuously shrink your column
widths—eventually you’d have content trying to fit into
20px columns! So, commonly, you'll end up dropping the number of
columns. If you’re full-width design has 6 blocks floating
together, you might have to drop that for each query: 4 blocks a row;
3 blocks a row; 2 blocks a row; everything in a single column.

### That’s It!

Really. Responsive web design is not much work. I would say, for the
bare minimum, design your full width site, Ipad width of 768px and
mobile width of 320px.

For corrections, comments and questions message me
[@staydecent](http://twitter.com/staydecent).
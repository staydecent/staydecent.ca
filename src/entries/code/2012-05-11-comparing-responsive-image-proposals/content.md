<p class="big">Responsive Web Design has gained in usage and ease of use. But one, rather large, missing piece is responsive images.</p>

The [W3 Responsive Images Community Group](http://www.w3.org/community/respimg/) and [WHATWG](http://www.whatwg.org/) have been coming up with some ideas.

I should preface this post as such: I very well may have a lack of understanding or even misunderstanding regarding HTML spec proposals. Also, If you're not aware of [Responsive Web Design](http://www.alistapart.com/articles/responsive-web-design/), this post won't be very interesting.

## Two Proposals

As it stands there are two (popular) proposals for responsive images:

    <img src="face-600-200@1.jpeg" alt=""
       set="face-600-200@1.jpeg  600w 200h 1x,
             face-600-200@2.jpeg 600w 200h 2x,
             face-icon.png       200w 200h">

And:

    <picture alt="">
        <source src="mobile.jpg" />
        <source src="large.jpg" media="min-width: 600px" />
        <source src="large_1.5x-res.jpg" media="min-width: 600px, min-device-pixel-ratio: 1.5" />
        <img src="mobile.jpg" />
    </picture>

With many voicing their preference for the latter. Mainly because:

- It's easier to read
- It's familiar (see the `<video>` and `<source>` tags)

And, I agree. But, [Simon Pieters](https://twitter.com/#!/zcorpan) brings up some points on the [complexity of implementation](http://lists.whatwg.org/pipermail/whatwg-whatwg.org/2012-May/035784.html). In brief, the `srcset` attribute is easier to implement in the spec, and would  avoid some pitfalls that the `<picture>` element would create for JavaScript developers. Read the above link for details.

## Pick one

So, besides smaller semantic grievances, the main argument for each proposal is: 

- `<picture>` is easier to read and write as a developer
- The `srcset` attribute is easier to implement and would have less pitfalls for JavaScript developers

This is no easy decision. And, in getting a little more familiar with the community discussions regarding new HTML specs, I have gained much respect for those involved.

In the end, I still feel the `<picture>` element fits better along the existing HTML spec and elements. If `srcset` were to be implemented it would really be crossing a new boundary in terms of power given to an attribute&mdash;which I don't currently support. `<picture>` would take longer to implement, and JavaScript developers would have to be wary of creating bugs. But, I think friendly and familiar syntax outweighs both of those issues.
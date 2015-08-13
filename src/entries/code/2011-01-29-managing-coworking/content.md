When I was working in a team of about ~15 at an Advertising Agency, we were commonly trying to perfect how we all interacted with each other.

Building off of 37Signals concept that work doesn't get done at work,
we wanted to prevent intrusive chit-chatting and undelivered IMs. The
main problems were: **Is this person currently in the office? What is
the person currently working on? Is this person available to talk
about current projects, new projects or other matters?** I recently
saw a [TechCrunch post](http://techcrunch.com/2011/01/05/yammer/)
about [Yammer](http://yammer.com) which was a potential solution to
those problems that never really worked. It's very hard to integrate
*yet another* app into a teams workflow. We already had Basecamp,
Jira, Google Docs, IM, etc. so adding Yammer, which needed to be
consciously updated every time someone switch gears (left the office,
started a project, switched to another project, had a meeting), had a
high barrier for most people.

Every team has a suite of apps they use to manage all of their
internal workings; the problem of perfecting internal interactions
shouldn't be handled by another app to add to the suite. Instead, we
should refine the way we access that suite of apps.

### The Internal Start Page

Lots of you already use a start page for your web browsing and if
you're like me you probably have your business apps (time tracking,
invoicing etc.) pinned to your start page for easy access. This has
always helped me in remembering to sign into Basecamp and log my
hours, or check out the bug tracking app to see what should be
resolved today. But, it's not a perfect fit. This is where the
**internal start page** comes in.

![Internal Start Page
porotype](http://lh5.ggpht.com/_OWzPdn_VEvM/TUR-UGUgvQI/AAAAAAAAAA0/yGQmXGploTE/s640/InternalStartPage.png)

The above is a very simple prototype, that could potentially solve
this inter-office interaction problem. Like the *suite* offered from
37Signals for accounts using more than one product, there is an area
containing unique icons for each app used by a team. This provides the
basis of an internal start page. Where it becomes useful in improving
interactions with coworker is the team list on the right (this layout
would only suffice for small < 25 person teams) where it shows all
members of the team, and their current status.

### Where's The Magic?

On it's own, this is just the same nuisance as when we tried to use
Yammer—each person is required to update their status every time
the are busy, available, in office, on the phone, etc. The magic idea
is in the *portal*. Each linked app would have API access (most web
based apps for teams have API's). When a person accesses an app and
does some kind of unique activity, the *start page* would know,
automatically adjusting that person's status.

### Why Am I Sharing This Idea?

This *internal start page* idea would require a decent barrier to
setup each app and team member's account. It would also require a
decent amount of programming to make this work. And, could it *really*
work? Let me know what you think
[@staydecent](http://twitter.com/staydecent)!

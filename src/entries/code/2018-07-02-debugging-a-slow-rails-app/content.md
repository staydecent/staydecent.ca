title: Debugging a Slow Rails App
---

This past winter, I was tasked with figuring out why certain views on a Rails app were slowing to a crawl. While this was my first foray into Ruby/Rails debugging and performance tuning, I had decent experience with JavaScript and SQL query optimizing. 

Now, the notes I made are rough, and it's been about 6 months since the work was performed, so I may miss some details. But, I wanted to share my process in hopes of figuring out where and how I could improve.

## Some project background

The app was actually 2 Rails apps: 1 for front-end and 1 for the API. The front-end Rails app had custom controllers/models that represented API resources. The API app was rather standard Rails API setup. 

The original developers were not available to discuss and walk through any code.

And, the project was rather low-traffic, so this wasn't an issue at massive scale. This gave me hope the issue would be easier to spot :)

## Inspecting the database

As this was a totally unfamiliar app to me, and the original developers were not around to help walk-through the code, I tried what would be the lowest amount of effort to improve performance: SQL query performance tuning!

<div class="note">I also should have prefixed this by saying, I'm really not that experienced in DevOps or SysAdmin tasks. I guess I'd call myself a Full Stack Developer, with a focus on Front-end.</div>

Luckily, for me, the app was hosted on Heroku and had a paid Heroku PostgreSQL database. Lucky, because you can simply click on the Database resource and then choose the "Diagnose" tab to inspect frequent and potentially slow queries. This will show you the SQL queries on the right and 2 graphs on the left. The graphs show _Number of Invocations_ and _Average Time Per Invocation_. Here's a sample from a different app:

![Example Heroku PostgreSQL Diagnostics](https://storage.googleapis.com/staydecent/blog/Screen%20Shot%202018-07-02%20at%2010.37.12%20AM.png)

Short story: SQL did not appear to be the problem.

## Inspecting Gems

<a data-flickr-embed="true"  href="https://www.flickr.com/photos/orbitaljoe/3338334900/" title="Gems"><img src="https://farm4.staticflickr.com/3540/3338334900_29c5e389b5_z.jpg" width="640" height="388" alt="Gems"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

My next plan was to inspect dependencies. This was a tactic I've picked up in tuning front-end JavaScript apps. Again, this is another potential low effort win. Basically, check the version of major libraries (including the runtime), and then check GitHub Issues or other bug tracking for those libraries for any issues raised about performance.

The first thing I noticed was this project was using an old version of Ruby, which was nearing end of life for support. And, many versions since touted performance gains. I made note of this as a last resort. Really, I didn't think updating runtime would or should solve the problem by an acceptable magnitude. Sure, perhaps some of the Ruby language improvements would help this project, but I doubted (still do to this day) that it would have been significant enough to call it a day.

## Enter Skylight

<iframe src="https://giphy.com/embed/I0yKUIUewo0PC" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

<p><a href="https://giphy.com/gifs/perfect-loops-eh-skylight-I0yKUIUewo0PC">via GIPHY</a></p>

After my generalized approaches failed to find anything significant, I moved on to a more specialized tool, [Skylight](https://www.skylight.io/). Skylight is a Ruby specific performance reporting service. And, thankfully, the client had Skylight enabled for a few weeks (IIRC they added it only after experiencing slow load times).

Just like the Heroku monitoring graphs, Skylight identified the same views as being slow. Where the advantage came in, was Skylight also showed Ruby/Rails specific runtime details, matching response times to Controller methods, rather than just URL endpoints.

Right away, I noticed something about "Object Allocations" and that they were through the freaking roof. This meant, Ruby was using wayyyy too much memory.

## Narrowing in on the offending code

Skylight was nice enough to point me to the exact Controller method that was being called, which results in the massive amount of object allocations. But, it didn't tell me exact code (you know, like a line number!).

So I went hunting for "complex" looking code. Meaning, some function or method that has loops, maybe too many references being created, that sort of thing. Nothing stood out. I inspected the classes that were being inherited, didn't see anything obvious.

Okay, so I was closer to the source, but could not pinpoint it. I needed to profile the code locally.

## Rack Mini Profiler

[rack-mini-profiler](https://github.com/MiniProfiler/rack-mini-profiler) [RMP] is rack middleware that displays a speed badge for every HTML page. Well, the first issue is I was inspecting the JSON API Rails app. But, it still had a HTML 404 page, yay!

So, we can hit our API locally with some requests, RMP will do it's thing, and then I can manually load the 404 HTML page in a browser, which shows the previous requests via the RMP badge.

Similar to what Skylight was showing me, I can clearly see a slow request stand out.

I wanted to add some query string parameters to customize my mini-profiler usage. I Loaded up [Insomnia](https://insomnia.rest/) for making HTTP requests to my local API server, hitting the endpoint that has been identified in the above steps.

Following [this blog article](https://www.speedshop.co/2015/08/05/rack-mini-profiler-the-secret-weapon.html) by Nate Berkopec, I figured the Garbage Collection feature was what I was after and added the `?pp=profile-gc` flag to my POST request.

This Garbage Collection flag would track object allocations. So, I needed a baseline. I enabled the default Rails homepage and hit that:

`New objects: 3962`

Then, I made a request against the slow endpoint:

`New objects: 161271`

Yikes.

But, still I have not yet been able to narrow down a chunk of code that is causing this excessive object allocation. I have only confirmed it in more detail.

I then tried the `profile-memory` feature of RMP.

```
Total allocated: 14772397 bytes (162495 objects)
Total retained:  1647863 bytes (12389 objects)

allocated memory by gem
-----------------------------------
   5765128  aws-sdk-v1-1.64.0
   3202115  activesupport-4.1.5
   2962795  activerecord-4.1.5
   1764149  2.1.3/lib
   ...
```

After double-checking the AWS library for performance issues or a new version with improvements. I moved down into the ActiveSupport and ActiveRecord libraries. These are part of Rails and are related to accessing your database. But, we knew at this point, that SQL wasn't an issue. The lead me to conclude the issue was something on the lines of

> Too much memory is being used when accessing data from the PostgreSQL database, causing the Ruby garbage collector to jump in, stressing the CPU and crashing the app.

I eventually identified an Active Record method being used in a loop, [serialize](https://apidock.com/rails/ActiveRecord/Base/serialize/class). This view had quite a lot of records, and had nested Model records, and the way in which it was being serialized caused all the records' attributes to be initialized in memory.

Unfortunately, I don't have access to the codebase anymore, and it's been ~6 months. But, from what I can recall, I ended up caching references for only the attributes that were needed by the front-end, instead of serializing all attributes of the records.

I believe I made symbols for the attributes I wanted (which are only initialized once in Ruby, if I understand correctly).

Then I reduced the amount of nested/related model data being serialized, again by reducing it to only what the front-end needed. As well as caching nested references. There were parent model instances that had arrays of children. Many of those children were shared across the parents. The original ActiveRecord code was re-initializing every single child instance, instead of re-using a potentially already initialized instance.

In the end, this was enough to significantly reduce memory allocations, preventing the Ruby garbage collector from eating CPU, resulting in manageable response times.

## The End

Anyway, that's the path I took. I had very little previous experience with Ruby/Rails prior to this. But, with the reporting that comes with Heroku and their PostgreSQL hosting, as well as Skylight and the rather awesome Rack Mini Profiler, the task was much less daunting.

This isn't my area of expertize, but I certainly enjoy it. So if anyone has tips or advice, let me know!

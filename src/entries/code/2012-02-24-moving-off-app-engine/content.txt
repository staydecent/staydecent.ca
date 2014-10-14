<p class="big">Google App Engine provided a slew of learning, and allowed me to rapidly build my side-projects. But, it's time to move on.</p>

Google App Engine was exciting, and gave me an easy to run environment to learn Python. I built my portfolio and blog on GAE, as well as the original [Fullio App](http://fullioapp.com) and the current [Cook It Local](http://cookitlocal.com). But, each of those projects, for their own reasons, has outgrown (or no longer feels at home) on Google App Engine. Let's go over the migration of each project!

## Staydecent.ca

The GAE version of my website is pretty awesome. It's flexible, fast and allows me to update everything [by email](http://www.staydecent.ca/bits/publishing-by-email-app-engine). But, I also have a few static mini-sites for clients, fun projects and tests that I like to keep under the staydecent.ca domain. Uploading a folder of HTML and CSS isn't so simple on GAE compared to Apache. I also want to have my entire site backed up with Git. After finding [Jekyll](https://github.com/mojombo/jekyll) inflexible (at least with my lack of Ruby knowledge) I spent a day building a [ridiculous *build* script](https://github.com/staydecent/staydecent.ca) for a static website. It seems to be working&mdash;you're looking at it!

## Fullio App

This was the most painful. Trying to get this idea out fast, while battling with actual client work, I hit a major roadblock with GAE. Fullio processes emails with large, full-sized image file attachments and uploads them to Amazon S3. GAE has (had?) a limit that prevented me from sending requests larger than 10 mb to S3. This just would not fly, as I wanted to allow people to host their mega-images. Failing to get Flask or Django (or Python for that matter) running smoothly on my Windows based laptop wasted days! So, I wrote a [framework inspired by GAE's webapp](https://github.com/staydecent/Mud), so even though I had to rewrite all the code, at least the concepts were the exact same. I also used [MongoDB](http://www.mongodb.org/) to keep my data structures relatively the same. Fullio has seem some huge delays, but it's super close to a beta-launch. If you're interested, please bug me to get it out.

## Cook It Local

Holy neglected project, Batman! Food, nature and sustainability seem to be my passions, so it's saddening to see this project sit idly by. Cook It Local, is an ever adapting idea, web app, resource, tool etc. to inspire people to eat and cook with local, seasonal ingredients. So, many mini-apps and components will end up existing. I don't feel GAE allows for rapid, frequent iterations. So, I am creating a set of libraries for rapid prototyping. The base of this endeavor starts with my HTTP router, [Gum](https://github.com/staydecent/Gum/blob/master/Gum.php). I'll soon have a post on *rapid prototyping with PHP*.

## Closed platforms never win

Is that the lesson? Google App Engine is quite an amazing platform. The cost was basically zero to get my ideas up and running&mdash;I've been hosting staydecent.ca for zero cost for over a year now. But, my current emphasis is on flexibility and so I'll continue to move away from App Engine.
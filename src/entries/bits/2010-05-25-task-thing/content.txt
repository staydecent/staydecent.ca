title: Staying Productive With Task Thing
---

<p class="big">I have recently jumped back into the freelance world. And I need ways to stay productive.</p>

### Why I am freelancing
Growing sick of the *office* & meetings & commuting & packed lunches & disagreements, I decided to get back into freelancing—effectively taking control of my life. The first day I sat down at my desk, I asked “What the fuck am I supposed to do today?” I needed a list of things(tasks) to keep me in check.

### Available tools
Of course, the first thing I did was consider all of the to-do lists and task lists I have used in the past or just heard of(there are lots): [Todoist](http://todoist.com/), too much; [Ta-da List](http://tadalist.com/), I may as well used pen & paper; [Teux Deux](http://teuxdeux.com/), this was a close winner, but I don't like the multiple lists concept, or the small font-size. Naturally, if I wanted something I wouldn't complain about and could use every day, I needed to create my own.

### Introducing Task Thing
This brings us to [Task Thing](http://taskthing.appspot.com)! I would say this is very similar to Ta-da List, but with actual benefits over using just pen & paper. I say so because of drag & drop, inline editing and an understandable interface. Maybe I'm wrong, but feel free to [give it a try](http://taskthing.appspot.com) yourself!

<div style="background:url(http://taskthing.appspot.com/goods/png/screen.png);width:500px;height:200px;margin:0 auto 2em;-webkit-box-shadow: rgba(0, 0, 0, 0.199219) 0px 0px 15px;"></div>

### Building Task Thing
I built Task Thing over the better part of a day. This was possible because I was using a bunch of code I had written for another concept of mine(Hint: Panic Status Board). I won't go into too much detail, but Task Things' functionality is broken up into two models: list & task. The list model represents the page which gets one owner and any amount of tasks(owned by the same owner). A task has two editable fields, title & description as well as some other internal data(dates, priority, etc). Linking the tasks to the proper list is rather simple: the list attributes a unique slug and owner. When you view that list, you must login as the owner(logging in, you are redirected to your list). The tasks also have an owner field, which is matched with the list. Learning how to link different values in the App Engine datastore has been a lot of fun and so much lighter than MySQL joins. Also, I [Ajaxed](http://noahstokes.com/) the shit out of it.

### Staying Productive
Creating a task list was the first step I took in helping myself *stay productive*, and I am sure there will be more. So, if you care, <a href="http://feeds.feedburner.com/staydecent" title="the Staydecent™ Blog feed">check this blog often</a> as I post more things.
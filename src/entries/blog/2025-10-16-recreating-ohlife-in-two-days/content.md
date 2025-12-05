title: Recreating OhLife in two days
---

Many moons ago, there was a lovely service called [OhLife](https://www.ycombinator.com/companies/ohlife) which has been shutdown for some time now. Recently, I've been missing it as a simple way to journal and relive past entries. So, I recreated it in two days using AI—and what do the kids call it? Vibe coding?

When I say two days, I really mean two sessions of sitting down at my computer for maybe an hour or two. Which is quite remarkable. I mean, the concept of OhLife isn't too complicated, but still, pretty cool.

Of course, scheduling an automated email to remind you to journal is not really a feature at all. That could be done in something like five minutes. The real draw of OhLife was that it collected all the entries and randomly reminded you about them. Basically, you'd get a daily email that said:

> How'd your day go?
> Two weeks ago* you wrote: ...

That two weeks ago was sometimes a different interval—four days ago, one year ago, three months etc. This is the core value of something like OhLife. Sure, sometimes it's enough just to write out your thoughts and move on. Other times, it's nice to be reminded of what you wrote! Sometimes for nostalgia and sometimes it causes me to actually revisit a line of thinking.

I didn't do a great job of documenting what I did, but I took some massive screen shots which cover the bulk of my AI conversations.

All of this was done on the lovely https://val.town service using their AI assistant, Townie. 

## The initial prompt

> I'd like to create a journal powered by email. It's essentially a clone of OhLife. The Val will handle incoming emails, saving the text of the email as a journal entry. Each journal entry will be saved to a SQLite database. Each entry will save the email address of the incoming email, the contents, and the date it was sent and received.

[Link to screen shot of initial conversation](https://storage.googleapis.com/staydecent/blog/Townie__1.png)

Townie checks out the repo (which was blank) and begins working, explaining what it's doing and then documenting in README file. Nice!

I then asked it to add a function to strip out email signatures and quoted email contents, which it did.

## Iterations

The initial Townie creation included a vier for listing out all entries. It was some basic quoted HTML and server code (Val runs Deno I believe). I had seen Hono used in a bunch of Val examples and docs, so I asked Townie to update the viewer.ts file to use jsx and Hono.

[Link to screen shot of conversation iterations](https://storage.googleapis.com/staydecent/blog/Townie__2.png)

Right off the bat, I noticed it using `dangerouslySetInnerHTML` which didn't seem ideal or necessary. That was also an API from React, which we hadn't actually included in the project since Hono supports JSX without it.

Townie made it's changes, but upon testing none of the CSS was applying. The approach to inline CSS again seemed to come from React and was not supported in the same way by Hono's default JSX. It changed it again to not escape the ascii characters, but still no good.

I looked up the Hono documentation and found that importing and using the `<Style />` component seemed like an ideal approach. I let Townie know, and finally it updated the code to render properly.

I believe Townie is built using Claude Code and, in any case, I imagine many assistants would find more statistical relation between JSX and React rather than my more obscure usage of Hono's built-in JSX support. Thus, specificity is key. 

Expecting the entry viewer to get overwhelming over time, I asked Townie to add date filters to the `viewer.ts` file. It added a bunch of boilerplate but was essentially non-functional. The form elements posted as GET request but there was no code to actually apply the GET params as filters on the returned SQL query.

[Link to screen shot of conversation asking for date filters](https://storage.googleapis.com/staydecent/blog/Townie__3.png)

I continued to use Townie to write out the queries and pass the data through, though at this point it was faster for me to just connect the dots rather than figure out how to write what I wanted Townie to do in a prompt. Just telling Townie it didn't work, wasn't enough. 

## Takeaway

Well, it's pretty neat! I quit coding pretty much cold turkey when I went on sabbatical, so coming back without all my muscle memory it was nice to have gentle guidance. 

That said, at least with this basic setup, AI code generation excells at boilerplate but never understood the code well enough for state management and passing data around. I'm sure I could have outlined the exact needs in a prompt, but 15+ years of coding means I was basically thinking in code and would need to translate my thoughts into english for the prompt—which was essentially more work for me.

---
title: Why Redux over a more basic Global Store
published: true
description: How to avoid Redux boilerplate when starting out, and when and why you would want to embrace the boilerplate of specific Actions and Reducers.
tags: javascript, react, webdev, redux
---

Lately there's been some "[discussion](https://twitter.com/thekitze/status/1191745686980694017)" about the boilerplate around using Redux for application state. It's easy to look at Redux and think it's just an over-complicated global state. You could strip away much of the API and just implement an immutable object state, even mimicking the React state API of just `setState` and `getState`. 

<div class="note">For a Global Store that supports <code>getState</code>, <code>setState</code> and Redux compatible actions and reducers, I created <a href="https://github.com/staydecent/atom" target="_blank">atom</a>.</div>

And, this will get you pretty far. Then, throw in a few helpers to map or select parts of the state object and use them as props in your Components, and you actually have a solution that's very friendly for rapid prototyping. Without the need to create specific Actions and Reducers, you reduce boilerplate, and can just start modifying state from your components:

```javascript
globalStore.setState({ todos: globalState.todos.push(newTodo) })
```

When creating prototypes or MVPs, where speed is a priority, a simple global store is a good solution. So, why would you bother with the added complexity of Redux, Actions, and Reducers?

## Traceable state changes

The origin of state change is easier to follow since the change is triggered by an Action. An action is basically just a descriptor of what should happen. ie. `ADD_TODO`, `UPDATE_TODO`, `REMOVE_TODO`. This becomes more important when you have Components at various points in your React tree that can change the same data in your store.

You can also observe the order in which Actions were triggered and make sure the changes are happening in a sequence that makes sense for your app. This can be thought about in terms of data-integrity as well as the User Experience.

With Redux Devtools, this is a really pleasant experience.

## Refactoring

Because state changes are triggered by Actions, you can easily search your project for all instances of a specific Action being triggered. Perhaps, later on in the life of your project, you need to include some additional data for a specific type of state change. It's much easier to update a single Reducer to ensure that data now exists, and then search for all trigger instances for that Action.

With a global `setState` solution, it's much harder to search for the triggers for a specific change to state, ie. 

```javascript
setState({ todos: todos.filter(({ id }) => id !== idToRemove) })
```

If you don't follow the exact formatting in every case where you remove a todo, you will not be able to perform a quick, project-wide search and replace.

## Finding balance

The sentiment from that above embedded tweet isn't wrong. I've worked on several React/Redux projects where there were many dozens of files trying to group even more numerous action definitions, and reducers, and — oh my — middleware.

**So how can you keep the number of Actions and Reducers in your project under control?**

First, you need a generalized way to affect state change. [Here's the `pathReducer`](https://github.com/staydecent/wasmuth/blob/master/packages/node_modules/%40wasmuth/path-reducer/path-reducer.js) I use on every project.

If a specific state change only occurs in one or two places (components) you should be fine to rely on the generalized state change. Once you have state changes that partially overlap, defining a specific action and reducer can help with any potential debugging (see above about Traceability).

Then, once a project becomes more mature (re: Launched and with a userbase!), you may want to set time aside to write specific actions and reducers to replace those generalized state changes. Because of the improved traceability and refactoring, your project can become easier to maintain.

## Anything else?

Did I miss anything? From my experience, the above two points are what make Redux and the concept of Actions and Reducers stand out.

I still believe a simpler global `setState` can really help get an MVP out the door quickly. But, eventually, as an app and codebase grow, you'll likely benefit from the traceability and easy refactoring that comes with specific Actions and Reducers.

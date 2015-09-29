title: AngularJS Separation of Concerns
---

Recently, I was added to a couple of existing AngularJS projects to implement new features and refactor some existing ones. Specifically, the goal of refactoring was to move logic from places where it was not needed and to ensure everything was [DRY](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself).

After reading through much of the official documentation and discussing with the original developers who started these projects, it was still not 100% clear how code should be separated and when each AngularJS concept should be used.

Reading more developer blogs on the topic, the separation of concerns starts becoming more clear. But, to better understand each concept -- and to hopefully be able to succinctly convey to others -- I wanted to be able to explain the use for each AngularJS concept with a single terse sentence.

Here is what I came up with:

- Directives should be used when you need to manipulate the DOM.
- Controllers define your 2-way databinding models.
- Services are for everything else ;) Rather, Services are for sharing domain logic and state.

### Don't hesitate to create a new Service

The main issues I encountered when working on these existing AngularJS projects was reasoning about inheritance, the source of event triggers, and passing state between controllers. I found all of those issues could be solved by introducing a new Service and in some cases, expanding an existing one.

`$scope` should be explicit. Exposing an inhertited $scope method to your templates is not as easy to reason about than:

```javascript
$scope.someFunc = MyService.sharedMethod;
```

Services can also be used to hold state instead of relying on various `emit` or `broadcast` events. And, again, is much easier to reason about that a property defined on `$rootScope`.

If you have a Service that is the single source of truth for some state object, you do not need to worry about inheriting some `$rootScope` property or parent controller property.

Regarding MVC, Services are not limited to defining Models to persist data and hold the most up-to-date reference of that data. You can also have services for representing volatile state, file uploads, API wrappers etc.

Having plenty of focused, moderately sized Services is definitely better than having fat Controllers.

Anyway, my AngularJS experience is limited but this has been my takeaway so far. Here are some articles that helped form these views:

[AngularJS Sticky Notes Pt 1 – Architecture](http://onehungrymind.com/angularjs-sticky-notes-pt-1-architecture/)
[Rethinking AngularJS Controllers](http://toddmotto.com/rethinking-angular-js-controllers/)
[AngularJS Style Guide](https://github.com/johnpapa/angular-styleguide)



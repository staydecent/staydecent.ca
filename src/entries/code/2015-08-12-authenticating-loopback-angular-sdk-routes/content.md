title: Authenticating LoopBack AngularJS SDK Routes
---

I am currently working on writing an API backend with [LoopBack](http://loopback.io/). This API is a rewrite of an older Python codebase which has an AngularJS client. While the backend needs improving the current AngularJS client is holding up just fine.

[ExpressJS]() was the front-runner since the whole team has experience with it.But, when I came across LoopBack, which is a framework built on top of ExpressJS for quickly creating dynamic REST APIs, it seemed like a perfect fit. Not only do you get the time saving JSON based API generation, but also the [LoopBack AngularJS SDK](https://docs.strongloop.com/display/public/LB/AngularJS+JavaScript+SDK).

The AngularJS SDK will auto-generate AngularJS services for accessing your models and remote methods on the server. It's basically an ORM for your RESTful API endpoints. And, you can always keep it up-to-date by re-running the CLI tool or by using the Grunt build plugin.

Taking the [example code](https://docs.strongloop.com/display/public/LB/Create+AngularJS+client#CreateAngularJSclient-Services) for an authentication service you can see how easy it is to use the generated `lb-services` for accessing your API endpoints. After calling `login` the generated services will also handle passing the access token for subsequent calls to your resources.

### But, what I could not find in the documentation was how to manage an active user session on the client.

Following the [LoopBack AngularJS Example](https://github.com/strongloop/loopback-example-angular/blob/master/client/js/app.js#L4) I was using `angular-ui-router`. Without a clear example of authenticating routes with LoopBack and AngularJS I instead looked for a general example for `angular-ui-router`.

I found this great article by Jorge Silva: [Angular.js Authentication with UI-Router](http://blog.thejsj.com/angular-js-authentication-with-ui-router/). This succinctly covers requiring a logged in user for specific angular.ui routes. Which is great, since I am new to Angular and angular-ui-router.

Wait! If the `lb-services` are handling passing the access token for each subsequent call, they must be storing that data somewhere!

![where is LoopBack storing it's data?](https://dl.dropboxusercontent.com/u/3067484/Screenshot%202015-08-12%2023.01.33.png)

Indeed. Inspecting my generated `lb-services` source, I found a `LoopBackAuth` service that would load the `localStorage` values onto itself. Easy enough. In your custom [authentication service](https://docs.strongloop.com/display/public/LB/Create+AngularJS+client#CreateAngularJSclient-Services) you can inject the `LoopBackAuth` service and write a simple helper:

```javascript
// client/js/services/auth.js
function isLoggedIn() {
    return LoopBackAuth.currentUserId && LoopBackAuth.accessTokenId;
}
```

Then, the `authenticated` promise [outlined by Jorge Silva](http://blog.thejsj.com/angular-js-authentication-with-ui-router/) can be adapted:

```javascript
// client/js/site.js
var authenticated = ['$q', 'AuthService', function ($q, AuthService) {
    var dfd = $q.defer();
    if (AuthService.isLoggedIn()) {
        dfd.resolve();
    } else {
        dfd.reject('Not logged in.');
    }
    return dfd.promise;
 }];
```

Well, that's working for now. I am quite new to Angular and actually have yet to read any of the official documentation. So ... I could be way off on this one ;)

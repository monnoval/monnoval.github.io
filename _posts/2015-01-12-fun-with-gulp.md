---
layout: post
title: Fun with Gulp
---

![]({{ site.baseurl }}public/images/2015-01-12-01.png)

I started working with [Compass](http://compass-style.org/) and it was fun when you need a tool to compile Sass to CSS. If you need more like moving files, rename, minify, things would get more difficult. Enter [Gulp](http://gulpjs.com/), a build system that is fun to work with.

<!--more-->

I can remember working with Apache Ant. It opened the world of automation for me. I never thought you could simultaneously run things you wanted in a single task. Of course writing in xml sucks and the idea of having a build system has been fun. Nodejs is everywhere, [Grunt](http://gruntjs.com/) and [Gulp](http://gulpjs.com/) is easy to run. Not really to put too much emphasis, it really easy to code with javascript.

Recently I have been working heavily with Wordpress. Compass was alright with all with my Sass files and when it came into dependencies and minifying CSS/Javascript, it is not the right tool. I needed a build system and I found [Wordpress Gulp Bower SASS Starter Kit](https://github.com/synapticism/wordpress-gulp-bower-sass) which just suits everything I need for my day to day work.

The code below has dependencies, see [full gulpfile.js gist](https://gist.github.com/monnoval/139cb9806c4a8a11e114).  The idea I would like to highlight that the code below is easy to read. Especially to people who have written simple jQuery which most of us does. Upfront you'll know what the code below is doing.

{% highlight js %}
var styles_sass = lazypipe()
  .pipe( plugins.sass, {
    includePaths: [bower, source+'scss'],
    errLogToConsole: true
  })
  .pipe( plugins.autoprefixer,
    'last 2 versions', 'ie 9', 'ios 6', 'android 4');
var styles_min = lazypipe()
  .pipe( plugins.rename, { suffix: '.min' })
  .pipe( plugins.minifyCss, { keepSpecialComments: 1 });
var onError = function(err) { console.log(err) }

gulp.task('styles', function() {
  return gulp.src([source+'scss/*.scss', '!'+source+'scss/_*.scss'])
    .pipe(styles_sass().on('error', onError))
    .pipe(gulp.dest(build))
    .pipe(styles_min().on('error', onError))
    .pipe(gulp.dest(build))
});
{% endhighlight %}

There are a lot of things Gulp is able to do like image compression, js linting and compression, managing dependencies, and so so much more. It is hard to work without Gulp, which sounded same when I was working with Compass.

Having a build system in place makes workflow fast and efficient.

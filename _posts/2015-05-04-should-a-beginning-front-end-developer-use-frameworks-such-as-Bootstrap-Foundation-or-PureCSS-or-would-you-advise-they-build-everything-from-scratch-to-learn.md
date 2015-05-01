---
layout: post
title: Should a beginning front-end developer use frameworks (such as Bootstrap, Foundation or PureCSS) or would you advise they build everything from scratch to learn?

---

![]({{ site.baseurl }}public/images/2015-05-04-01.png)

No, please do write from scratch.

I know the best answer would be "it depends" just to not scare most people. Still the definite answer is "No, please do write from scratch".

<!--more-->

<p class="message">
  <a href="http://www.quora.com/Should-a-beginning-front-end-developer-use-frameworks-such-as-Bootstrap-Foundation-or-PureCSS-or-would-you-advise-they-build-everything-from-scratch-to-learn" target="_blank">This is a re-post of my answer in Quora. See the whole thread here.</a>
</p>

What I mean is that you understand every line of code in your project. Whether those line/s of code came from a framework, it does not matter as long as you know the consequences of what you are doing. This is only achievable by starting from scratch.

Important to understand is the difference between a UI Toolkit and CSS Framework. The image below is a slide from [What Is A CSS Framework Anyway?](https://speakerdeck.com/csswizardry/what-is-a-css-framework-anyway) by Harry Roberts

<iframe src="https://player.vimeo.com/video/95734680" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

You can watch the whole talk here [What Is A CSS Framework Anyway?](https://vimeo.com/95734680)

Writing from scratch is the best way to write maintainable and extensible CSS. Even writing from scratch you still need a base. The base should be a CSS Framework. You can create your base by copying what you need from [inuitcss](https://github.com/inuitcss) or [Pure](http://purecss.io/), be careful using pure though.

If you are going to use either Bootstrap or Foundation you'll have problems with bloat (you can know more about bloat in the slides by Harry Roberts). I experienced working with them before and it did get in my way 100% of the time, instead of writing code for the project I was writing code for Bootstrap for it to fit in the project.

Short-term, write and throw projects, use a UI Toolkit. Long-term, specialising in front-end, maintainable, extensible code, please do write from scratch.

If I can go back in time I would definitely spend more understanding the code I'm writing in my project rather than overwriting the styles of a CSS Framework.

Again, my answer, for you to learn write from scratch.


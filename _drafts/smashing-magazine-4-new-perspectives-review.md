---
layout: post
title: Smashing Book 4 New Perspectives Review
---

![]({{ site.baseurl }}public/images/2015-04-01-01.jpg)

I was glad to have this fourth version of the Smashing Magazine Book. I did have the first and second and was not able write any review on it. This time I'm going in-depth in reviewing the book to deepen my understanding on each chapter.

<!--more-->

<br/>

## Readability and the chapters

I do have the kindle and the paperback version of this book. It was easier to read it in paperback. The paperback is huge! 498 pages, 6.5 × 9.5 inches, maybe I can use this to protect myself from gunshots, hehe.

Reading in kindle is laggish, especially if jumping from a bookmark or chapters, I do not know why. Having it in kindle is like a no choice since I mostly read when I walk and commute via train. I finished reading the book in kindle regardless of its performance.

I first thought the chapters could be read separately, meaning anyone can grab the book and jump straight to any chapter. Looking back on all the chapters, most of them are actually interconnected and should be read according to their order. The chapters near the end go its own way, which does not relate to any parts of the book. Still some are interesting to read and some lost their way to oblivion. I would strongly advice to read them in order to have a deeper understanding on the concepts and techniques.

<br/>

### Modern CSS Architecture and Front-End by Harry Roberts

By far the best chapter of all. Jumps straight directly to the web with its history and current status. The whole chapter focuses understanding the web and how to write better code that would be maintainable and extensible for future use.

I'm sure most of you are not excited by Object-Oriented CSS. Everybody talks about it and writes about it. But in this chapter, in how it’s written, it is clear, humanely readable and entertaining. Analogies’ play an important part that really makes you understand the whole concept. It goes deep in organizing your css files, selectors and naming convention.

The most important of all is the part where I learned how to use BEM (Block, element, modifier) methodology. I've read about BEM before and this is the only it did really stick on me. I would really recommend this chapter to anyone doing front-end web development work.

<br/>

### Writing Maintainable, Future-Friendly Code by Nicholas C. Zakas

This chapter gave an emphasis on maintainability and extensibility on code for future use. It gave me an impression of Nicholas saying that he had experienced all the nuances of having no documentation, style guide, team work, and awareness.

> Even if you're unable to find the perfect architecture for your project, just pick one. Having some organization is much better than having no organization.  - Nicholas C. Zakas

The following excerpt from the chapter concludes all the topics discussed.

> - Code conventions ensure that everyone speaks the same language.
> - An architecture lays a solid foundation on which to build.
> - Good documentation is important so others can extend your codelater.
> - Choosing and managing third-party components appropriately makes sure you have linear path as fixes become available.

I love rereading this chapter, it reminds you the important things to be done.

<br/>

### The Vanilla Web Diet by Christian Heilmann

_"Vanilla Web Diet"_ is about building in the web starting from what works and slowly building on top of every working layer. Currently web developers depend too much on using javascript.

> Trying to replace the basic transport mechanisms of the Web with our own contructs may seem faster but it will always be very prone to error. We have a working infrastructure - we should use it.

Even the most basic things developers tend to forget the basics in building anything in plain html. This does affect the level of support to browsers.

> Build for the person who takes over from you, not for the current state of the browser and you'll be a great person to work with.

Every developer hates supporting IE, it eats lots of debugging time while supports only few visitors. I remember one project I was so focused on pushing it to live while neglecting IE. I was purely using Chrome in my tests. I neglected to use the basics of html, css and javascript. In the end I needed to support IE by adding htmlshiv and respond.js, which is a Band-Aid way of solving the problem.

> Something that adds to the obesity of the Web to a very large degree is the misguided notion of giving every browser and every environment the same experience.

Supporting major browsers in different platforms ranging from mobile to desktops is hard. The complexity is actually coming from developers complicating their code. Well it was a different case with IE6 - IE8 that was depreciated by time. In the present time, browsers are dependable (most of the time) we developers tend to overcomplicate things with javascript.

<br/>

### Culture of Performance by Tim Kadlec

Performance has reached a situation where I would say it's _"trendy"_. In reality performance has been there since the start of the web. Everyone wanted to avoid all those flashy loading screens and get right into their needs on the site. Recently people have been talking a lot about performance. I read articles from Tim Kadlec regarding web performance before reading this chapter, it is more of assuring he is the one authoring this chapter.

What I really liked about this chapter is the statics he mentioned:

> - Amazon found that for every 100ms of improved page load time, it saw a 1% increase in revenue
> - Bing tried an experiment where it deliberately made search queries take two seconds longer. The result was a 4.3% decrease in revenue per user
> - Mozilla improved the performance of its landing page by 2.2 seconds and saw a 15.4% increase in download conversions. This roughly translates into 60 million more downloads annually.
> - Shopzilla cut its page load time from 6 seconds to 1.2 seconds. In addition to a 12% increase in revenue, page traffic increased by 25%.

The stats above are living proof that performance should be part of the development process. I have experienced working with a software company who's goal is to push out software and websites a.s.a.p. It was depressing! Developers were not granted the time to optimized their code. Instead, they were given tight deadlines they need to meet. In the end, the company suffered financial lost and all of us in the team need to leave. A software (or web) project without performance baked into the process will act as a debt. If the debt won't be paid sooner or later, anyone involved in the project would surely need to pay it back.

Tim discussed performance budget, software and browser tools to be used, applications that manage performance in user interaction level. Overall this chapter melds well with the previous chapter. It discuss about the obesity of the web by making performance as a priority.


<br/>

### Robust, Responsible, Responsive Web Design by Mat Marquis

I would say this chapter is more towards web performance and tackles deeply on the techniques in engineering web performance. It does add to what the previous chapter has been discussing by focusing on the how-to parts. The whole chapter felt boring as I moved on the pages and honestly this chapter covered the problems I encounter when developing for websites that needed support on various platforms and browsers. It discussed how to handle css, javascript, and html in a way that prioritizes performance. In javascript, it showed how to handle blocking javascript files to making it non-blocking, I've been searching how to handle this kind of thing online but hey it was here, honestly useful!

Mat Marquis is from Filament Group. I saw the [github repo of Filament Group](https://github.com/filamentgroup) which was useful if you're working on getting better performance for your websites.

<br/>

### Designing Adaptive Interfaces by Aaron Gustafson

This chapter is a technique version of _"Vanilla Web Diet"_ and _"Writing Maintainable, Future-Friendly Code"_. I could only summarize it by componentization of working modules that works across platforms that you could learn directly by going to [patternlab.io](http://patternlab.io/).


<br/>

### The Two Faces of Content Strategy by Corey Vilhauer

Not really a big fan of content strategy, maybe as a developer I'm too focused on doing the engineering work and had less involvement in managing content. If you’re foreign to content strategy and would like to learn more about this topic, this is the best place to start with. I have no idea what is it about in the first place and reading the whole chapter opens new doors.

Even if this section was written in parallel with philosophy I love the deep sense it plants in our thoughts. The complex technology powering the web is very important, we should not forget most people using it have no idea. Content is king. As most of us ponder this phrase it is simply how people communicate and interact, with content.

<br/>

### Supporting Your Product by Rachel Andrew


<br/>

### The Design of People by Nishant Kothary


<br/>

### On Creative Spirit by Christopher Murphy



## Chapters skipped

I got bored reading the following chapters

- The Next Steps For Web Typography by Marko Dugonjić
- Finding and Fixing Mobile Web Rendering Issues by Addy Osmani
- Obscure Back-end Techniques and Terminal Secrets by Paul Tero

While reading them, there is distant move away from topics covered in earlier chapters.

The chapter about _Web Typography_ focused on how to handle fonts, line heights, leading, letter spacing, etc. It even covered operating system do render type. I was lost on where it was headed. I understood the importance of type in web and deeply delving in the details of type is extreme. Important but there is other chapters much more fun to read.

_"Finding and Fixing Mobile Web Rendering"_ is a how-to on using chrome's developer tools. The problem here is the screenshots from dev tools have already changed so they might have no use at all. I suggest better you better lick your way into chrome dev tools right away. Or you can just watch some videos on YouTube to do that.

Worst chapter of all is _"Obscure Back-end Techniques and Terminal Secrets"_. I got respect on the time and effort spent on this chapter but it was really far from what other chapters are talking about. This chapter was focused on anything related to system administration. It does explain the basics, issues, and solutions. Nevertheless all the information highlighted, I would say this is chapter is worth getting bored.


<br/>

## Summary

The whole book is awesome. Even though there are parts, which do not correlate to each other, the overall learning that was thought is extensive. I learned a lot! This book is not just about new perspectives, it is more of catching up what is currently out in the web.






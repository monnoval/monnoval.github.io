---
layout: post
title: Developers, Tools, Frustration
---

![]({{ site.baseurl }}public/images/2015-08-12-01.jpg)

Today I'm writing to list the frustrations I see and read everyday. 

1. I'm so frustrated [seeing developers using tools from the 90's](#tools).
2. I'm so frustrated [by developers who do not care about performance](#performance).
3. I'm so frustrated [by projects not in version control](#version-control). 

Take note, everyday, looking at the code makes me want to vomit. Seriously, I would like to puke, I'm not joking this time. 

I know, I know. Too much expectation leads to frustration. But developers are getting more and more stupid!

<!--more-->

Seriously. It's year 2015. It has been 40 years since [The Mythical Man-Month](http://www.amazon.com/Mythical-Man-Month-Software-Engineering-Anniversary/dp/0201835959) was first published. After four decades, majority of developers are still stuck with technology from the 90s. 

<br/>

<h2 id="tools">Tools</h2>

First thing I try to understand a developer is into his tools. I try to understand how he/she solves small problems related to day-to-day work. I truly believe that looking deeper into how a developer handles his/her tools give a strong emphasis on his problem solving skills. The tools maybe his IDE, text editor, FTP uploader, etc. 

I have recently pushed my simple wordpress starter theme [Bareplate](https://github.com/monnoval/bareplate), built on Gulp, Bower, Sass, and BrowserSync. This starter theme is my way of making my workflow faster, maintainable and performance driven. Still there are a lot of things to work on. I still need to do documentation, and a lot of refactoring to make it easier for people. 

Even though I have my own starter theme, I'm still so eager to tryout [Sage](https://roots.io/sage/) so that I could understand the problems it solves. Or even setup [Trellis](https://roots.io/trellis/) to have a rock solid portable wordpress setup. Looking at the projects in roots.io I'm already set to believe this is gonna be my next wordpress setup. Its quite amazing see for yourself!

The really frustrating part is, even though these tools are already available online. There are still so many, so many (maybe thousands, maybe near million, sorry I got not stats :P ) of developers using the same old workflow. 

- __Not using Bower.__ So Devy (the developer) still needs to go to jQuery website and download it there, extract/unzip, copy/paste to folder. Duh!
- __Not using Gulp.__ Compression is done manually. Worst there no compressed CSS and JS! Mother!
- __Not using Sass.__ If you're are living in a cave then this is fine!


<br/>

<h2 id="performance">Performance</h2>

I have been crazy about performance lately. It started when I was working with responsive websites, striping out critical css, testing with chrome developer tools, looking at the repaints, and so on and on. There was not stopping on this craze. Seriously. I'm even always looking out at the number of request whenever I'm doing updates that is related to images. 

Recently with [Filmstrip in Chrome](https://www.youtube.com/watch?v=tCfF6HI0JKs) I even went crazier! So helpful to see screenshots when your site was loaded. You can really diagnose what people will see when they have slow network. Performance is not just making things fast. It is making things work even at slower network. You can also read [Three takeaways for web developers after two weeks of painfully slow internet](https://medium.com/@zengabor/three-takeaways-for-web-developers-after-two-weeks-of-painfully-slow-internet-9e7f6d47726e)

Working out performance in a project is not as simple as it sounds. I am not talking about installing a plugin then your website would be instantly fast. I'm more towards understanding the issues that can be caused if performance is not part of the workflow. In avoiding all those issues, 

1. Action should be taken such as running a build system to prep all files for minification. This is heavy work if project did not start with a build system. 
2. Lazy load heavy stuff such as google maps, sliders, images and code widgets. This would help initial page visibility and repaint which would help people to browse your content asap even though the page is still loading. 
3. Javascript should always be the last priority. Run your website without javascript and make sure a person can browse the website without it. With this, you are assured that the website works in worst possible case. 


Being aware on what we are building is very important. Even if it is just a simple website, it does affect people wanting to look for information in your website. This is the root of my frustration. 

Most developers care less on the people they are building for. 

<br/>

<h2 id="version-control">Version Control</h2>

I love doing micro commits. It does give me assurance my code is documented and saved in its current state. Looking back at my revisions gives me better idea on how to refactor them in the future. Whenever I did mistakes I'm still able to revert back immediately and happily. It is a very good system to work with source code. Com'on itss a technology since 1980s! [See the Version Control History!](https://www.plasticscm.com/version-control-history.html)

Here are good reads which also relates to maintenance and documentation:

1. [Technical Debt](https://en.wikipedia.org/wiki/Technical_debt)
2. [Bus Factor](https://en.wikipedia.org/wiki/Bus_factor)
3. See Nick Kwiatkowski's comment stated in [Did the Microsoft Stack Kill MySpace?](http://highscalability.com/blog/2011/3/25/did-the-microsoft-stack-kill-myspace.html). No wonder MySpace died, they cannot even version their code.

I'm so frustrated why developers avoid using a system where it would help them?

<br/>

## Super Duh!

Alright, my frustration is trying to evolve into unconditional hate. Time will be the judge if this is good for me, lol! 

If you have the same issue, do write, talk, and discuss about it. It would be for the good of every developer to know that there is an issue creeping in. 



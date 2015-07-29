---
layout: post
title: Performance and maintainability on building Wordpress themes
---

![]({{ site.baseurl }}public/images/2015-05-17-01.jpg)

Building themes for Wordpress is very easy. It is one of the best feature that empowers developers and designers. It is also the worst when it comes to maintaining one! Let's just say you are building a theme that would be used for more than 5 websites with a life span of more than 2 years. 

<!--more-->

Let's admit it. Develpers will always forget what they did few weeks ago. Only God knows the reasons why the theme developer made things in that way. 

My solution is very simple. 

1. Build the Wordpress theme using Gulp 
  - To manage dependency of javascript and css files.
  - To auto compress javascript and css files
  - To be able to use Sass (or Coffee if you want)
2. Seperate page templates by directory
  - This also means to have a separate javascript and css file for the page tempalte itself
  - Each page template acts like a loosely coupled module
  - Having a separate javascript file for a specific page would assure that other pages would not need to run/download a script it does not need



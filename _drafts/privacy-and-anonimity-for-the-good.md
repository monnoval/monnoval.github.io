---
layout: post
title: Privacy and Anonimity for the Good
comments: true
---

<iframe width="100%" height="400" src="https://www.youtube.com/embed/J1q4Ir2J8P8" frameborder="0" allowfullscreen></iframe>

After watching the video [Defcon 18 Pwned By the owner What happens when you steal a hackers computer](https://www.youtube.com/watch?v=U4oB28ksiIo). I was in awe. Well Zoz' setup is pretty hard core. He got SSH, and VNC running which I hope I'm able to do someday. It was funny and amazing at the same time. What hooked me was his another video in [DEF CON 22 - Zoz - Don't Fuck It Up!](https://www.youtube.com/watch?v=J1q4Ir2J8P8). 

<!--more-->

<br/>

## Contents

1. [DuckDuckGo](#duckduckgo)
2. [Tor Browser](#tor-browser)
3. [VPN](#vpn)
4. [FastMail](#fastmail)
5. [File Vault](#file-vault)
5. [Firefox](#firefox)

<br/>

<h2 id="duckduckgo">DuckDuckGo</h2>

![]({{ site.baseurl }}public/images/2015-06-19-03.png)

Now all my searches online is using DuckDuckGo search engine. After setting it as default in my computer I never felt the need to go back to using Google search. Well you might think that I'm trying to avoid Google as much as I can, in reality do we really need to use Google search's advanced feature on jow it personalises our search results? I do not think so.

DuckDuckGo is enough. In iOS 8, Apple even added it as an option in Safari. Apple acknowledges privacy in their devices to great lengths. Set links and examples here.......

I did set DuckDuckGo on every device I use. Our personal and work related searches online must be private and anonymous. It is very harmful that someone is looking at what your are interested and quickly turning that into a marketing venue for companies to sell. It felt that privacy to what you are doing is taken advantage.

<br/>

<h2 id="tor-browser">Tor Browser</h2>

The browser is typically a modified version of the Firefox browser. Download the bundle install and you can use it as your default browser. Which what I did, I felt this is the right way to do so that at leadt any new links I open up hoes thru the Tor network.

In iPhone, there is no official Tor browser yet. Instead there is a lot of options, one is the Onion Browser which normally fine but it lacks tab browsing, it felt weird using a browser that do not have this feature. The solution is to use Red Browser which is a good replacement for the Chrome browser. 

I stopped using Google Chrome and I'm now using the default Safari. This is more of a personal choice to trust more on Apple. 

Using Tor in either mobile or desktop is slow. Most of the time when I'm doing quick searches online I use Safari just to get results immediately. Using Red Browser + Tor would be best but it is awfully slow and takes time before you can start searching online. 

In desktop having Tor as the default browser is fine. It would slower your browsing but it has good trade offs.

<br/>

<h2 id="vpn">VPN</h2>

I purchased a VPN from Private Internet Access. Well for now I only bought a month of subscription. I may well extend it to a year because the service is good so far. They have an awesome support as well, you can have achat in there website anytime you need. 

Currently I used the VPN service on my laptop, desktop and mobile phone. I never had problem using their software in my computers except in my phone. For my phone I needed to use OpenVPN to connect here are the steps to do it 123

<br/>

<h2 id="fastmail">FastMail</h2>

I moved all my mails from GMail to [FastMail](https://fastmail.com). Luckily I do not have that much of emails, roughly 1/2 GB only. It only took an hour for IMAP to fulky download all mails. The interesting part is when I tried to updated my MX Records. 

Migrating old gmail to be pointed directly to FastMail .... Tbc

<br/>

<h2 id="file-vault">File Vault</h2>

From [Use FileVault to encrypt the startup disk on your Mac](https://support.apple.com/en-us/HT204837)

![]({{ site.baseurl }}public/images/2015-06-19-02.jpg)

> You can use FileVault full disk encryption (FileVault 2) to help prevent access to documents and other data stored on your startup disk. FileVault uses XTS-AES 128 encryption. To use this feature, you need OS X Lion or later, and a working [OS X Recovery](http://support.apple.com/kb/HT4718) volume on your startup disk.



<br/>

<h2 id="firefox">Firefox</h2>


Now I'm back to using Firefox as my browsing online. Using Tor all the time is good, the only problem is there are websites that are really slow to load and also you cannot watch online videos. Still you need a browser for doing your day to day stuff

Here are the extensions I'm currently using

- [uBlock Origin](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/)
  - Similar to AdBlock Plus but with lesser memory footprint. You can also use the filters you normally use in Adblock Plus
  - For now I still recommend Adblock Plus since I never had any issues using it. I am just venturing into uBlock to see how good this alternative be.
- [Disconnect](https://addons.mozilla.org/en-US/firefox/addon/disconnect/?src=search)
  - Disconnect is open source, [you can dig on the source in Github](https://github.com/disconnectme/disconnect).
  - At first I did use Ghostery, I stopped using it after knowing it was owned by a online advertising company. Plus their source code for the plugin is not open source. The plugin is free but license is proprietary. 
- [HTTPS Everywhere](https://www.eff.org/https-everywhere)
  - You can only download on the [EFF.org website](https://www.eff.org/https-everywhere), I haven't found it in firefox addons repo. 
  - I experienced this plugins does break websites who uses Google Maps if not in HTTPS. Be aware on this plugin if you see a website you are visiting breaks

 
![]({{ site.baseurl }}public/images/2015-06-19-01.jpg)


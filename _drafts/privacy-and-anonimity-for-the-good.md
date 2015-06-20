---
layout: post
title: Privacy and Anonimity for the Good
comments: true
---

<iframe width="100%" height="400" src="https://www.youtube.com/embed/J1q4Ir2J8P8" frameborder="0" allowfullscreen></iframe>

After watching the video [Defcon 18 Pwned By the owner What happens when you steal a hackers computer](https://www.youtube.com/watch?v=U4oB28ksiIo). I was in awe. Well Zoz's setup is pretty hard core, he got SSH and VNC setup. I really hope I'm able to have that kind of setup someday. 

What really hooked me was his another video [DEF CON 22 - Zoz - Don't Fuck It Up!](https://www.youtube.com/watch?v=J1q4Ir2J8P8) which he said the following regarding [Tor](https://torproject.org/): 

> - It is how ordinary people can search and communicate without being tracked and monitored.
> - It pisses me off when people say that Tor is only for illegal acts.
> - Even if you're squicky clean and you are not doing anything wrong still use Tor because that helps out everyone else.
> - The nature of Tor is for anonimity it is really tough to tell people that you are using Tor for good.
> - Use Tor for Good!

I was well aware since before that ISPs, social networks, search engines, and many more are tracking everyone of us. I was aware still never did anything to stop them from tracking me. This time I did take precautions that would make my activities online private and anonimous. 

<!--more-->

<br/>

## Anonimity for Good! 

I am sure all my activities are legal and clean. Still we need to be aware and do take action to protect our rights to privacy. I cannot go out there naked and let anyone look at my stuff, no way, especially online, where there are tons of trackers embeded in every website. 

It is crazy how these trackers log your online activity. You could use [Lightbeam](https://addons.mozilla.org/en-US/firefox/addon/lightbeam/) to see a visualized presentation of your activity online. 

Take action now! Below are the list of tools I'm currently using for privacy and anonimity online. 

<br/>

## Contents

1. [Tor Browser](#tor-browser)
  - [Problems](#tor-browser-problems)
  - [Day to day](#tor-browser-day-to-day)
3. [VPN](#vpn)
  - [OpenVPN](#vpn-openvpn)
  - [Spoof your MAC address](#vpn-spoof-mac)
6. [DuckDuckGo](#duckduckgo)
7. [FastMail](#fastmail)
8. [File Vault](#file-vault)

<br/>

<h2 id="tor-browser">1. Tor Browser</h2>

![]({{ site.baseurl }}public/images/2015-06-19-04.png)

The browser is a heavily modified version of the Firefox. [Download the Tor Browser](https://www.torproject.org/download/), install and you can use it as your default browser (which what I did). I felt this is the right way to do. Now every new link I open will now go thru the Tor Network.

<h3 id="tor-browser-problems">1.1 Problems</h3>

Currently I normally use Tor to search, browse and read online. Especially when using public wifi I tend to fire up Tor as my only browser but, yes there are buts: 

- There are websites that are completely broken in Tor. 
  - Working with a localhost server (for web development) is also not possible.
  - Watching videos is also a problem. Since it does block flash and javascript.
- The response you get from websites is normally slow. You can read more about it here:
  - [Why Tor is slow and what we're going to do about it](https://svn.torproject.org/svn/projects/roadmaps/2009-03-11-performance.pdf)
  - [Tails, quality of the relays](https://tails.boum.org/doc/anonymous_internet/why_tor_is_slow/index.en.html)
- Logins. Using Tor and logging in using your real identity does not make sense. Anonimity plus your real name is a big no no. 

<h3 id="tor-browser-day-to-day">1.2 Day-to-day use</h3>

Definitely you need a browser for doing day to day stuff. A browser you can use to login, update your stuff, send email, communicate to your real life friends, and do helpful [Quora](https://quora.com) stuff.

Tor modified Firefox so it does make sense to use Firefox as my day-to-day browser. Here are the extensions I'm currently using

- [uBlock Origin](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/)
  - Similar to AdBlock Plus but with lesser memory footprint. You can also use the filters you normally use in Adblock Plus
  - For now I still recommend Adblock Plus since I never had any issues using it. I am just venturing into uBlock to see how good this alternative be.
- [Disconnect](https://addons.mozilla.org/en-US/firefox/addon/disconnect/?src=search)
  - Disconnect is open source, [you can dig on the source in Github](https://github.com/disconnectme/disconnect).
  - At first I did use Ghostery, I stopped using it after knowing it was owned by a online advertising company. Plus their source code for the plugin is not open source. The plugin is free but license is proprietary. 
- [HTTPS Everywhere](https://www.eff.org/https-everywhere)
  - You can only download on the [EFF.org website](https://www.eff.org/https-everywhere), I haven't found it in firefox addons repo. 
  - I experienced this plugins does break websites who uses Google Maps if not in HTTPS. 

In iOS, there is no official Tor browser yet. Instead there is a lot of options, one is the [Onion Browser](https://mike.tig.as/onionbrowser/) which normally fine but it lacks tab browsing, it felt weird using a browser that do not have this feature. The solution is to use [Red Onion](https://itunes.apple.com/us/app/id829739720) which is a good replacement for the Chrome browser. For normal browsing online I'm back to using Safari. 

<br/>

<h2 id="vpn">2. VPN</h2>

I purchased a VPN from [Private Internet Access](https://www.privateinternetaccess.com/). Well for now I only bought a month of subscription. I may well extend it to a year because the service is good so far. They have an awesome support as well, you can have a chat with someone in their website anytime you need. 

Currently I used the PIA on my laptop, desktop and iPhone. I never had problems using their software in my computers except in iOS. I experienced once that I was not able to connect using their iOS App, the quick fix was to use

<h3 id="vpn-openvpn">2.1 OpenVPN</h3>

1. Install [OpenVPN](https://itunes.apple.com/us/app/openvpn-connect/id590379981) 
2. Use Safari and visit [OpenVPN iOS](https://www.privateinternetaccess.com/pages/openvpn-ios)
3. Select whichever you want then open the cert via OpenVPN

As of this writing, I'm using their iOS app again, it works. I'll just monitor this for now.

<h3 id="vpn-spoof-mac">2.2 Spoof your MAC address</h3>

I know this is not so related to VPN. Using VPN you'll have your IP address randomized in that network. Even if you have your IP random, when you are connecting to public wifi hotspots your MAC address would then be logged in the router. 

If you are paranoid about this stuff (like me, duhhh) then you better change you MAC address before you connect to that wifi. Better use [SpoofMac](https://github.com/feross/SpoofMAC):

> I made this because changing your MAC address in Mac OS X is harder than it should be. The biggest annoyance is that the Wi-Fi card (Airport) needs to be manually disassociated from any connected networks in order for the change to be applied correctly. Doing this manually every time is tedious and lame.
https://github.com/feross/SpoofMAC

<br/>

<h2 id="duckduckgo">DuckDuckGo</h2>

![]({{ site.baseurl }}public/images/2015-06-19-03.png)

Now all my searches online is using DuckDuckGo search engine. After setting it as default in my computer I never felt the need to go back to using Google search. Well you might think that I'm trying to avoid Google as much as I can, in reality do we really need to use Google search's advanced feature on how it personalises our search results? I do not think so.

DuckDuckGo is enough. In iOS 8, [Apple even added it as an option in Safari](https://www.theverge.com/2014/6/2/5773480/apple-will-let-users-pick-duckduckgo-for-search-ios-8). Apple acknowledges privacy in their devices to great lengths. 

- [DuckDuckGo has grown 600% since Apple made it a search option (and NSA revelations)](http://9to5mac.com/2015/06/16/duckduckgo-growth-ios/)


I did set DuckDuckGo on every device I use. It is very harmful that someone is looking at what your are interested and quickly turning that into a marketing venue for companies to sell. It felt that privacy to what you are doing is taken advantage.

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
 
![]({{ site.baseurl }}public/images/2015-06-19-01.jpg)


Buy a VPN Router. Setup it up and ensure all traffic going out is encrypted.
Hop VPNs every few minutes. This is very interesting, it would. 



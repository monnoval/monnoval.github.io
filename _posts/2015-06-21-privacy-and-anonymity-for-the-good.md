---
layout: post
title: Privacy and Anonymity for the Good
comments: true
---

![]({{ site.baseurl }}public/images/2015-06-21-01.jpg)

After watching the video [What happens when you steal a hackers computer](https://www.youtube.com/watch?v=U4oB28ksiIo). I was in awe. Well Zoz's setup is pretty hard-core, he got SSH and VNC setup. I really hope I'm able to have that kind of setup someday. What really hooked me was another video from him [DEF CON 22 - Zoz - Don't Fuck It Up!](https://www.youtube.com/watch?v=J1q4Ir2J8P8) which he said the following regarding [Tor](https://torproject.org/): 

<iframe width="100%" height="400" src="https://www.youtube.com/embed/J1q4Ir2J8P8" frameborder="0" allowfullscreen></iframe>

> - It is how ordinary people can search and communicate without being tracked and monitored.
> - It pisses me off when people say that Tor is only for illegal acts.
> - Even if you're squeaky  clean and you are not doing anything wrong still use Tor because that helps out everyone else.
> - The nature of Tor is for anonymity it is really tough to tell people that you are using Tor for good.
> - Tor for Good!

I was well aware since before that ISPs, social networks, search enines, and many more are tracking every one of us. I was aware yet I still did nothing to stop them from tracking me. This time I did take precautions that would make my activities online private and anonymous. 

<!--more-->

<br/>

## Anonymity for Good! 

I am sure all my activities are legal and clean. Still we need to be aware and do take action to protect our rights to privacy. I cannot go out there naked and let anyone look at my stuff, no way, especially online, where there are tons of trackers embedded in every website. 

It is crazy how these trackers log your online activity. You could use [Lightbeam](https://addons.mozilla.org/en-US/firefox/addon/lightbeam/) to see a visualized presentation of your activity online. 

Take action now! Below are the list of tools I'm currently using for privacy and anonymity online. 

<br/>

### Contents

1. [Tor Browser](#tor-browser)
  - [Problems](#tor-browser-problems)
  - [Day to day use](#tor-browser-day-to-day)
  - [Differentiation](#tor-browser-differentiation)
2. [VPN](#vpn)
  - [OpenVPN](#vpn-openvpn)
  - [Spoof your MAC address](#vpn-spoof-mac)
3. [DuckDuckGo](#duckduckgo)
4. [FastMail](#fastmail)
  - [Pros](#fastmail-pros)
  - [Cons](#fastmail-cons)
5. [File Vault](#file-vault)

Lastly!

- [Doing More!](#doing-more)

<br/>

<h3 id="tor-browser">1. Tor Browser</h3>

![]({{ site.baseurl }}public/images/2015-06-21-04.png)

The browser is a heavily modified version of the Firefox. [Download the Tor Browser](https://www.torproject.org/download/), install and you can use it as your default browser (which what I did). I felt this is the right way to do. Now every new link I open will now go thru the Tor Network.

<br/>

<h4 id="tor-browser-problems">1.1 Problems</h4>

Currently I normally use Tor to search, browse and read online. Especially when using public wifi I tend to fire up Tor as my only browser but yes there are buts:

- There are websites that are completely broken in Tor. 
  - Working with a localhost server (for web development) is also not possible.
  - Watching videos is also a problem. Since it does block flash and javascript.
- The response you get from websites is normally slow. You can read more about it here:
  - [Why Tor is slow and what we're going to do about it](https://svn.torproject.org/svn/projects/roadmaps/2009-03-11-performance.pdf)
  - [Tails, quality of the relays](https://tails.boum.org/doc/anonymous_internet/why_tor_is_slow/index.en.html)
- Logins. Using Tor and logging in using your real identity does not make sense. Anonymity plus your real name is a big NO. 

<br/>

<h4 id="tor-browser-day-to-day">1.2 Day-to-day use</h4>

Definitely you need a normal browser for doing day to day stuff. A browser you can use to login, update your stuff, send email, communicate to your real life friends, and do helpful [Quora](https://quora.com) stuff. Yes you can do this with Tor but definitely there's an irony there. Tor was made for anonymity, why would you enter your real identity then?

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

In iOS, there is no official Tor browser yet. There are options, one is the [Onion Browser](https://mike.tig.as/onionbrowser/) which normally fine but it lacks tab browsing, it felt weird using a browser that do not have this feature. The solution is to use [Red Onion](https://itunes.apple.com/us/app/id829739720), which is a good replacement for the Chrome browser. For normal browsing online I'm back to using Safari. 

<br/>

<h4 id="tor-browser-differentiation">1.3 Differentiation</h4>

If you're going to use Tor side by side with Firefox. You'll definitely confuse the two. To make sure you are using Tor most of the time you just need to install themes on both. 

![]({{ site.baseurl }}public/images/2015-06-21-05.jpg)

In the screenshot above I used 

- [Minimal Red](https://addons.mozilla.org/en-us/firefox/addon/minimal-red/) for Firefox
- [Solid Green](https://addons.mozilla.org/en-us/firefox/addon/solid-green/) for Tor


<br/>

<h3 id="vpn">2. VPN</h3>

I purchased a VPN from [Private Internet Access](https://www.privateinternetaccess.com/). Well for now I only bought a month of subscription. I may well extend it to a year because the service is good so far. They have an awesome support as well, you can have a chat with someone in their website anytime you need. 

![]({{ site.baseurl }}public/images/2015-06-21-07.jpg)

Currently I used the PIA on my laptop, desktop and iPhone. I never had problems using their software in my computers except in iOS. I experienced in my home wifi I was not able to connect using their iOS App, the quick fix was to use

<br/>

<h4 id="vpn-openvpn">2.1 OpenVPN</h4>

1. Install [OpenVPN](https://itunes.apple.com/us/app/openvpn-connect/id590379981) 
2. Use Safari and visit [OpenVPN iOS](https://www.privateinternetaccess.com/pages/openvpn-ios)
3. Select whichever you want then open the cert via OpenVPN

I'm still figuring out why my home wifi does not work with the PIA iOS app. OpenVPN is the way to go now for my phone. 

<br/>

<h4 id="vpn-spoof-mac">2.2 Spoof your MAC address</h4>

I know this is not so related to VPN. Using VPN you'll have your IP address randomized in that network. Even if you have your IP random, when you are connecting to public wifi your MAC address would then be logged in the router. 

If you are paranoid about this stuff (like me, duhhh) then you better change you MAC address before you connect to that wifi. Better use [SpoofMac](https://github.com/feross/SpoofMAC):

> I made this because changing your MAC address in Mac OS X is harder than it should be. The biggest annoyance is that the Wi-Fi card (Airport) needs to be manually disassociated from any connected networks in order for the change to be applied correctly. Doing this manually every time is tedious and lame.
https://github.com/feross/SpoofMAC

<br/>

<h3 id="duckduckgo">3. DuckDuckGo</h3>

![]({{ site.baseurl }}public/images/2015-06-21-03.png)

Now all my searches online is using DuckDuckGo search engine. After setting it as default in my computer I never felt the need to go back to using Google search. Well you might think that I'm trying to avoid Google as much as I can, in reality do we really need to use Google search's advanced feature on how it personalizes our search results? I do not think so.

DuckDuckGo is enough. In iOS 8, [Apple even added it as an option in Safari](https://www.theverge.com/2014/6/2/5773480/apple-will-let-users-pick-duckduckgo-for-search-ios-8). Apple acknowledges privacy in their devices to great lengths. 

- [DuckDuckGo has grown 600% since Apple made it a search option (and NSA revelations)](http://9to5mac.com/2015/06/16/duckduckgo-growth-ios/)
- [A search engine that doesn't track your information](http://player.cnbc.com/cnbc_global?playertype=synd&byGuid=3000387730&size=800_450#)

I did set DuckDuckGo on every device I use. It is very harmful that someone is looking at what you are interested and quickly turning that into a marketing venue for companies to sell. It felt that privacy to what you are doing is taken advantage.

<br/>

<h3 id="fastmail">4. FastMail</h3>

Since the Snowden/NSA plus the shutting down of [Lavabit](http://lavabit.com/) I was in search for a GMail alternative that would [prioritize privacy and security](https://www.fastmail.com/help/ourservice/security.html?domain=fastmail.fm). [FastMail](https://fastmail.com) has been my top choice since I read lots of good reviews; mostly from developers I follow in twitter. Another thing is the UI, which is close enough with GMail. Learning a new user interface is tough. Using FastMail's web interface and iOS app is a breeze.

![]({{ site.baseurl }}public/images/2015-06-21-06.png)

<br/>

<h4 id="fastmail-pros">4.1 Pros</h4>

- All my emails are roughly 1/2 GB only. It only took an hour for FastMail to fully migrate. I was quite impressed to have no problems during the migration. 
- FastMail is truly fast. Their website is definitely faster than GMail. It felt like it uses less browser resource. 
- No non-sense features like Google Talk/Chat and Plus.
- No targeted ads. 

<br/>

<h4 id="fastmail-cons">4.2 Cons</h4>

- What I truly missed from GMail is organizing mails using __Labels__. 
- In FastMail I needed to organize using folders, which is kind of old school. For that I also need to learn how to use [Sieve](http://fastmail.wikia.com/wiki/SieveFAQ) to filter emails and place them in their designated folder. In GMail you already have the __Social__ tab to keep track of all social related emails. 
- I need to pay $40 per year. 

Free is definitely good, of course there are tradeoffs. In the end nothing is actually free. We are paying for what we use. Google's algorithm on reading emails has been targeting ads to make money. To pay for your use of GMail. Why not you pay someone to give you a decent service that truly prioritizes consumers' needs?

<br/>

<h3 id="file-vault">5. File Vault</h3>

From [Use FileVault to encrypt the startup disk on your Mac](https://support.apple.com/en-us/HT204837)

![]({{ site.baseurl }}public/images/2015-06-21-02.jpg)

> You can use FileVault full disk encryption (FileVault 2) to help prevent access to documents and other data stored on your startup disk. FileVault uses XTS-AES 128 encryption. To use this feature, you need OS X Lion or later, and a working [OS X Recovery](http://support.apple.com/kb/HT4718) volume on your startup disk.

Enabling FileVault is a need. I just enabled this and didn't encounter any issue. 

<br/>
 
<h2 id="doing-more">Doing More!</h2>

There are more things I'm looking forward to strengthening the configuration I have. I'm kind of skeptic (as always) and looking for things to improve it. Below are the items I thought of doing

- Buy a VPN Router from [FlashRouters](http://www.flashrouters.com/). Setup as a dual router network at home and ensure all traffic going out via VPN is encrypted.
- Hop VPNs every few minutes. This is very interesting; it would assure that traffic is randomizing everywhere, which is most likely impossible to track. Maybe too extreme in my case. Still good for testing and research.
- Testing the computer using VPN with [Wireshark](http://wireshark.com/)
- Use [Tails](https://tails.boum.org/) on a dedicated laptop for use on public wifi

In brief, I'm really having fun doing this [OPSEC](https://en.wikipedia.org/wiki/Operations_security) stuff. It makes me dig and understand the underlying technologies that is shaping our security, privacy and freedom. 

Exciting and I'm definitely going to do more!


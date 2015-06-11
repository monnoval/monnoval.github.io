---
layout: post
title: Create Wordpress Multisite in the new Nitrous Pro
comments: true
---

![]({{ site.baseurl }}public/images/2015-06-10-01.png)

With so many trials, errors, coffee, and water. I finally have a working development server using Nitrous Pro. I actually did the following to migrate my development server from Nitrous Lite. The thought was easy. In reality I bumped into a lots of issues.

If you'd need a Wordpress Multisite I hope the following would help! 

<!--more-->

<br/>

## Contents

1. [Create a new Wordpress Container](#create-a-new-wordpress-container)
2. [Update port 3000 to 80](#update-port-3000-to-80)
3. [Create a Network / Multisite](#create-a-network-multisite)
4. [Other useful stuff](#other-useful-stuff)


<br/>

<h2 id='create-a-new-wordpress-container'>1. Create a new Wordpress Container</h2>

- Use the __Wordpress Stack Template__ for a hassle free Wordpress download
- After successfully creating a new container, go to the __IDE__

<div class="message">
  Make sure to NOT DO the Wordpress Famous 5-Minute Install. Nitrous by default setup this Wordpress to be viewed only in Port 3000. We will be changing that in Step 2.
</div>


<br/>

<h2 id='update-port-3000-to-80'>2. Update port 3000 to 80</h2>

Wordpress Multisite may only run on Port 80. This step is required for multisite. If you are using Wordpress without multisite, using the Port 3000 is fine. 

Inside the IDE you would need to use the console and follow the commands below 

```
# Change default port from Listen 3000 to Listen 80
$ sudo nano /etc/apache2/ports.conf

# Change <VirtualHost *:3000> to <VirtualHost *:80>
$ sudo nano /etc/apache2/sites-available/000-default.conf

# Still in 000-default.conf add the following
```

```
<Directory /var/www/html/>
  Options Indexes FollowSymLinks MultiViews
  AllowOverride All
  Order allow,deny
  allow from all
</Directory>
```

```
# Restart apache 
$ sudo service apache2 restart
```

Very important, you need to add Port 80 in [Port Configuration](http://docs.nitrous.io/v1.0/docs/port-configuration)

<br/>

<h2 id='create-a-network-multisite'>3. Create a Network / Multisite</h2>

You can now preview your Wordpress site via Port 80. Do the [Famous 5-Minute Install](https://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install) which would be easy.

[Step 2: Allow Multisite](http://codex.wordpress.org/Create_A_Network#Step_2:_Allow_Multisite) can be done via __IDE__.  Before continuing to Step 3 you first need to go back to console and activate __Mod_Rewrite__ by doing the following

```
$ sudo a2enmod rewrite
$ sudo service apache2 restart
```

Back again to Wordpress you can now continue [Step 3: Installing a Network](http://codex.wordpress.org/Create_A_Network#Step_3:_Installing_a_Network). For my setup I selected `Sub-directories`, less hassle for a development environment.

<br/>

<h2 id='other-useful-stuff'>4. Other useful stuff</h2>

Stuff below are quite useful to make your usage of the Container faster. 

<br/>

### Ignoring Files on sync

Ignoring directories and files is very important. Syncing all the files in either local or nitrous container would make the container slow. I noticed this when `node_modules` is synced all the time, Unison (the syncing app) would have a hard time syncing the files.

Inside `code` directory you would find `.syncignore`. Modify this file and add the following:

```
# File extensions
-----------------
*.dll
*.exe
*.so
*.7z
*.dmg
*.gz
*.iso
*.jar
*.rar
*.tar
*.zip
*.log
*.sql
*.sqlite
*.bundle

# Folders
----------------
logs/
node_modules/
bower_components/

# OS generated files
----------------
.DS_Store
.DS_Store?
._*
.Spotlight-V100
.Trashes
ehthumbs.db
Thumbs.db
```

<br/>

### Upgrading Ubuntu to Use the Latest Git Version

The default git is quite old and needs updating. Enter the commands below and you have a new shiny git

```
$ sudo add-apt-repository ppa:git-core/
$ sudo apt-get update
$ sudo apt-get install git
```






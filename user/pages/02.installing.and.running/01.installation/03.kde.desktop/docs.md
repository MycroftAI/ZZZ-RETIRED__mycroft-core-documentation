---
title: 'KDE Widget Install'
taxonomy:
    category:
        - docs
---


Note: This is still under development, so these instructions might change. 


##KDE Plasma
In case you don’t know, KDE is one of the most widely used desktop environments in the Linux world.  It can run on a variety of Linux distributions including the popular Kubuntu (KDE + Ubuntu) and Fedora KDE.  A 2016 survey by LinuxQuestions.org found KDE  to be the most popular Linux desktop environment (so did the 2015 and the 2014 surveys, BTW).  It is it is a shining example of a successful community-driven open source project.  And the KDE Plasma Desktop is simply a useful and beautiful interface.

##KDE + Mycroft
Aditya (known as ”aix” on the Mycroft Slack channels) is a Mycroft community member.  He got the Mycroft bug last year and started working early last summer on building GUIs for Mycroft.  He initially created a Gnome-based extension, and more recently became enthralled with the KDE Plasma Desktop environment.  So he decided to try his hand and building a Plasmoid for it.
His work on the Mycroft Plasmoid caught the attention of the KDE Development team.  Over the last few months we have been working with Aditya and the KDE developers figuring out how we can work together.  This weekend he officially moved his development repo onto the KDE servers as the first step in building an official Mycroft Plasmoid.
Community for the Win!
We are thrilled to be collaborating with the KDE Community on this project!  This is perfect example of what happens when open development tools and technologies are made available to smart people.  They make beautiful and interesting things!


##Installing Mycroft and the Plasmoid on KDE Neon
The Plasmoid is built on some of the latest technologies, so you need to be running KDE Plasma Desktop 5.9 or later.  If you aren’t using that yet, you can try it out easily using a VM.  Head over to the KDE Downloads page to get an ISO.  You can use that to either create and old-school installer CD, or you can create a VM and load the ISO directly into the virtual disc drive.
Once you have KDE, you can simply download this script and run it.  Here is a step by step:
Go to the Konsole (KDE’s terminal)
- `  cd ~`
- `   wget https://mycroft.ai/to/install_plasmoid_kde.sh `
- `   bash install_plasmoid_kde.sh `
That’s it!  You’ll be prompted a couple times to enter a password and the compile process will take a while, but it is straightforward.

##Installing Mycroft and the Plasmoid on Fedora KDE
Fedora KDE users can try this too.  All you need to do is go to the Terminal and type the following commands:
- `cd ~ `
- `   wget https://mycroft.ai/to/install_plasmoid_fedora.sh `
- `   bash install_plasmoid_fedora.sh `

##Adding it to your Desktop
After the install completes right click on the desktop and select “Add Widget…”.  Scroll through the list until you see “Project Mycroft”, then just click and drag it to your desktop.
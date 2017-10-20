---
title: 'Running and Interacting with Mycroft'
taxonomy:
    category:
        - docs
---
# Running Mycroft

## Git Install
Mycroft provides `start-mycroft.sh` to perform common tasks. This script uses a virtualenv created by `dev_setup.sh`.  Assuming you installed mycroft-core in your home directory run:
- `cd ~/mycroft-core`
- `./start-mycroft.sh debug`

The "debug" command will start the background services (microphone listener, skill, messagebus, and audio subsystems) as well as bringing up a text-based Command Line Interface (CLI) you can use to interact with Mycroft and see the contents of the various logs. Alternatively you can run `./start-mycroft.sh all` to begin the services without the command line interface.  Later you can bring up the CLI using `./start-mycroft.sh cli`.

The background services can be stopped as a group with:
- `./stop-mycroft.sh`

## Package Install
The debian package automatically starts Mycroft at boot.

## Raspberry Pi
Mycroft starts running immediately when the Pi boots, so there should be nothing you need to do. Check out the interacting with Mycroft below to get using it.

## KDE Plasmoid
Click on the Mycroft icon to open it up.  You”ll need to click the ▶️️ button at the top to tell Mycroft to begin listening.  Then you can say “Hey Mycroft, register my device” to create your pairing with home.mycroft.ai.  You’ll immediately notice the text is both spoken and displayed on screen in the widget.
In the alpha there were special handlers for “What’s the weather like?” that began to show the possibilities of combining voice interaction with a screen, combining voice and visuals.  We’ll be exposing those capabilities to our Skill API soon for other developers to explore.

# Interacting with Mycroft

Once you have the processes running in some form, it's very easy to start using Mycroft. Simply say `Hey Mycroft` followed by what you want him to respond to. A simple example is something like `Hey Mycroft, what time is it?`. Take a look at our [skills page](https://docs.mycroft.ai/skills.and.features) for a more extensive list of what you can ask Mycroft.

##Screens and other tools
Mycroft uses screens when it runs. This is helpful as you don't need to be watching every screen at once and it allows you to run Mycroft in the background.
There are 4 screens that run when you start up Mycroft:
- CLI -- This is the command line interface. You can use it instead of a microphone and simply type commands.
- Voice -- This is going to be responding to trigger words and what mycroft says. 
- Skills -- Executes the skills. When debugging skills, this will be a major source of information.
- Service -- This is the backend for Mycroft. Unless you're having major problems with Mycroft, this will be less useful. 

To see all of the currently running screens, use `screen -list`. To attach one of the screens to see the output, use `screen -r <screen-name>`. For more information about screens, take a look at the [screen manual](https://www.gnu.org/software/screen/manual/screen.html).



## Command Line tools for the Raspberry Pi
The Raspberry Pi doesn't use screens, just runs everything in the background as you effectively just have 1 terminal window running. To interact with the different elements of Mycroft on the pi, you can run any of the following commands from the command-line.

By default, Picroft boots into the view-log mode. To get back to this at any time, type
- `view_log`

in the terminal. To get out of this, press Control-C.

There are 4 other Mycroft tools you can access from the command line as well. 


### Mycroft Skills Manager
Mycroft Skills Manager (msm) is a command line tool used to add additional skills to Mycroft. It can install any skill listed on the [Mycroft Skills Repository](https://github.com/MycroftAI/mycroft-skills).

You can get instructions on using it with:

- `msm -h`

#### Other features of msm:

- `msm list`

Will list all currently available skills that are hosted on the repo.

- `msm install $GITHUB PATH OR SKILL NAME`

Allows you to install from the given repo or install a skill by name. Some skills have dependancies that the msm may miss, so make sure to look at github to ensure the skill will work. It effectively clones the skill for you, sets up dependencies, and places it in the correct directory.

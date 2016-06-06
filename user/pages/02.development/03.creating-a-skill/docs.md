---
title: Development Setup
taxonomy:
    category:
        - docs
---

# Creating a skill

## Setting up the folders

Once you've come up with your idea for a skill, make a new folder in `mycroft-core/mycroft/skills` with the desired skill name. Please note that this folder name should be lower-case, and do not use the names of frequently used python modules such as `time` to avoid conflicts.

For skills, there should generally be four things inside this folder - a folder called `dialog`, a file called `__init__.py`, a folder called `test`, and a folder called `vocab`. The folder structure should look like this:
```
- my-skill-name
-- dialog
-- test
-- vocab
-- __init__.py
```

### Dialog
The `dialog` folder contains subfolders for each spoken language the skill supports, each of which has `.dialog` files for what Mycroft should say when he executes a skill. The general structure looks like
```
-dialog
--en-us
---my.file1.dialog.
---my.file2.dialog
--pt-br
---my.file.1.dialog
---my.file.2.dialog
```

Take a look at the [Welcome Skill](https://github.com/MycroftAI/mycroft-core/tree/master/mycroft/skills/welcome) as an example. Its `dialog` folder has an `en-us` subfolder in it, which corresponds to American English. Inside is the dialog file `welcome.dialog`. It looks like
```
You're welcome
No problem
```
Note that Mycroft will not say both of these things when the skill is executed. Instead, he randomly chooses from each of the lines in the file to determine what to say.

### `__init__.py`
`__init__.py` is where you put the actual bulk of the skill, including a class that inherits from the MycroftSkill class and contains functions that pertain to how the skill operates. For now, just create an empty `__init__.py` file.

### Vocab
The `vocab` folder contains subfolders for each langauge supported, like `en-us`. Inside each language folder, we place `.voc` files which contain phrases or keywords that determine what Mycroft will listen for to trigger the skill.
```
-dialog
--en-us
---my.file.voc.
--pt-br
---my.file.voc
```

Looking at the [Welcome Skill](https://github.com/MycroftAI/mycroft-core/tree/master/mycroft/skills/welcome) again, there is a `WelcomeKeyword.voc` file in the `en-us` folder that contains the vocabulary for the Welcome Skill. It contains a list of keywords and phrases that trigger the skill, and looks like the following:
```
thank you
thanks
```
In this case, whenever a user says either `thank you` or `thanks`, Mycroft will be able to identify that those phrases are related to the Welcome Skill, and trigger the logic for that skill.

## Creating your first skill

### Header
When creating the skill, you need to start by importing the proper libraries for use in skills. 

```python
from os.path import dirname

from adapt.intent import IntentBuilder
from mycroft.skills.core import MycroftSkill
from mycroft.util.log import getLogger
```

`dirname` is used so that the class knows what files are in the current directory. Specifically, this is so that it can access the `.dialog` and `.voc`files.
IntentBuilder is used to register your new "intent", which is some action that Mycroft performs that requires a keyword. A single skill can have multiple intents, but my welcome skill only has one.
MycroftSkill is the class that your skill will inherit from.
getLogger is a wrapper for the python `logging` object that is used to log errors or relevant information.

You can then put your name as the `__author__` variable and create a logger.

```python
__author__ = 'first_initial_last_name'

LOGGER = getLogger(__name__)
```

For me, this would look like 

```python
__author__ = 'eward'

LOGGER = getLogger(__name__)
```

### Creating the class

I then declare the class as inheriting from MycroftSkill and declare its various member functions.

The skill file takes the general form of

```python
class <skillname>Skill(MycroftSkill):
    def __init__(self):
    
    def initialize(self):
    
    def handle_<skill_name_intent_1>_intent(self, message):
    
    def stop(self):
    
def create_skill():
    return <skillname>Skill()
```

For my welcome skill, this basic outline looks like
```python
class WelcomeSkill(MycroftSkill):
    def __init__(self):
    
    def initialize(self):
    
    def handle_welcome_intent(self, message):
    
    def stop(self):
    
def create_skill():
    return WelcomeSkill()
```
I'll now go through each of these functions and show what should be in each.

#### __init__
This is the constructor for the class, called when a new <skillname> object is created. In it you should call the constructor of the MycroftSkill class using `super` and initialize any member variable to the values you need
For me, this looks like
```python
def __init__(self):
    super(WelcomeSkill, self).__init__(name="WelcomeSkill") #Creates a MycroftSkill object and names it WelcomeSkill
```

#### initialize
This is where you should load all of the files in the directory and build each intent you want to create.
For the welcome skill, this looks like
```python
def initialize(self):
    self.load_data_files(dirname(__file__)) #Loads the files in the directory
    
    welcome_intent = IntentBuilder("WelcomeIntent").require("WelcomeKeyword").build()
    self.register_intent(welcome_intent, self.handle_welcome_intent)
```
This creates an intent named welcome_intent that requires a WelcomeKeyword, which is one of the phrases in the WelcomeKeyword.voc files.
It then registers that the function handle_welcome_intent is what should be called if the WelcomeKeyword is found.

#### handle_<intent_name>_intent
This is where you tell Mycroft to actually do what you want him to do. Frequently this will include something like a call to an API, but in this case, it will just be a very simple function call.
```python
def handle_welcome_intent(self, message):
    self.speak_dialog('Welcome')
```
This simply tells Mycroft to randomly select one of the pieces of dialogue from the Welcome.dialog file and speak it. In my case, the Welcome.dialog folder only contains the line `You're welcome`, so Mycroft will only say that one line.
In your skill, you can include as many ways of phrasing what he says as you want.

Note that in most Mycroft skills, the `handle_intent` function will include an API call or something else with a potential failure case, so it is best to enclose what you want to run in a `try`/`except` block.
Note also that it always takes two arguments, self and message, even if you never use message.
#### stop
This is the simplest of the essential functions. It should simply contain the keyword `pass`:
```python
def stop(self)
    pass
```
The keyword `pass` does nothing when executed. It is simply used when code is required syntactically but you do not want any code to run.

#### create_skill
This is outside of the class definition, and is used to actually create a skill object when the script is called.

---
title: Creating a skill
taxonomy:
    category:
        - docs
---

It is easy to develop skills for Mycroft. The most important part is to understand the structure of each skill. 


## Setting up the folders

Once you've come up with your idea for a skill, make a new folder in `mycroft-core/mycroft/skills` with the desired skill name. Please note that this folder name should be lower-case, and do not use the names of frequently used python modules such as `time` to avoid conflicts.

For skills, there should generally be four things inside this folder - a folder called `dialog`, a file called `__init__.py`, a folder called `test`, and a folder called `vocab`. You can also optionally have a `regex` folder, used to define regex phrases for more flexible vocab. The folder structure should look like this:
```
- my-skill-name
-- dialog
-- regex
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

Take a look at the [Hello World Skill](https://github.com/MycroftAI/mycroft-core/tree/master/mycroft/skills/helloworld) as an example. Its `dialog` folder has an `en-us` subfolder in it, which corresponds to American English. Inside are three dialog files. As an example, look inside `welcome.dialog`. It looks like
```
Any time.
Glad to be of service.
Glad to help.
My Pleasure.
No problem.
You're welcome.
```
Note that Mycroft will not say all of these things when the skill is executed. Instead, he randomly chooses from each of the lines in the file to determine what to say.

There are generally seperate .dialog files for each intent defined in the skill.

### `__init__.py`
`__init__.py` is where you put the actual bulk of the skill, including a class that inherits from the MycroftSkill class and contains functions that pertain to how the skill operates. For now, just create an empty `__init__.py` file.

### Vocab
The `vocab` folder contains subfolders for each language supported, like `en-us`. Inside each language folder, we place `.voc` files which contain phrases or keywords that determine what Mycroft will listen for to trigger the skill.
```
-vocab
--en-us
---my.file.voc.
--pt-br
---my.file.voc
```

Looking at the [Hello World Skill](https://github.com/MycroftAI/mycroft-core/tree/master/mycroft/skills/helloworld) again, there is a `ThankYouKeyword.voc` file in the `en-us` folder that contains the vocabulary for the thank you intent in the Hello World Skill. It contains a list of keywords and phrases that trigger the intent, and looks like the following:
```
thank you
thanks
```
In this case, whenever a user says either `thank you` or `thanks`, Mycroft will be able to identify that those phrases are related to the Hello World Skill, and trigger the logic for that skill.

There are generally seperate .voc files for each intent, and sometimes multiple files per intent.

### `Regex`
The `regex` folder contains subfolders for each supported language, such as `en-us`. Inside of each of these subfolders are `.rx` files that contain regular expressions to create more flexible keywords for intents.
```
-regex
--en-us
---my.regex.rx
--pt-br
---my.regex.rx
```
As an example of how to use this, take a look at the [weather skill](https://github.com/MycroftAI/mycroft-core/tree/master/mycroft/skills/weather).  In the `regex/en-us` folder, there is a `location.rx` file that defines a regular expression for the group `Location`. It looks like this:
```
(at|in) (?P<Location>.*)
```
This can be hard to parse, especially for people who have never seen regular expressions before. Regular expressions are essentially formatted pieces of text that can be used to match a wide range of phrases or strings. The chunks of text inside parentheses are called capturing groups, and are used to group similar things. For example, `(at|in)` is a group that will match either the word `at` or the word `in`. The block `(?P<Location>.*)` is more complicated. Like `(at|in)`, it is also a capturing group. However, the `?P<Location>` syntax is used to give a name to whatever it captures, which is very useful for our purposes. In this case, it gives it the name `Location`. The following two characters, `.*`, are what are used to define what this group captures. The dot character, `.` can be used in regex to represent any character except for newlines. The `*` special character is used to repeat something zero or more times. So together, `.*` matches zero or more characters of any kind. This means that the regex `(at|in) (?P<Location>.*)` will match something like `in London`, as well as `at the corner store`. In the first case, the `Location` is London, and in the second, the `Location` is `the corner store`. 

Regular expressions are very powerful and also quite complicated, and this has only explained a small part of them. Look through a [regex tutorial](http://www.regular-expressions.info/repeat.html) if you want to learn more.

### `Test`
The `test` folder contains a subfolder for intent, inside of which are `.intent.json` files. These are used to test whether your code properly creates intents.
```
-test
--intent
---sample1.intent.json
```

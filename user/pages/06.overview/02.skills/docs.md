---
title: Skills Overview
taxonomy:
  category:
    - docs
---

[Mustache][http://mustache.github.io/mustache.5.html]
[Library][https://github.com/defunkt/pystache]

[test](Mustache)

This is a more in-depth look at the Mycroft skills service, and is intended for developers or those interested in implementation details.

## Skills Service
The skills service itself is fairly simple. It loads every skill in the skills directory and the third party skills directory. This means it searches through each of those directories for folders containing an `__init__.py` file that has a `create_skill` function. For each skill found, it calls the `create_skill` function, binds the websocket client to the skill so that it will emit messages to the messagebus, and calls the skill's `initialize` function. Once the service is running, it also logs every message sent through the messagebus to the terminal.

## MycroftSkill 
The base skill class has several important parts.

### Common skill features

---
title: Messagebus Overview
taxonomy:
  category:
    - docs
---

This is a more in-depth look at the messagebus, intended for use by developers or anyone else who wants to understand how it works..

## Implementation
The messagebus relies on a Python library called [pyee](https://github.com/jfhbrook/pyee). This adds a new `EventEmitter` class that you can import. The functionality of this class is fairly simple, and consists of two main functions. From the pyee documentation:
```
ee.on(event, f=None): Registers the function f to the event name event. Example:

ee.on('data', some_fxn)

If f is not specified, ee.on returns a function that takes f as a callback, which allows for decorator styles:

@ee.on('data')
def data_handler(data):
    print data
    
ee.emit(event, *args, **kwargs): Emits the event, calling the attached functions with *args. For example:

ee.emit('data', '00101001')

This will call data('00101001')' (assuming data is an attached function). Returns False if no functions are attached to handle the emission (otherwise True).
```

This behavior is essential to how Mycroft works. By registering different types of messages to emitters, we can then call functions from multiple places just by emitting messages of certain types. 

We don't just directly emit messages, however. We have our own `Message` class that has attributes `message_type` and `metadata`. You can create this with something like `Message('speak', metadata={'utterance': 'Hello world'})`. When this is emitted by one of the emitters in Mycroft-Core, it is automatically converted into JSON to be sent across the messagebus. Once the message is received, it is then converted back into a Message, and is emitted again with the `message_type` as the event. __This means that when emitting something directly, you should emit a Message object with the message_type as the event you want, and the metadata as the information you want to include. To handle an event, use the message_type as the event name.__

You can emit whatever you want across the messagebus. Note, however, that there are currently a few message types that are currently emitted and tied to certain bits of Mycroft core functionality, as listed below.

## Message types

| Message Type        | Linked Functionality           | Example Metadata  |  Links |
| ------------- | ------------- | -----            | ------------ |
| detach_intent      | Detaches the intent specified | `{'intent_name': 'HelloWorldIntent'}`  | |
| <some_intent_name>      | Calls the handler of the intent named. Note that the metadata is sometimes not needed. | `{"HelloWorldKeyword": "hello world", "intent_type": "HelloWorldIntent", "utterance": "hello world", "confidence": 1.0, "target": null}` | |
| message      | Logs the json dumps of the message in the terminal  | A Message object  |  |
| mycroft.media.stop      | Tells any skills that inherit from the media base class to stop playing  | `{'origin': 'MediaSkill'}`  | |
| mycroft.paired      | Used to give updates on pairing process | `{'paired': True}`| |
| mycroft.stop      | Calls the `stop` function of any skill currently running. | N/A | |
| recognizer_loop:audio_output_start      |  |  | |
| recognizer_loop:audio_output_end      |  |  | |
| recognizer_loop:audio_output_start      |  |  | |
| recognizer_loop:audio_output_start      |  |  | |

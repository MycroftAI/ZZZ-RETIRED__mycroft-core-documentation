---
title: 'Ubuntu 16.04 Cheetsheet'
taxonomy:
    category:
        - docs
---

## 1. Install
```
cd ~/
git clone git@github.com:MycroftAI/mycroft-core.git
cd mycroft-core
./build_host_setup_debian.sh
./dev_setup.sh
(Compiling Mimic takes time - it takes 20 minutes on Thinkpad Carbon x1)
```

## 2. Start
```
./mycroft.sh start
./start.sh cli --quiet
```

## 3. Register
"Mycroft, register my device"

Go to home.mycroft.ai to add the device and enter the pairing code.

## 3. Play with Mycroft
Voice commands - https://docs.mycroft.ai/mark-1/using.mark1

## 4. Add skill
```
cd /ops/mycroft/skills
git clone https://github.com/ChrisFernandez/skill-radio-rne.git
```

"Mycroft, spanish news"

Other skills to try - https://github.com/MycroftAI/mycroft-skills

## 5. Miscellaneous

### Logs
```
screen -list
screen -r mycroft-service
screen -r mycroft-skills
screen -r mycroft-voice
screen -r mycroft-cli
```

### More logs

```
tail -f /var/log/mycroft-messagebus.log
tail -f /var/log/mycroft-skills.log
tail -f /var/log/mycroft-speech-client.log
```

### Config file
```
~/mycroft-core/mycroft/configuration
```


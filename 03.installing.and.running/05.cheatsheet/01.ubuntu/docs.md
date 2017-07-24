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
~/mycroft-core/mycroft.sh start
~/mycroft-core/start.sh cli --quiet
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
~/mycroft-core/mycroft/configuration/mycroft.conf
```

### Use Mycroft Skill Manager to add a skill
```
~/mycroft-core/msm/msm install https://github.com/kfezer/daily_meditation.git
```

And add to `~/mycroft-core/mycroft/configuration/mycroft.conf`
```
"DailyMeditationSkill":{
  "url_rss":"http://www.themeditationpodcast.com/tmp.xml"
},
```

Also try (but read in the readme what to add to mycroft.conf):
~/mycroft-core/msm/msm search https://github.com/btotharye/tsa-wait-skill

### SSH to Mark 1

TBD

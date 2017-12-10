# StandUpBot [![Build Status](https://travis-ci.org/peckadesign/StandUpBot.svg?branch=master)](https://travis-ci.org/peckadesign/StandUpBot)

Připomínač denních stand-upů.

Comamnd pošle do Slacku notifikaci o tom, ve které místnosti se konná stand-up. Funguje pouze v pracovní dny.

## Spuštění

Do lokálního nastavení v `config.local.neon` je potřeba uvést URL webhooku pro Slack.

```
> git clone git@github.com:peckadesign/StandUpBot.git
> cd StandUpBot
> cp config/config.local.example.neon config.local.neon
> composer install
> php bin/index.php
```

# phergie-freenode

## Warning

For example use only. This is a modified version of what powers the Phergie instance running on the Freenode IRC network.

## Installation

* Copy `.env.example` to `.env`
* Run `composer install`
* Copy `config.php.example` to `config.php`
* Edit `config.php` to your preferences (Pay attention to each `# CHANGE ME`)
* To start Phergie run: `./vendor/bin/phergie config.php`

Optional (Deployment):

* Edit `Envoy.blade.php` to your server environment

Optional (Service):

* Edit `phergie.conf` to your server environment
* Copy `phergie.conf` to `/etc/init/phergie.conf`
* Run `service phergie restart`

## Deployment

* SSH into server
* Pull master from origin
* Composer install
* Restart phergie service

From the project root:

`./vendor/bin/envoy run deploy:prod`

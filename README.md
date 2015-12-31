# phergie-freenode

## Installation

* Copy `.env.example` to `.env`
* Run `composer install`
* Copy `config.php.example` to `config.php`
* Edit `config.php` to your preferences (Pay attention to each `# CHANGE ME`)
* To start Phergie run: `./vendor/bin/phergie config.php`

## Deployment

* SSH into server
* Pull master from origin
* Composer install
* Restart phergie service

From the project root:

`./vendor/bin/envoy run deploy:prod`

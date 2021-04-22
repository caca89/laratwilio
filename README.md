# Laratwilio
This is a Laravel package for sending SMS and WA with Twilio

## Installation
Require the package via composer into your project
```shell
composer require caca89/laratwilio
```
### Configurations
Add file `laratwilio.php` at folder config, and type it as below
```php
<?php

return [
    'account_sid' => env('TWILIO_ACCOUNT_SID'),
    'auth_token' => env('TWILIO_AUTH_TOKEN'),
    'message_sid' => env('TWILIO_MESSAGE_SERVICE_SID'),
    'sms_from' => env('TWILIO_SMS_FROM'),
	'wa_from' => env('TWILIO_WA_FROM'),
];
```
Next, edit your `.env` file with your Twilio Credentials
```
TWILIO_ACCOUNT_SID=
TWILIO_AUTH_TOKEN=
TWILIO_MESSAGE_SERVICE_SID=
TWILIO_SMS_FROM=
TWILIO_WA_FROM=
```

### Usage
To send a SMS message, you can use the notifySms()
```php
<?php
use Caca89\LaraTwilio\Facades\LaraTwilio;

$sendSms = LaraTwilio::notifySms('Hello', '+62801234567890', )

return $sendSms;
```
To send a WA message, you can use the notifyWa()
```php
<?php
use Caca89\LaraTwilio\Facades\LaraTwilio;

$sendSms = LaraTwilio::notifySWa('Hello', '+62801234567890', )

return $sendSms;
```

## Disclaimer
This is my first package and I'm very new to all this.

Most likely I'm doing lots of things wrong. Use at your own risk.

If there is a better way of doing anything here - I'm looking forward to your pull requests.

May the force be with you.
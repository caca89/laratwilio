<?php

return [
    'account_sid' => env('TWILIO_ACCOUNT_SID'),
    'auth_token' => env('TWILIO_AUTH_TOKEN'),
    'message_sid' => env('TWILIO_MESSAGE_SERVICE_SID'),
    'sms_from' => env('TWILIO_SMS_FROM'),
	'wa_from' => env('TWILIO_WA_FROM'),
];

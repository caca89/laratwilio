<?php

namespace Caca89\LaraTwilio;

use Twilio\Rest\Client;

class LaraTwilio
{
    /** @var Twilio\Rest\Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function notifySms($message, $to, $from = null)
    {
        $from = is_null($from) ? config('laratwilio.sms_from') : $from;
        return $this->client->messages->create($to, [
            'from' => $from,
            'body' => $message
        ]);
    }
    public function notifyWa($message, $to, $from = null)
    {
        $from = is_null($from) ? config('laratwilio.wa_from') : $from;
        return $this->client->messages->create('whatsapp:'.$to, [
            'from' => 'whatsapp:'.$from,
            'body' => $message
        ]);
    }
}

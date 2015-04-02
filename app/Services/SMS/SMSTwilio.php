<?php namespace App\Services\SMS;


use Twilio\Facades\Twilio;

class SMSTwilio implements SMSInterface {

    public function send($to, $message) {
        Twilio::sms($to, $message);
    }
}
<?php namespace Wundership\Services\SMS;


interface SMSInterface {

    /**
     * Sends SMS to given mobile number
     * @param $to Receiver (+00 0000000000)
     * @param $message
     * @return mixed
     */
    public function send($to, $message);
}
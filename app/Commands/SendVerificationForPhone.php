<?php namespace Wundership\Commands;

use Wundership\Services\SMS\SMSInterface;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class SendVerificationForPhone extends Command implements SelfHandling {

    protected $phone;

	/**
     * Create a new command instance.
     *
     * @param $phone
     */
	public function __construct($phone)
	{
		$this->phone = $phone;
	}

	/**
     * Execute the command.
     *
     * @param SMSInterface $sms

     */

	public function handle(SMSInterface $sms)
	{
        $sms->send($this->phone->number, 'Your verification code: '.$this->token($this->phone));
	}

    private function token($phone)
    {
        $token = str_random(6);
        $phone->verify_token = $token;
        $phone->expires_at = Carbon::now()->addHours(1);
        $phone->save();
        return $token;
    }

}

<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\VerifiedPhoneNumber;
use Illuminate\Contracts\Bus\SelfHandling;
use libphonenumber\PhoneNumberUtil;

class CreateVerifiedPhoneNumber extends Command implements SelfHandling {

    protected $user;

    protected $number;

    protected $country;

    /**
     * Create a new command instance.
     *
     * @param $user
     * @param $number
     * @param $country
     */
	public function __construct($user, $number, $country)
	{
		$this->user = $user;
        $this->number = $number;
        $this->country = $country;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		$util = PhoneNumberUtil::getInstance();
        $num = $util->parse($this->number, $this->country);
        return VerifiedPhoneNumber::create([
            'user_id' => $this->user->id,
            'country' => $this->country,
            'country_prefix' => $num->getCountryCode(),
            'phone_number' => $num->getNationalNumber(),
        ]);
	}

}

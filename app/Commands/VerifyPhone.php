<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\VerifiedPhoneNumber;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class VerifyPhone extends Command implements SelfHandling {

    protected $token;

    /**
     * Create a new command instance.
     *
     * @param $token
     */
	public function __construct($token)
	{
		$this->token = $token;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
        $phone = VerifiedPhoneNumber::where('verify_token', $this->token)->first();
        if ($phone && Carbon::now() <= $phone->expires_at) {
            $phone->verified_at = Carbon::now();
            $phone->verified = true;
            $phone->save();
            return true;
        }
        return false;
	}

}

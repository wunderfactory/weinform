<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\Verification;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Bus;

class CreateVerification extends Command implements SelfHandling {


    protected $user;
    protected $picture;
    /**
     * Create a new command instance.
     *
     * @param $user
     * @param $picture
     */
	public function __construct($user, $picture)
	{
		$this->user = $user;
        $this->picture = $picture;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		$verification = Verification::create(
            ['user_id' => $this->user->id]);
        Bus::dispatch(
            new CreateVerificationPicture($this->picture, $verification)
        );
        return $verification;
	}

}